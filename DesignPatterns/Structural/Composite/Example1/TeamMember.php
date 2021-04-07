<?php


class TeamMember implements ITeamMember
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function info()
    {
        return "Team member: {$this->name}";
    }
}