<?php

class TurnOffCommand implements ICommand
{
    private IOnOffSwitchable $receiver;

    public function __construct(IOnOffSwitchable $receiver)
    {
        $this->receiver = $receiver;
    }

    public function exec()
    {
        $this->receiver->off();
    }
}