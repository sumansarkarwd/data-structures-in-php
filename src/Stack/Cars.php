<?php

namespace App\Stack;

use App\LinkedList;
use UnderflowException;

class Cars implements Stack{
    private $stack;

    public function __construct()
    {
        $this->stack = new LinkedList;
    }

    public function push(string $item)
    {
        $this->stack->insert($item);
        return true;
    }

    public function pop()
    {
        if($this->isEmpty()) {
            throw new UnderflowException("Stack is empty!");
        } else {
            $this->stack->deleteLastNode();
            return true;
        }
    }

    public function top()
    {
        if($this->isEmpty()) {
            throw new UnderflowException("Stack is empty!");
        } else {
            return $this->stack->get($this->stack->getCount())->data;
        }
    }

    public function isEmpty()
    {
        return $this->stack->isEmpty();
    }
}