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



abstract class Developer implements Worker, Coder {

}

abstract class Manager implements Worker, ClientFacer {

}