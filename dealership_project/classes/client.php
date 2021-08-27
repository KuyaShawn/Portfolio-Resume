<?php

class normalClient
{
    private $_fName;
    private $_lName;
    private $_pNum;
    private $_email;
    private $_make;
    private $_model;
    private $_category;
    private $_year;
    private $_miles;

    /**
     * Clients constructor.
     */
    public function __construct()
    {
        $this->_fName = "";
        $this->_lName = "";
        $this->_pNum = "";
        $this->_email = "";
        $this->_make = array();
        $this->_model = "";
        $this->_year = array();
        $this->_miles = "";
        $this->_category = array();
    }

    /**
     * @return mixed|string
     */
    public function getFName()
    {
        return $this->_fName;
    }

    /**
     * @param mixed|string $fName
     */
    public function setFName($fName)
    {
        $this->_fName = $fName;
    }

    /**
     * @return mixed|string
     */
    public function getLName()
    {
        return $this->_lName;
    }

    /**
     * @param mixed|string $lName
     */
    public function setLName($lName)
    {
        $this->_lName = $lName;
    }

    /**
     * @return mixed|string
     */
    public function getPNum()
    {
        return $this->_pNum;
    }

    /**
     * @param mixed|string $pNum
     */
    public function setPNum($pNum)
    {
        $this->_pNum = $pNum;
    }

    /**
     * @return mixed|string
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed|string $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed|string
     */
    public function getMake()
    {
        return $this->_make;
    }

    /**
     * @param mixed|string $make
     */
    public function setMake($make)
    {
        $this->_make = $make;
    }

    /**
     * @return mixed|string
     */
    public function getModel()
    {
        return $this->_model;
    }

    /**
     * @param mixed|string $model
     */
    public function setModel($model)
    {
        $this->_model = $model;
    }

    /**
     * @return int|mixed
     */
    public function getYear()
    {
        return $this->_year;
    }

    /**
     * @param int|mixed $year
     */
    public function setYear($year)
    {
        $this->_year = $year;
    }

    /**
     * @return int|mixed
     */
    public function getMiles()
    {
        return $this->_miles;
    }

    /**
     * @param int|mixed $miles
     */
    public function setMiles($miles)
    {
        $this->_miles = $miles;
    }

    /**
     * @return mixed|string
     */
    public function getCategory()
    {
        return $this->_category;
    }

    /**
     * @param mixed|string $category
     */
    public function setCategory($category)
    {
        $this->_category = $category;
    }


}