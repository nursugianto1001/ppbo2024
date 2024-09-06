<?php

require_once "Author.php";
require_once "Publisher.php";
require_once "Book.php";


$author = new Author("J.K. Rowling", "Penulis dari seri Harry Potter");
$publisher = new Publisher("Bloomsbury", "50 Bedford Square, London");
$publisher->setPhone(123456789);

$book = new Book(9780747532743, "Harry Potter and the Philosopher's Stone", "Buku pertama dari seri Harry Potter", "Fantasy", "English", 223, $author->name, $publisher->name);

print_r($book->showAll());

print_r($book->detail(9780747532743));

?>
