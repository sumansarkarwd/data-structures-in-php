<?php

namespace App;

class ListNode {
    public $data;
    public $next;

    public function __construct(string $data=null)
    {
        $this->data = $data;
    }
}