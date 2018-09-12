<?php

require_once 'db_function.php';
require_once 'models/WorkerDetails.php';
header("Content-type: application/json; charset=utf-8");

$db=new DB_Functions();
$response = array("error"=>FALSE);

if(isset($_POST['worker_id']) && isset($_POST['employee_id']) && isset($_POST['project_id']))
{

    $name           = $_POST['name'];
    $projectid      = $_POST['project_id'];
    $wid            = $_POST['worker_id'];
    $employee_id    = $_POST['employee_id'];

    // $image_url = $_POST['image_url'];

    $details = $db->updateWorkerDetails($wid,$employee_id,$name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$salary);


        //echo("hello12345");
        // $response["emp_login"]=FALSE;

    if($details)
    {
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
        $response["WorkerModel"] = $details;

        echo json_encode($response);

    }else
    {
        $response["error"]=TRUE;
        $response["success"]=0;
        $response["error_msg"]="Something went Wrong";
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
?>