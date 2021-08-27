<?php

class WarrantyClient extends normalClient
{
    private $_interiorAdditions;
    private $_exteriorAdditions;

    /**
     * WarrantyClient constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->_interiorAdditions = array();
        $this->_exteriorAdditions = array();
    }

    /**
     * @return mixed
     */
    public function getInteriorAdditions()
    {
        return $this->_interiorAdditions;
    }

    /**
     * @param mixed $interiorAdditions
     */
    public function setInteriorAdditions($interiorAdditions)
    {
        $this->_interiorAdditions = $interiorAdditions;
    }

    /**
     * @return mixed
     */
    public function getExteriorAdditions()
    {
        return $this->_exteriorAdditions;
    }

    /**
     * @param mixed $exteriorAdditions
     */
    public function setExteriorAdditions($exteriorAdditions)
    {
        $this->_exteriorAdditions = $exteriorAdditions;
    }


}