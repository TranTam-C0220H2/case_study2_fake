<?php


namespace Library;


class Borrows
{
    protected $id;
    protected $student_id;
    protected $borrow_date;
    protected $return_date;
    protected $status;

    public function __construct($id, $student_id, $return_date)
    {
        $this->id = $id;
        $this->student_id = $student_id;
        $this->borrow_date = date('Y-m-d');
        $this->return_date = $return_date;
        $this->status = 'Borrow';
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->student_id;
    }

    /**
     * @return mixed
     */
    public function getBorrowDate()
    {
        return $this->borrow_date;
    }

    /**
     * @return mixed
     */
    public function getReturnDate()
    {
        return $this->return_date;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

}