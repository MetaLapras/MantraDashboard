<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 28-08-2018
 * Time: 03:34 PM
 */

require_once 'db_function.php';
//include_once("models/ProjectDetails.php");
include_once("models/ContactDetails.php");
include_once("models/WorkerDetails.php");
header("Content-type: application/json; charset=utf-8");


$db=new DB_Functions();
$response= array();
//error_reporting(0);

//$id, $contact1, $contact2, $address_line_1, $address_line_2, $city, $pincode, $state, $country, $worker_id, $type;
//$worker_details=new WorkerDetails();
//$wID = $worker_details->getId();
if( isset($_POST['worker_id'])
    && isset($_POST['employee_id'])
    && isset($_POST['type']))
{
    $contact1           = $_POST['contact1'];
    $contact2           = $_POST['contact2'];
    $address_line_1     = $_POST['address_line_1'];
    $address_line_2     = $_POST['address_line_2'];
    $city               = $_POST['city'];
    $pincode            = $_POST['pincode'];
    $state              = $_POST['state'];
    $country            = $_POST['country'];
    $worker_id          = $_POST['worker_id'];
    $type               = $_POST['type'];
    $employee_id        = $_POST['employee_id'];

    // $details        = $db->showProjectLoginDetails($employeeId,$projectName,$Password);
    $details =$db->updateAddressDetails($contact1, $contact2, $address_line_1, $address_line_2, $city, $pincode, $state, $country, $worker_id, $type,$employee_id);
    
    if($details)//!= false)
    {
        // $response["emp_login"]=FALSE;

        $contact_details=new ContactDetails(
            $details["id"],
            $details["contact1"],
            $details["contact2"],
            $details["address_line_1"],
            $details["address_line_2"],
            $details["city"],
            $details["pincode"],
            $details["state"],
            $details["country"],
            $details["worker_id"],//set worker_id
            $details["type"],
            $details["employee_id"]);

        $response["error"]=FALSE;
        $response["success"]=1;
        $response["contactdetails"] = $contact_details;


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
    $response["error_msg"]="Required parameters contact is missing ";
    echo json_encode($response);
}