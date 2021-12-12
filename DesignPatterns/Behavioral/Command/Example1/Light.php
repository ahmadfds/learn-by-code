<?php

class Light implements IOnOffSwitchable
{

    public function on()
    {
        echo "The Light has been turned on.\n";
    }

    public function off()
    {
        echo "The Light has been turned off.\n";
    }
}