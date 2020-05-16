<?php


namespace Model;

use PDO;
class BorrowDB extends LibraryDB
{
    public function __construct()
    {
        parent::__construct();
        $this->nameTable = 'borrows';
    }

    function add($borrow) {
        $id = $borrow->getId();
        $studentId = $borrow->getStudentId();
        $borrowDate = $borrow->getBorrowDate();
        $returnDate = $borrow->getReturnDate();
        $sql = "INSERT INTO $this->nameTable (id, student_id, borrow_date, return_date) VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->bindParam(2,$studentId);
        $stmt->bindParam(3,$borrowDate);
        $stmt->bindParam(4,$returnDate);
        $stmt->execute();
    }

    function search($keyword) {
        $sql = "SELECT * FROM $this->nameTable WHERE id LIKE '%$keyword%' OR student_id LIKE '%$keyword%' OR borrow_date LIKE '%$keyword%' OR return_date LIKE '%$keyword%' OR pay_date LIKE '%$keyword%' OR status LIKE '%$keyword%';";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    function update($status,$pay_date) {

    }
}