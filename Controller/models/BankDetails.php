<?php
/**
 * Created by PhpStorm.
 * User: Pasistence
 * Date: 20-08-2018
 * Time: 06:02 PM
 */

class BankDetails
{
public $id,$account_holder_name,$ifsc_code,$account_no,$bank_name,$worker_id,$activation,$employee_id;

    /**
     * BankDetails constructor.
     * @param $id
     * @param $account_holder_name
     * @param $ifsc_code
     * @param $account_no
     * @param $bank_name
     * @param $worker_id
     * @param $activation
     * @param $employee_id
     */
    public function __construct($id, $account_holder_name, $ifsc_code, $account_no, $bank_name, $worker_id, $activation, $employee_id)
    {
        $this->id = $id;
        $this->account_holder_name = $account_holder_name;
        $this->ifsc_code = $ifsc_code;
        $this->account_no = $account_no;
        $this->bank_name = $bank_name;
        $this->worker_id = $worker_id;
        $this->activation = $activation;
        $this->employee_id = $employee_id;
    }

    /**
     * BankDetails constructor.
     * @param $id
     * @param $account_holder_name
     * @param $ifsc_code
     * @param $account_no
     * @param $bank_name
     * @param $worker_id
     * @param $activation
     * @param $employee_id
     */

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
     * BankDetails constructor.
     * @param $id
     * @param $account_holder_name
     * @param $ifsc_code
     * @param $account_no
     * @param $bank_name
     * @param $worker_id
     * @param $activation
     */


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
    public function getAccountHolderName()
    {
        return $this->account_holder_name;
    }

    /**
     * @param mixed $account_holder_name
     */
    public function setAccountHolderName($account_holder_name)
    {
        $this->account_holder_name = $account_holder_name;
    }

    /**
     * @return mixed
     */
    public function getIfscCode()
    {
        return $this->ifsc_code;
    }

    /**
     * @param mixed $ifsc_code
     */
    public function setIfscCode($ifsc_code)
    {
        $this->ifsc_code = $ifsc_code;
    }

    /**
     * @return mixed
     */
    public function getAccountNo()
    {
        return $this->account_no;
    }

    /**
     * @param mixed $account_no
     */
    public function setAccountNo($account_no)
    {
        $this->account_no = $account_no;
    }

    /**
     * @return mixed
     */
    public function getBankName()
    {
        return $this->bank_name;
    }

    /**
     * @param mixed $bank_name
     */
    public function setBankName($bank_name)
    {
        $this->bank_name = $bank_name;
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
?>