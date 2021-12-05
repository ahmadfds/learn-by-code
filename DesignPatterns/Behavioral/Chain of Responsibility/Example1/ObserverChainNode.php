<?php

class ObserverChainNode
{
    private ?ObserverChainNode $next = null;
    private IObserver $observer;

    public function __construct(IObserver $observer)
    {
        $this->observer = $observer;
    }

    public function setNext(ObserverChainNode $next)
    {
        $this->next = $next;
    }

    public function handle(array $params) {
        if($this->observer->handle($params)) {
            if($this->next) {
                $this->next->handle($params);
            }
        }
    }
}