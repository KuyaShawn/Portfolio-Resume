<?php

/**
 * Class dealerValidation
 */
class dealerValidation
{
    // login validation - start
    /**
     * @param $userName
     * @return bool
     */
    static function loginUser($userName): bool
    {
        if ($userName == "dealerAdmin") {
            return true;
        }
        return false;
    }

    /**
     * @param $userPass
     * @return bool
     */
    static function loginPass($userPass): bool
    {
        if ($userPass == "dealer@dmin") {
            return true;
        }
        return false;
    }

    // login validation - End

    /**
     * @param $phone
     * @return bool
     */
    static function validPhone($phone): bool
    {
        $pattern = '/^\s*(?:\+?(\d{1,3}))?([-. (]*(\d{3})[-. )]*)?((\d{3})[-. ]*(\d{2,4})(?:[-.x ]*(\d+))?)\s*$/';
        return preg_match($pattern, $phone) == 1;
    }

    /**
     * @param $email
     * @return bool
     */
    static function validEmail($email): bool
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
            return true;
        }
        return false;
    }

    /**
     * @param $name
     * @return bool
     */
    static function validName($name): bool
    {
        if(!empty($name) && (preg_match('/^[A-Za-z]+$/' ,$name) == 1 )){
            return true;
        }
        return false;
    }

    /**
     * @param $make
     * @return bool
     */
    static function validMake($make): bool
    {
        $makeCheck = dealerDataLayer::getMake();

        if (!empty($make) && !in_array($make, $makeCheck)) {
            return false;
        }

        return true;
    }

    /**
     * @param $model
     * @return bool
     */
    static function validModel($model): bool
    {
        if (!empty($model)){
            return true;
        }
        return false;
    }

    /**
     * @param $cat
     * @return bool
     */
    static function validCategory($cat): bool
    {
        $catCheck = dealerDatalayer::getCategory();

        if (!empty($cat) && !in_array($cat, $catCheck)) {
            return false;
        }

        return true;
    }

    /**
     * @param $year
     * @return bool
     */
    static function validYear($year): bool
    {
        $yearCheck = dealerDatalayer::getYear();
        if (!empty($year) && !in_array($year, $yearCheck)) {
            return false;
        }

        return true;
    }

    /**
     * @param $miles
     * @return bool
     */
    static function validMiles($miles): bool
    {
        if (!empty($miles) && ($miles > 0)){
            return true;
        }
        return false;

    }

    /**
     * @param $interior
     * @return bool
     */
    static function validInterior($interior): bool
    {
        $interiorCheck = dealerDataLayer::getInterior();

        if (!empty($interior)){
            foreach ($interior as $choice) {
                if (!in_array($choice, $interiorCheck)) {
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * @param $exterior
     * @return bool
     */
    static function validExterior($exterior): bool
    {
        $exteriorCheck = dealerDataLayer::getExterior();

        if (!empty($exterior)){
            foreach ($exterior as $choice) {
                if (!in_array($choice, $exteriorCheck)) {
                    return false;
                }
            }
        }
        return true;
    }

    /**
     * @param $miles
     * @return bool
     */
    static function validWarranty($miles): bool
    {
        if (!empty((int)$miles) && ((int)$miles <= 50000) && ((int)$miles > 0)){
            return true;
        }
        return false;
    }
}

