<?php


/**
 * when a sub-type overrides a parent method then the return type of the
 * child must exactly match the parent and may not be omitted.
 */

Class Garden
{
    public function quantity(): int
    {
        return $quantity;
    }

    public function html() {
        for($i=0; $i<$this->quantity();$i++) {
            // do something
        }
    }
}
Class Plots Extends Garden
{
    public function quantity():array
    {
        return array($quantity);
    }

}




$plants = array(
    'carrots' => new Carrot(5),
    'broccoli'=> new Broccoli(2),
);

$garden = new Plot($plants);
$plotOutput = new GardenOutputter($plot);

$garden->html();
$plot->html();  // violation
