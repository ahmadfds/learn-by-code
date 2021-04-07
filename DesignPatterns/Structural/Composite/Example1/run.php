<?php

require __DIR__.'/ITeamMember.php';
require __DIR__.'/TeamMember.php';
require __DIR__.'/TeamLeader.php';

$teamLeader = (new TeamLeader('Yousef'))
    ->addTeamMember( new TeamMember('Ahmad') )
    ->addTeamMember( new TeamMember('Qahan') )
    ->addTeamMember(
        (new TeamLeader('Tahboub'))
        ->addTeamMember(new TeamMember('Majdee') )
        ->addTeamMember(new TeamMember('Yaseen') )
        ->addTeamMember(new TeamMember('Mamdouh') )
    )
    ->addTeamMember( new TeamMember('Alaa') )
    ->addTeamMember( new TeamMember('Mahmoud') );


echo $teamLeader->info();