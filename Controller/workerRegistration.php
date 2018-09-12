<?php
require_once 'db_function.php';
include 'models/WorkerDetails.php';
header("Content-type: application/json; charset=utf-8");

$db=new DB_Functions();
$response = array("error"=>FALSE);

if(isset($_POST['name']) && isset($_POST['adharcard_id']) && isset($_POST['fingerprint1']) && isset( $_POST['fingerprint2']))
{
    $name           = $_POST['name'];
    $adharcard_id   = $_POST['adharcard_id'];
    $gender         = $_POST['gender'];
    $dob            = $_POST['dob'];
    $fingerprint1   = $_POST['fingerprint1'];
    $fingerprint2   = $_POST['fingerprint2'];
    $email          = $_POST['email'];
    $project_id     = $_POST['project_id'];
    $salary         = $_POST['salary'];
    $employee_id    = $_POST['employee_id'];
   // $image_url = $_POST['image_url'];

    $details = $db->insertWDetails($name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$salary,$project_id,$employee_id);
    //print_r($details) ;

    if($details)
    {
        //echo("hello12345");
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
            $details["created_at"],
            $details["updated_at"],
            $details["bank_id"],
            $details["project_id"],
            $details["activation"],
            $details["image_url"]);



        $workerID = $worker_details->getId();//getting worker id


        $response["error"]=FALSE;
        $response["success"]=1;
        $response["WorkerModel"] = $worker_details;
        //array_push($response["WorkerModel"],$worker_details);
        echo json_encode($response);


    }
    else
    {

        $response["error"]=TRUE;
        $response["success"]=0;
        $response["error_msg"]="Something went Worng! Please Try Again";
        echo json_encode($response);
    }
}
else
{
    $response["error"]=TRUE;
    $response["success"]=0;
    $response["error_msg"]="Required parameters null are coming";
    echo json_encode($response);
}
