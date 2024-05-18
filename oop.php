<?php
// class name crate : Book
class Book {
// TODO: Add properties as Private
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
// TODO: Initialize properties        
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }
// TODO: Add getTitle method
    public function getTitle() {
        return $this->title;
    }
// TODO: Add getAvailableCopies method
    public function getAvailableCopies() {
        return $this->availableCopies;
    }
 // TODO: Add borrowBook method
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            // echo "Book '{$this->title}' borrowed successfully.\n";
        } else {
            echo "Sorry, '{$this->title}' is out of stock.\n";
        }
    }
 // TODO: Add returnBook method
    public function returnBook() {
        $this->availableCopies++;
        // echo "Book '{$this->title}' returned successfully.\n";
    }
}
// class name crate : Member
class Member {
// TODO: Add properties as Private
    private $name;

    public function __construct($name) {
        // TODO: Initialize properties
        $this->name = $name;
    }
 // TODO: Add getName method
    public function getName() {
        return $this->name;
    }
 // TODO: Add borrowBook method
    public function borrowBook($book) {
        // echo "{$this->name} is borrowing '{$book->getTitle()}'.\n";
        $book->borrowBook();
    }
 // TODO: Add returnBook method
    public function returnBook($book) {
        // echo "{$this->name} is returning '{$book->getTitle()}'.\n";
        $book->returnBook();
    }
}

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// // Books shown before borrowing 

/*
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
*/


// // Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

//  TODO: Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// // Display available copies after borrowing


echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";


// // Demonstrate book returning by members
$member1->returnBook($book1);
$member2->returnBook($book2);

// // Display available copies after returning

/*
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
*/


?>
