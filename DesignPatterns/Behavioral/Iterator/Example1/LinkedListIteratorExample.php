<?php

class LLNode
{
    protected mixed $payload = null;
    protected ?LLNode $next = null;

    public function __construct(mixed $payload = null, ?LLNode $next = null)
    {
        $this->payload = $payload;
        $this->next = $next;
    }

    /**
     * @return mixed|null
     */
    public function getPayload(): mixed
    {
        return $this->payload;
    }

    /**
     * @return LLNode|null
     */
    public function getNext(): ?LLNode
    {
        return $this->next;
    }

    /**
     * @param LLNode|null $next
     */
    public function setNext(?LLNode $next): void
    {
        $this->next = $next;
    }

    /**
     * @param mixed|null $payload
     */
    public function setPayload(mixed $payload): void
    {
        $this->payload = $payload;
    }
}


class LLPayloadIterator implements \Iterator
{

    private LLNode $rootNode;
    private ?LLNode $currentNode;
    private int $offset = 0;

    public function __construct(LLNode $rootNode)
    {
        $this->currentNode = $this->rootNode = $rootNode;
    }

    public function current()
    {
        if ($this->currentNode)
            return $this->currentNode->getPayload();
        return null;
    }

    public function next()
    {
        if ($this->currentNode) {
            $this->currentNode = $this->currentNode->getNext();
            $this->offset++;
        }
    }

    public function key()
    {
        return $this->offset;
    }

    public function valid()
    {
        if ($this->currentNode) {
            return true;
        }
        return false;
    }

    public function rewind()
    {
        $this->currentNode = $this->rootNode;
        $this->offset = 0;
    }
}


function main(): void
{
    $node = new LLNode('node 1',
        new LLNode('node 2',
            new LLNode('node 3',
                new LLNode('node 4')
            )
        )
    );

    foreach (new LLPayloadIterator($node) as $offset => $payload) {
        echo "{$offset} => {$payload}\n";
    }
}


main();