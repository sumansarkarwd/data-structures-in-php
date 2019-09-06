<?php

namespace App\Stack;

interface Stack {
    public function push(string $item);
    public function pop();
    public function top();
    public function isEmpty();
}