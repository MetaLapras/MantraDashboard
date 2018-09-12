<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 28-08-2018
 * Time: 05:59 PM
 */


require_once 'db_function.php';
//include_once("models/ProjectDetails.php");
include_once("models/BankDetails.php");
//include_once("models/WorkerDetails.php");
header("Content-type: application/json; charset=utf-8");


$db=new DB_Functions();
$response= array();
//error_reporting(0);

//public $id,$account_holder_name,$ifsc_code,$account_no,$bank_name,$worker_id,$activation;
//$worker_details=new WorkerDetails();
//$wID = $worker_details->getId();
if(isset($_POST['worker_id']) && isset($_POST['employee_id']) && isset($_POST['project_id']))
{

    $worker_id                  = $_POST['worker_id'];
    $project_id                 = $_POST['project_id'];
    $employee_id                = $_POST['employee_id'];
    $bank_id                    = $_POST["bank_id"];
    $per_add_id                 = $_POST["permanent_address_id"];
    $cur_add_id                 = $_POST["current_address_id"];


      $worker = $db->DeleteWorkerDetails($worker_id);
      $address = $db->DeleteAddressDetails($per_add_id,$worker_id);
      $address1 = $db->DeleteAddressDetails($cur_add_id,$worker_id);
      $bank = $db->DeleteBankDetails($bank_id,$worker_id);

    if($worker && $address && $address1 && $bank)//!= false)
    {
        // $response["emp_login"]=FALSE;
        $response["error"]=FALSE;
        $response["success"]=1;
        $response["message"] = $worker.$address.$address1.$bank;

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
    $response["error_msg"]="Required parameters Delete details  is missing ";
    echo json_encode($response);
}