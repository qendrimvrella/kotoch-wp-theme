<?php

class Custom_Walker_Nav_Menu_Footer extends Walker_Nav_Menu
{
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        echo '<li class="mb-2"><a href="'.$item->url.'"' . 'class="text-dark"' .'>'.$item->title;
    }

    public function end_el(&$output, $item, $depth = 0, $args = array())
    {
        echo '</a></li>';
    }
}