<?php

namespace App\Stack;

use OverflowException;
use UnderflowException;

class Books implements Stack
{
    private $limit;
    private $stack;

    public function __construct(int $limit = 0)
    {
        $this->limit = $limit;
        $this->stack = [];
    }

    public function push(string $newBook)
    {
        if(count($this->stack) < $this->limit) {
            array_push($this->stack, $newBook);
        } else {
            throw new OverflowException("Stack is full!");
        }
    }

    public function pop()
    {
        if($this->isEmpty()) {
            throw new UnderflowException("Stack is empty!");
        } else {
            array_pop($this->stack);
        }
    }

    public function top()
    {
        return end($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}
