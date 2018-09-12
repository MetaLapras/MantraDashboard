<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 30-08-2018
 * Time: 02:11 PM
 */
require_once 'db_function.php';
include 'models/Attendance.php';
header("Content-type: application/json; charset=utf-8");


$db=new DB_Functions();
$response= array();
//error_reporting(0);

//public $id,$account_holder_name,$ifsc_code,$account_no,$bank_name,$worker_id,$activation;
//$worker_details=new WorkerDetails();
//$wID = $worker_details->getId();
if(isset($_POST['project_id']) && isset($_POST['worker_id']))
{

    $worker_id              = $_POST['worker_id'];
    $workerAssignmentId     = $_POST['workerAssignmentId'];
    $project_id             = $_POST['project_id'];
    $CheckInDate            = $_POST['CheckInDate'];
    $CheckInTime            = $_POST['CheckInTime'];
    $CheckOutTime           = $_POST['CheckOutTime'];
    $OverTime               = $_POST['OverTime'];
    $FullTime               = $_POST['FullTime'];
    $halfDay                = $_POST['halfDay'];
    $wages                  = $_POST['wages'];



    $details =$db->InsertAttendanceDetails(
        $worker_id,
        $workerAssignmentId,
        $project_id,
        $CheckInDate,
        $CheckInTime,
        $CheckOutTime,
        $OverTime,
        $FullTime,
        $halfDay,
        $wages);

    if($details)//!= false)
    {
        // $response["emp_login"]=FALSE;

        $attendace_details=new Attendance(
            $details["id"],
            $details["worker_id"],
            $details["worker_assignment_id"],
            $details["project_id"],
            $details["check_in_date"],
            $details["check_in_time"],
            $details["overtime"],
            $details["fulltime"],
            $details["halfday"],
            $details["check_out_time"],
            $details["wages"],
            $details["created_at"],
            $details["updated_at"]
        );

        $response["error"]=FALSE;
        $response["success"]=1;
        $response["Attendace"] = $attendace_details;

        echo json_encode($response);
    }
    else
    {
        $response["error"]=TRUE;
        $response["success"]=0;
        $response["error_msg"]="Something went wrong.Please Try Again";
        echo json_encode($response);
    }
}
else
{

    $response["error"]=TRUE;
    $response["success"]=0;
    $response["error_msg"]="Required parameters Bank details  is missing ";
    echo json_encode($response);
}
