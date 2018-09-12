<?php
/**
 * Created by PhpStorm.
 * User: Pasistence
 * Date: 17-08-2018
 * Time: 07:14 PM
 */

class ProjectDetails
{
    /**
     * ProjectDetails constructor.
     * @param $id
     * @param $project_name
     * @param $location
     * @param $password
     * @param $created_at
     * @param $updated_at
     * @param $activation
     * @param $admin_id
     * @param $employee_id
     */
    public $id,$project_id,$project_name,$location,$password,$created_at,$updated_at,$activation,$admin_id,$employee_id,$employee_details,$worker_list;

    /**
     * @return mixed
     */
    public function getEmployeeDetails()
    {
        return $this->employee_details;
    }

    /**
     * @param mixed $employee_details
     */
    public function setEmployeeDetails($employee_details)
    {
        $this->employee_details = $employee_details;
    }

    /**
     * @return mixed
     */
    public function getWorkerList()
    {
        return $this->worker_list;
    }

    /**
     * @param mixed $worker_list
     */
    public function setWorkerList($worker_list)
    {
        $this->worker_list = $worker_list;
    }


    public function __construct($id,$project_id, $project_name, $location, $password, $created_at, $updated_at, $activation, $admin_id, $employee_id)
    {
        $this->id = $id;
        $this->project_id = $project_id;
        $this->project_name = $project_name;
        $this->location = $location;
        $this->password = $password;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->activation = $activation;
        $this->admin_id = $admin_id;
        $this->employee_id = $employee_id;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * @param mixed $project_id
     */
    public function setProjectId($project_id)
    {
        $this->project_id = $project_id;
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
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * @param mixed $project_name
     */
    public function setProjectName($project_name)
    {
        $this->project_name = $project_name;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
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
    public function getAdminId()
    {
        return $this->admin_id;
    }

    /**
     * @param mixed $admin_id
     */
    public function setAdminId($admin_id)
    {
        $this->admin_id = $admin_id;
    }

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