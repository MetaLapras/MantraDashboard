<?php
/**
 * Created by PhpStorm.
 * User: Pasistence
 * Date: 17-08-2018
 * Time: 07:57 PM
 */

class EmployeeDetails
{
    /**
     * EmployeeDetails constructor.
     * @param $id
     * @param $name
     * @param $email
     * @param $adharcard_id
     * @param $gender
     * @param $dob
     * @param $permanent_address_id
     * @param $current_address_id
     * @param $contact1
     * @param $contact2
     * @param $salary
     * @param $password
     * @param $created_at
     * @param $updated_at
     */
    public function __construct($id, $name, $email, $adharcard_id, $gender, $dob, $permanent_address_id, $current_address_id, $contact1, $contact2, $salary, $password, $created_at, $updated_at)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->adharcard_id = $adharcard_id;
        $this->gender = $gender;
        $this->dob = $dob;
        $this->permanent_address_id = $permanent_address_id;
        $this->current_address_id = $current_address_id;
        $this->contact1 = $contact1;
        $this->contact2 = $contact2;
        $this->salary = $salary;
        $this->password = $password;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAdharcardId()
    {
        return $this->adharcard_id;
    }

    /**
     * @param mixed $adharcard_id
     */
    public function setAdharcardId($adharcard_id)
    {
        $this->adharcard_id = $adharcard_id;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getPermanentAddressId()
    {
        return $this->permanent_address_id;
    }

    /**
     * @param mixed $permanent_address_id
     */
    public function setPermanentAddressId($permanent_address_id)
    {
        $this->permanent_address_id = $permanent_address_id;
    }

    /**
     * @return mixed
     */
    public function getCurrentAddressId()
    {
        return $this->current_address_id;
    }

    /**
     * @param mixed $current_address_id
     */
    public function setCurrentAddressId($current_address_id)
    {
        $this->current_address_id = $current_address_id;
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
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
    public $id,$name,$email,$adharcard_id,$gender,$dob,$permanent_address_id,$current_address_id,$contact1,$contact2,$salary,$password,$created_at,$updated_at;
}