<?php

class Custom_Walker_Nav_Menu_Top extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) 
    {
        $is_current_item = '';
        if (array_search('current-menu-item', $item->classes) != 0) {
            $is_current_item = ' class="nav-link active"';
        }
        echo '<li class="nav-item mx-2"><a href="'.$item->url.'" '.$is_current_item.' class="nav-link">'.$item->title;
    }

    public function end_el(&$output, $item, $depth = 0, $args = array()) 
    {
        echo '</a></li>';
    }
}