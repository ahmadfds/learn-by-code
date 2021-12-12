<?php

class TurnOnCommand implements ICommand
{
    private IOnOffSwitchable $receiver;

    public function __construct(IOnOffSwitchable $receiver)
    {
        $this->receiver = $receiver;
    }

    public function exec()
    {
        $this->receiver->on();
    }
}