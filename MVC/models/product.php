<?php
class Product{
    public $name;
    public $price;
    public $author;
    public $producter;
    public $page;
    public $year;
    public $info;
    public $image;
    public $qty;
    public $type;

    public function __construct($name, $price, $author, $producter, $page, $year, $info, $image, $qty, $type)
    {
        $this->name = $name;
        $this->price = $price;
        $this->author = $author;
        $this->producter = $producter;
        $this->page = $page;
        $this->year = $year;
        $this->info = $info;
        $this->image = $image;
        $this->qty = $qty;
        $this->type = $type;
    }
    
}

?>