<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 30-08-2018
 * Time: 01:31 PM
 */

class Attendance
{
public $id,$workerId,$workerAssignmentId,$projectId,$checkInDate,$checkInTime,$overTime,
$fullTime,$halfday,$checkOutTime,$wages,$created_at,$updated_at;

    /**
     * Attendance constructor.
     * @param $id
     * @param $workerId
     * @param $workerAssignmentId
     * @param $projectId
     * @param $checkInDate
     * @param $checkInTime
     * @param $overTime
     * @param $fullTime
     * @param $halfday
     * @param $checkOutTime
     * @param $wages
     * @param $created_at
     * @param $updated_at
     */
    public function __construct($id, $workerId, $workerAssignmentId, $projectId, $checkInDate, $checkInTime, $overTime, $fullTime, $halfday, $checkOutTime, $wages, $created_at, $updated_at)
    {
        $this->id = $id;
        $this->workerId = $workerId;
        $this->workerAssignmentId = $workerAssignmentId;
        $this->projectId = $projectId;
        $this->checkInDate = $checkInDate;
        $this->checkInTime = $checkInTime;
        $this->overTime = $overTime;
        $this->fullTime = $fullTime;
        $this->halfday = $halfday;
        $this->checkOutTime = $checkOutTime;
        $this->wages = $wages;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
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
    public function getWorkerId()
    {
        return $this->workerId;
    }

    /**
     * @param mixed $workerId
     */
    public function setWorkerId($workerId)
    {
        $this->workerId = $workerId;
    }

    /**
     * @return mixed
     */
    public function getWorkerAssignmentId()
    {
        return $this->workerAssignmentId;
    }

    /**
     * @param mixed $workerAssignmentId
     */
    public function setWorkerAssignmentId($workerAssignmentId)
    {
        $this->workerAssignmentId = $workerAssignmentId;
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
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }

    /**
     * @param mixed $checkInDate
     */
    public function setCheckInDate($checkInDate)
    {
        $this->checkInDate = $checkInDate;
    }

    /**
     * @return mixed
     */
    public function getCheckInTime()
    {
        return $this->checkInTime;
    }

    /**
     * @param mixed $checkInTime
     */
    public function setCheckInTime($checkInTime)
    {
        $this->checkInTime = $checkInTime;
    }

    /**
     * @return mixed
     */
    public function getOverTime()
    {
        return $this->overTime;
    }

    /**
     * @param mixed $overTime
     */
    public function setOverTime($overTime)
    {
        $this->overTime = $overTime;
    }

    /**
     * @return mixed
     */
    public function getFullTime()
    {
        return $this->fullTime;
    }

    /**
     * @param mixed $fullTime
     */
    public function setFullTime($fullTime)
    {
        $this->fullTime = $fullTime;
    }

    /**
     * @return mixed
     */
    public function getHalfday()
    {
        return $this->halfday;
    }

    /**
     * @param mixed $halfday
     */
    public function setHalfday($halfday)
    {
        $this->halfday = $halfday;
    }

    /**
     * @return mixed
     */
    public function getCheckOutTime()
    {
        return $this->checkOutTime;
    }

    /**
     * @param mixed $checkOutTime
     */
    public function setCheckOutTime($checkOutTime)
    {
        $this->checkOutTime = $checkOutTime;
    }

    /**
     * @return mixed
     */
    public function getWages()
    {
        return $this->wages;
    }

    /**
     * @param mixed $wages
     */
    public function setWages($wages)
    {
        $this->wages = $wages;
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






}