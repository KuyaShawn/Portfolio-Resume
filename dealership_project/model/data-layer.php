<?php

/**
 * Class DataLayer
 */

//Require the config file
require_once($_SERVER['DOCUMENT_ROOT'] . '/../config.php');

class dealerDataLayer
{
    // Add a field for the database object
    /**
     * @var PDO The database connection object
     */
    private $_dbh;

    /**
     * DataLayer constructor.
     */
    function __construct()
    {
        //Connect to the database
        try {
            //Instantiate a PDO database object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo "Connected to database!";
        } catch (PDOException $e) {
            //echo $e->getMessage();  //for debugging only
            die ("We are having Technical difficulties.");
        }
    }

    /**
     * saveInvoice accepts an Order object and inserts it into the database
     * @param $client
     * @return string
     */
    function saveInvoice($client)
    {
        //1. Define the query
        $sql = "INSERT INTO dealerInvoice (fName, lName, pNum, email,
                    Make, Model, Category, Years, Miles) 
                VALUES (:fName, :lName, :pNum, :email,
                        :Make, :Model, :Category, :Years, :Miles)";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters

        $statement->bindParam(':fName', $client->getFName(), PDO::PARAM_STR);
        $statement->bindParam(':lName', $client->getLName(), PDO::PARAM_STR);
        $statement->bindParam(':pNum', $client->getPNum(), PDO::PARAM_STR);
        $statement->bindParam(':email', $client->getEmail(), PDO::PARAM_STR);
        $statement->bindParam(':Make', $client->getMake(), PDO::PARAM_STR);
        $statement->bindParam(':Model', $client->getModel(), PDO::PARAM_STR);
        $statement->bindParam(':Category', $client->getCategory(), PDO::PARAM_STR);
        $statement->bindParam(':Years', $client->getYear(), PDO::PARAM_STR);
        $statement->bindParam(':Miles', $client->getMiles(), PDO::PARAM_STR);

        //4. Execute the query
        $statement->execute();

    }

    /**
     * getOrders returns all orders from the database
     * @return array An array of data rows
     */
    function getInvoice()
    {
        //1. Define the query
        $sql = "SELECT 	invoice_id, fName, lName, pNum, email,
                Make, Model, Category, Years, Miles
                FROM dealerInvoice";

        //2. Prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3. Bind the parameters

        //4. Execute the query
        $statement->execute();

        //5. Process the results
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    static function getMake()
    {
        return array("Acura", "Alfa Romeo", "Aston Martin", "Audi", "BMW", "Bentley", "Buick", "Cadilac", "Chevrolet", "Chrysler",
            "Daewoo", "Daihatsu", "Dodge", "Eagle", "Ferrari", "Fiat", "Fisker", "Ford", "Freighliner", "GMC", "Genesis",
            "Geo", "Honda", "Hummer", "Hyundai", "Infinity", "Isuzu", "Jaguar", "Jeep", "Kla", "Lamborghini",
            "Land Rover", "Lexus", "Lincoln", "Lotus", "Mazda", "Maserati", "Maybach", "McLaren", "Mercedes Benz", "Mercury", "Mini",
            "Mitsubishi", "Nissan", "Oldsmobile", "Panoz", "Plymouth", "Polestar", "Pontiac", "Porsche",
            "Ram", "Rivian", "Rolls Royce", "Saab", "Saturn", "Smart", "Subaru", "Susuki", "Tesla",
            "Toyota", "Volkswagen", "Volvo");
    }

    static function getCategory()
    {
        return array("SUV", "Sedan", "Coupe", "Convertible", "Hatchback", "Pickup", "Van", "Minivan", "Wagon");
    }

    static function getYear()
    {
        return array("1969", "1970", "1971", "1972", "1973", "1974", "1975", "1976", "1977", "1978", "1979",
            "1980", "1981", "1982", "1983", "1984", "1985", "1986", "1987", "1988", "1989",
            "1990", "1991", "1992", "1993", "1994", "1995", "1996", "1997", "1998", "1999",
            "2000", "2001", "20002", "2003", "2004", "2005", "2006", "2007", "2008", "2009", "2010",
            "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018", "2019", "2020",
            "2021", "2022", "2023");
    }

    static function getInterior()
    {
        return array("Vacuum", "Air Freshener", "Seat Restoration", "Cabin Filter Change");
    }

    static function getExterior()
    {
        return array("Buff", "Wash", "Tire Shine", "Convertible", "Under Carriage Clean",
            "Engine Bay Clean", "Clay Bar");
    }

}
