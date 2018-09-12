<?php
/**
 * Created by PhpStorm.
 * User: Pasistence
 * Date: 17-08-2018
 * Time: 04:13 PM
 */

require_once 'db_function.php';
//include_once("models/ProjectDetails.php");
//include_once("models/EmployeeDetails.php");
include_once("models/WorkerDetails.php");
$db=new DB_Functions();
$response= array();
//error_reporting(0);


if(isset($_POST['name']) && isset($_POST['adharcard_id'])) {
    $name           = $_POST['name'];
    $adharcard_id   = $_POST['adharcard_id'];
    $gender         = $_POST['gender'];
    $dob            = $_POST['dob'];
    $fingerprint1   = $_POST['fingerprint1'];
    $fingerprint2   = $_POST['fingerprint2'];
    $email          = $_POST['email'];
    $project_id     = $_POST['project_id'];

    if($db->isWorkerExisted($adharcard_id,$name))
    {
        $response["WorkerExist"] =TRUE;
        $response["error_msg"]="Worker already exist named ".$name;
        echo json_encode($response);
    }else {



        // $details        = $db->showProjectLoginDetails($employeeId,$projectName,$Password);
        $details      = $db-> insertWorker($name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$permanent_address_id,$current_address_id,$salary,$bank_id,$project_id,$activation,$image_url);

        if($details){
            // $response["emp_login"]=FALSE;

            $worker_details=new WorkerDetails(
                $details["id"],
                $details["name"],
                $details["adharcard_id"],
                $details["gender"],
                $details["dob"],
                $details["fingerprint1"],
                $details["fingerprint2"],
                $details["email"],
                $details["permanent_address_id"],
                $details["current_address_id"],
                $details["salary"],
                $details["project_id"],
                $details["created_at"],
                $details["updated_at"],
                $details["bank_id"],
                $details["activation"],
                $details["image_url"]
        );

            $workerID = $worker_details->getId();//getting worker id


            $response["error"]=FALSE;
            $response["success"]=1;
            $response["worker_details"] = $worker_details;


            echo json_encode($response);
        }else {
            $response["error"]=TRUE;
            $response["success"]=0;
            $response["error_msg"]="Login informations are wrong.Please Try Again";
            echo json_encode($response);
        }
    }
}else {
    $response["error"]=TRUE;
    $response["success"]=0;
    $response["error_msg"]="Required parameters adharcard and name is missing ";
    echo json_encode($response);
}