<?php

class Event
{
    protected ?ObserverChainNode $firstObserverChainNode = null;
    protected ?ObserverChainNode $lastObserverChainNode = null;

    public function register(IObserver $observer)
    {
        $newObjserverChain = new ObserverChainNode($observer);
        if($this->lastObserverChainNode) {
            $this->lastObserverChainNode->setNext($newObjserverChain);
            $this->lastObserverChainNode = $newObjserverChain;
        } else {
            $this->firstObserverChainNode = $this->lastObserverChainNode = $newObjserverChain;
        }
    }

    public function fire(array $params)
    {
        $this->firstObserverChainNode->handle($params);
    }
}