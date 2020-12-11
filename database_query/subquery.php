<?php
public function allByCustomer($customerId = NULL, $active = NULL){
        if(is_null($customerId)){
            Helper_Functions::abort('null customerId');
            return false;
        }
         $sql = 'SELECT address, zipcode, city, DATE_FORMAT(expires, "%Y-%m") AS expires21, (SELECT SUM(amount) FROM payments WHERE paymentMethodId = paymentMethods.paymentMethodId AND success = 1 GROUP BY paymentMethodId) AS total_charge21 FROM paymentMethods WHERE customerId =:customerId ';
        if(!is_null($active)){
            $sql .= 'AND active = :active ';
        }
        $sql .= ' ORDER BY primary_card DESC';
        $result = DB::query(Database::SELECT, $sql)->bind(':customerId', $customerId)->bind(':active', $active)->execute(Database::instance())->as_array();
        return $result;

    }
    // o/p
    // here result will return as array data
    Array
(
    [0] => Array
        (
            [address] => 13493 Lock Loop
            [zipcode] => 22192
            [city] => Woodbridge
            [expires21] => 2023-02
            [total_charge21] => 500.00
        )

    [1] => Array
        (
            [address] => 30  Magee st
            [zipcode] => 02136
            [city] => HYDE PARK
            [expires21] => 2022-10
            [total_charge21] => 35.00
        )

)