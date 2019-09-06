<?php

use App\Stack\Books;
use App\Stack\Cars;

require "./vendor/autoload.php";

try{
    // $books = new Books(5);
    
    // $books->push("Book 1");
    // $books->push("Book 2");
    // $books->push("Book 3");
    // $books->push("Book 4");
    // $books->push("Book 5");

    // $books->pop();
    // $books->pop();
    // $books->pop();
    // $books->pop();
    // // $books->pop();
    // // $books->pop();

    // echo $books->top();

    $cars = new Cars;

    $cars->push("Car 1");
    $cars->push("Car 2");
    $cars->pop();
    $cars->push("Car 3");
    // $cars->pop();

    echo $cars->top();
} catch(Exception $e) {
    echo $e->getMessage();
}