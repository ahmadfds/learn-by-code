<?php


interface Worker
{
    public function takeBreak();

    public function getPaid();
}

interface Coder
{
    public function code();
}

interface ClientFacer
{
    public function callToClient();

    public function attendMeetings();
}



class Developer implements Worker, Coder {
    public function takeBreak()
    {
        // TODO: Implement takeBreak() method.
    }

    public function getPaid()
    {
        // TODO: Implement getPaid() method.
    }

    public function code()
    {
        // TODO: Implement code() method.
    }

    public function callToClient()
    {
        // TODO: Implement callToClient() method.
    }

    public function attendMeetings()
    {
        // TODO: Implement attendMeetings() method.
    }
}

class Manager implements Worker, ClientFacer {
    public function takeBreak()
    {
        // TODO: Implement takeBreak() method.
    }

    public function getPaid()
    {
        // TODO: Implement getPaid() method.
    }

    public function code()
    {
        // TODO: Implement code() method.
    }

    public function callToClient()
    {
        // TODO: Implement callToClient() method.
    }

    public function attendMeetings()
    {
        // TODO: Implement attendMeetings() method.
    }
}