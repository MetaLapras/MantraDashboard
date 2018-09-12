<?php
/**
 * Created by PhpStorm.
 * User: Pasistence
 * Date: 17-08-2018
 * Time: 07:45 PM
 */

class WorkerDetails
{
        public $id,$name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,
            $permanentAddressId,$currentAddressId,$salary,
            $createdAt,$updatedAt,$bankId,$projectId,$activation,$imageUrl;
        public $permanent_address,$current_address,$bank_account;

    /**
     * WorkerDetails constructor.
     * @param $id
     * @param $name
     * @param $adharcard_id
     * @param $gender
     * @param $dob
     * @param $fingerprint1
     * @param $fingerprint2
     * @param $email
     * @param $permanentAddressId
     * @param $currentAddressId
     * @param $salary
     * @param $createdAt
     * @param $updatedAt
     * @param $bankId
     * @param $projectId
     * @param $activation
     * @param $imageUrl
     */
    public function __construct($id, $name, $adharcard_id, $gender, $dob, $fingerprint1, $fingerprint2, $email, $permanentAddressId, $currentAddressId, $salary, $createdAt, $updatedAt, $bankId, $projectId, $activation, $imageUrl)
    {
        $this->id = $id;
        $this->name = $name;
        $this->adharcard_id = $adharcard_id;
        $this->gender = $gender;
        $this->dob = $dob;
        $this->fingerprint1 = $fingerprint1;
        $this->fingerprint2 = $fingerprint2;
        $this->email = $email;
        $this->permanentAddressId = $permanentAddressId;
        $this->currentAddressId = $currentAddressId;
        $this->salary = $salary;
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->bankId = $bankId;
        $this->projectId = $projectId;
        $this->activation = $activation;
        $this->imageUrl = $imageUrl;
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
    public function getFingerprint1()
    {
        return $this->fingerprint1;
    }

    /**
     * @param mixed $fingerprint1
     */
    public function setFingerprint1($fingerprint1)
    {
        $this->fingerprint1 = $fingerprint1;
    }

    /**
     * @return mixed
     */
    public function getFingerprint2()
    {
        return $this->fingerprint2;
    }

    /**
     * @param mixed $fingerprint2
     */
    public function setFingerprint2($fingerprint2)
    {
        $this->fingerprint2 = $fingerprint2;
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
    public function getPermanentAddressId()
    {
        return $this->permanentAddressId;
    }

    /**
     * @param mixed $permanentAddressId
     */
    public function setPermanentAddressId($permanentAddressId)
    {
        $this->permanentAddressId = $permanentAddressId;
    }

    /**
     * @return mixed
     */
    public function getCurrentAddressId()
    {
        return $this->currentAddressId;
    }

    /**
     * @param mixed $currentAddressId
     */
    public function setCurrentAddressId($currentAddressId)
    {
        $this->currentAddressId = $currentAddressId;
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
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getBankId()
    {
        return $this->bankId;
    }

    /**
     * @param mixed $bankId
     */
    public function setBankId($bankId)
    {
        $this->bankId = $bankId;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param mixed $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return mixed
     */
    public function getActivation()
    {
        return $this->activation;
    }

    /**
     * @param mixed $activation
     */
    public function setActivation($activation)
    {
        $this->activation = $activation;
    }

    /**
     * @return mixed
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getPermanentAddress()
    {
        return $this->permanent_address;
    }

    /**
     * @param mixed $permanent_address
     */
    public function setPermanentAddress($permanent_address)
    {
        $this->permanent_address = $permanent_address;
    }

    /**
     * @return mixed
     */
    public function getCurrentAddress()
    {
        return $this->current_address;
    }

    /**
     * @param mixed $current_address
     */
    public function setCurrentAddress($current_address)
    {
        $this->current_address = $current_address;
    }

    /**
     * @return mixed
     */
    public function getBankAccount()
    {
        return $this->bank_account;
    }

    /**
     * @param mixed $bank_account
     */
    public function setBankAccount($bank_account)
    {
        $this->bank_account = $bank_account;
    }





}
?>