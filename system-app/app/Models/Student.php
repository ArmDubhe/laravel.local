<?php

namespace App\Models;

class Student
{
    var $id;
    var $name;
    var $price;
    var $quantity;
    var $photo;

    function __construct($id, $name, $price, $quantity, $photo)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->photo = $photo;
    }
}