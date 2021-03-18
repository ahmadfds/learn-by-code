<?php


/**
 * We have a Rectangle class that contains the data for a rectangle, and a Board class that is used as a collection of Rectangle objects.
 * With this setup we can easily find out the area of the board by looping through the items in the $rectangles collection and calculating their area.
 * The problem with this setup is that we are restricted by the types of object we can pass to the Board class.
 * For example, if we wanted to pass a Circle object to the Board class we would need to write conditional statements and code to detect and calculate
 * the area of the Board.
 */

class Rectangle {
    public $width;
    public $height;
}

class Board {
    public $rectangles = [];
    public function calculateArea() {
        $area = 0;
        foreach ($this->rectangles as $rectangle) {
            $area += $rectangle->width * $rectangle->height;
        }
    }
}