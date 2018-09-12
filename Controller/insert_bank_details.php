<?php
/**
 * Created by PhpStorm.
 * User: Pasistence
 * Date: 17-08-2018
 * Time: 04:13 PM
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
if(isset($_POST['worker_id']) && isset($_POST['employee_id']))
{

    $account_holder_name        = $_POST['account_holder_name'];
    $ifsc_code                  = $_POST['ifsc_code'];
    $account_no                 = $_POST['account_no'];
    $bank_name                  = $_POST['bank_name'];
    $worker_id                  = $_POST['worker_id'];
    $activation                 = $_POST['activation'];
    $employee_id                = $_POST['employee_id'];



    $details =$db->insertBankDetails($account_holder_name,
        $ifsc_code,
        $account_no,
        $bank_name,
        $worker_id,
        $activation,
        $employee_id);

    if($details)//!= false)
    {
        // $response["emp_login"]=FALSE;

        $bank_details=new BankDetails(
            $details["id"],
            $details["account_holder_name"],
            $details["ifsc_code"],
            $details["account_no"],
            $details["bank_name"],
            $details["worker_id"],
            $details["activation"],
            $details["employee_id"]);



        $bid= $bank_details->getId();//getting bank id
        $wid=$bank_details->getWorkerId();

        $db->setBankIdByWorkersId($bid,$wid);

        $response["error"]=FALSE;
        $response["success"]=1;
        $response["bankdetails"] = $bank_details;

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