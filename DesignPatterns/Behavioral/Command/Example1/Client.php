<?php

require_once __DIR__.'/ICommand.php';
require_once __DIR__.'/IOnOffSwitchable.php';
require_once __DIR__.'/Light.php';
require_once __DIR__.'/PC.php';
require_once __DIR__.'/RemoteControl.php';
require_once __DIR__.'/TurnOffCommand.php';
require_once __DIR__.'/TurnOnCommand.php';


function main()
{
    $bedRoomLight = new Light();
    $myLaptop = new PC();

    $remoteControl = new RemoteControl();
    $remoteControl->addButton('light-on', new TurnOnCommand($bedRoomLight));
    $remoteControl->addButton('light-off', new TurnOffCommand($bedRoomLight));
    $remoteControl->addButton('pc-on', new TurnOnCommand($myLaptop));
    $remoteControl->addButton('pc-off', new TurnOffCommand($myLaptop));

    //
    // press the buttons
    //
    $remoteControl->press('light-on');
    $remoteControl->press('pc-on');
    $remoteControl->press('light-off');
    $remoteControl->press('pc-off');
}
main();