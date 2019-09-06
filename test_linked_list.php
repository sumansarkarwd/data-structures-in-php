<?php

use App\LinkedList;

require "./vendor/autoload.php";

$list = new LinkedList;
$list->insert("Book 1");
$list->insert("Book 2");
// $list->insert("Book 3");
// $list->insert("Book 4");

// $list->insertBefore("Book 3", "Book 4");

// $list->insertAfter("Book 4", "Book 5");

// $list->deleteFirstNode();

// $list->deleteLastNode();

// $list->delete("Book 2");

// $list->display();

// var_dump($list->get(2));

$list->reverse();
$list->display();

// var_dump($list->search("Book 2"));
?>