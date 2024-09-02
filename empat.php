<?php

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type): array
    {
        if ($type == 'name') {
            return [$this->name];
        } elseif ($type == 'description') {
            return [$this->description];
        } else {
            return ['name' => $this->name, 'description' => $this->description];
        }
    }
}

class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    public function getPhone(): int
    {
        return $this->phone;
    }
}

class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher)
    {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll(): array
    {
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'language' => $this->language,
            'numberOfPage' => $this->numberOfPage,
            'author' => $this->author,
            'publisher' => $this->publisher
        ];
    }

    public function detail($ISBN): array
    {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return [];
        }
    }
}


$author = new Author("J.K. Rowling", "Penulis dari seri Harry Potter");
$publisher = new Publisher("Bloomsbury", "50 Bedford Square, London");
$publisher->setPhone(123456789);

$book = new Book(9780747532743, "Harry Potter and the Philosopher's Stone", "Buku pertama dari seri Harry Potter", "Fantasy", "English", 223, $author->name, $publisher->name);

print_r($book->showAll());

print_r($book->detail(9780747532743));

?>
