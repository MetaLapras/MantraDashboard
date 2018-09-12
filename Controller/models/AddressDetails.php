<?php
/**
 * Created by PhpStorm.
 * User: Pasistence
 * Date: 20-08-2018
 * Time: 06:07 PM
 */

class AddressDetails
{
public $id,$contact1,$contact2,$address_line_1,$address_line_2,$city,$pincode,$state,$country,$created_at,$updated_at,$worker_id,$type,$employee_id;

    /**
     * @return mixed
     */
    public function getEmployeeId()
    {
        return $this->employee_id;
    }

    /**
     * @param mixed $employee_id
     */
    public function setEmployeeId($employee_id)
    {
        $this->employee_id = $employee_id;
    }

    /**
     * AddressDetails constructor.
     * @param $id
     * @param $contact1
     * @param $contact2
     * @param $address_line_1
     * @param $address_line_2
     * @param $city
     * @param $pincode
     * @param $state
     * @param $country
     * @param $created_at
     * @param $updated_at
     * @param $worker_id
     * @param $type
     * @param $employee_id
     */
    public function __construct($id, $contact1, $contact2, $address_line_1, $address_line_2, $city, $pincode, $state, $country, $created_at, $updated_at, $worker_id, $type, $employee_id)
    {
        $this->id = $id;
        $this->contact1 = $contact1;
        $this->contact2 = $contact2;
        $this->address_line_1 = $address_line_1;
        $this->address_line_2 = $address_line_2;
        $this->city = $city;
        $this->pincode = $pincode;
        $this->state = $state;
        $this->country = $country;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->worker_id = $worker_id;
        $this->type = $type;
        $this->employee_id = $employee_id;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getContact1()
    {
        return $this->contact1;
    }

    /**
     * @param mixed $contact1
     */
    public function setContact1($contact1)
    {
        $this->contact1 = $contact1;
    }

    /**
     * @return mixed
     */
    public function getContact2()
    {
        return $this->contact2;
    }

    /**
     * @param mixed $contact2
     */
    public function setContact2($contact2)
    {
        $this->contact2 = $contact2;
    }

    /**
     * @return mixed
     */
    public function getAddressLine1()
    {
        return $this->address_line_1;
    }

    /**
     * @param mixed $address_line_1
     */
    public function setAddressLine1($address_line_1)
    {
        $this->address_line_1 = $address_line_1;
    }

    /**
     * @return mixed
     */
    public function getAddressLine2()
    {
        return $this->address_line_2;
    }

    /**
     * @param mixed $address_line_2
     */
    public function setAddressLine2($address_line_2)
    {
        $this->address_line_2 = $address_line_2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getPincode()
    {
        return $this->pincode;
    }

    /**
     * @param mixed $pincode
     */
    public function setPincode($pincode)
    {
        $this->pincode = $pincode;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    /**
     * @return mixed
     */
    public function getWorkerId()
    {
        return $this->worker_id;
    }

    /**
     * @param mixed $worker_id
     */
    public function setWorkerId($worker_id)
    {
        $this->worker_id = $worker_id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The __toString method allows a class to decide how it will react when it is converted to a string.
     *
     * @return string
     * @link http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.tostring
     */
    public function __toString()
    {
        // TODO: Implement __toString() method.
    }


}