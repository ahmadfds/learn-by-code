<?php

class PC implements IOnOffSwitchable
{

    public function on()
    {
        echo "The PC has been turned on.\n";
    }

    public function off()
    {
        echo "The PC has been turned off.\n";
    }
}