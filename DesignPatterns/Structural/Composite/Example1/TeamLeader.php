<?php


class TeamLeader implements ITeamMember
{
    private $name;

    /**
     * @var ITeamMember[]
     */
    private $teamMembers = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addTeamMember(ITeamMember $teamMember):TeamLeader
    {
        $this->teamMembers[] = $teamMember;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function info()
    {
        $info = "Team Leader: {$this->name}\n";
        foreach($this->teamMembers as $teamMember) {
            $info .= '    '.str_replace("\n", "\n    ", $teamMember->info())."\n";
        }
        return $info;
    }
}