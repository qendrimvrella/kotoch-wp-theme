<?php 

class DBHelper
{
    private $tableName;
    private $wpdb;

    public function __construct($tableName) 
    { 
        global $wpdb;
        $this->wpdb = $wpdb;
        $this->tableName = $wpdb->prefix . $tableName;
    }

    public function all()
    {
        return $this->wpdb->get_results("SELECT * FROM $this->tableName ORDER BY created_at DESC");
    }

    public function create($data)
    {
        return $this->wpdb->insert($this->tableName, $data);
    }

    public function update($data, $where)
    {
        return $this->wpdb->update($this->tableName, $data, $where);
    }

    public function delete($where)
    {
        return $this->wpdb->delete($this->tableName, $where);
    }

    public function where($data)
    {
        $condition = '';
        $index = 0;

        foreach ($data as $key => $d) {
            $condition .= "`$key` = '$d'";
            if (count($data) >= 1 && count($data) - 1 > $index) {
                $condition .= " AND ";
            }
            $index++;
        }

        return $this->wpdb->get_results("SELECT * FROM $this->tableName WHERE $condition ORDER BY created_at DESC");
    }

    public function find($field, $value)
    {
        return $this->wpdb->get_row("SELECT * FROM $this->tableName WHERE `$field` = '$value' LIMIT 1");
    }
}
