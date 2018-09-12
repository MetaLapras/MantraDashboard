<?php
/**
 * Created by PhpStorm.
 * User: Pasistence
 * Date: 17-08-2018
 * Time: 04:13 PM
 */

require_once 'db_function.php';
require_once("models/ProjectDetails.php");
require_once("models/EmployeeDetails.php");
require_once("models/WorkerDetails.php");
include 'models/Attendance.php';
header("Content-type: application/json; charset=utf-8");


$db=new DB_Functions();
//json response
$response= array();


if(isset($_POST['employee_id'])  && isset($_POST['project_name']) && isset($_POST['password']))
{
    //recieving the post
    $employeeId     = $_POST['employee_id'];
    $projectName    = $_POST['project_name'];
    $Password       = $_POST['password'];

    $details = $db->showProjectLoginDetails($employeeId,$projectName,$Password);

    if($details)//!= false)
    {
       // $response["emp_login"]=FALSE;
       // public function __construct($id, $project_name, $location, $password, $created_at, $updated_at, $activation, $admin_id, $employee_id)
        $project_details=new ProjectDetails(
            $details["id"],
            $details["project_id"],
            $details["project_name"],
            "123",
            $details["password"],
            $details["created_at"],
            $details["updated_at"],
            $details["activation"],
            $details["admin_id"],
            $details["employee_id"]
        );

        $projectId = $project_details->getProjectId();//getting project id

        $empDetails = $db->showEmployeeDetails($employeeId);

        if($empDetails)//!=false)
        {

            //public function __construct($id, $name, $email, $adharcard_id, $gender, $dob, $permanent_address_id, $current_address_id,
            // $contact1, $contact2, $salary, $password, $created_at, $updated_at)

            $employee_details=new EmployeeDetails($empDetails["id"],
                $empDetails["name"],
                $empDetails["email"],
                $empDetails["adharcard_id"],
                $empDetails["gender"],
                $empDetails["dob"],
                $empDetails["permanent_address_id"],
                $empDetails["current_address_id"],
                $empDetails["contact1"],
                $empDetails["contact2"],
                $empDetails["salary"],
                $empDetails["password"],
                $empDetails["created_at"],
                $empDetails["updated_at"]);

            $project_details->setEmployeeDetails($employee_details);
        }

        $wokDetails = $db->showWorkerDetailsAsProject($projectId);

        if($wokDetails !=false)
        {
            $workerDetails = array();
            foreach ($wokDetails as $value) {

                //  public function __construct($id, $name, $adharcard_id, $gender, $dob, $fingerprint1, $fingerprint2,
                // $email,
                // $permanent_address_id, $current_address_id, $contact1, $contact2, $salary, $created_at, $updated_at,
                // $bank_id, $project_id, $activation, $image_url)
                //

                $wDetails=new WorkerDetails(
                    $value["id"],
                    $value["name"],
                    $value["adharcard_id"],
                    $value["gender"],
                    $value["dob"],
                    $value["fingerprint1"],
                    $value["fingerprint2"],
                    $value["email"],
                    $value["permanent_address_id"],
                    $value["current_address_id"],
                    $value["salary"],
                    $value["created_at"],
                    $value["updated_at"],
                    $value["bank_id"],
                    $value["project_id"],
                    $value["activation"],
                    $value["image_url"]
                    );


                $wDetails->setBankAccount($db->getBankById($value["bank_id"]));
                $wDetails->setPermanentAddress($db->getAddressById($value["permanent_address_id"]));
                $wDetails->setCurrentAddress($db->getAddressById($value["current_address_id"]));


                array_push($workerDetails,$wDetails);
               // echo "$value <br>";
            }

            $project_details->setWorkerList($workerDetails);

            $projectdetails["workerDetails"] = array();
            array_push($projectdetails["workerDetails"],$workerDetails);

        }
       

        $response["error"]=FALSE;
        $response["success"]=1;
        $response["projectdetails"] = $project_details;
       // $projectdetails["employeedetails"]=array();

        //array_push($projectdetails["employeedetails"],$employeeDetails);

        //array_push($response["projectdetails"],$project_details);


        echo json_encode($response);
    }
    else
    {
        $response["error"]=TRUE;
        $response["success"]=0;
        $response["error_msg"]="Login informations are wrong.Please Try Again";
        echo json_encode($response);
    }
}
else {

    $response["error"]=TRUE;
    $response["success"]=0;
    $response["error_msg"]="Required parameters passowrd is missing ";
    echo json_encode($response);
}