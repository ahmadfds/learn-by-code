<?php

Class RemoteControl
{

    /**
     * @var ICommand[]
     */
    protected array $buttons = [];

    public function addButton(string $name, ICommand $command) {
        $this->buttons[$name] = $command;
    }

    public function press($buttonName)
    {
        $this->buttons[$buttonName]?->exec();
    }

}