<?php
class Items {
    private $items;

    public function __construct(){
        $this->items[1]="first";
        $this->items[2]="second";
        $this->items[3]="third";
    }

    public function getItem($id){
        return $this->items[$id];
    }
}
