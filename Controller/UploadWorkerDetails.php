<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 30-08-2018
 * Time: 07:30 PM
 */
require_once 'db_function.php';
include 'models/WorkerDetails.php';
header("Content-type: application/json; charset=utf-8");

$db=new DB_Functions();
$response = array("error"=>FALSE);
$str = file_get_contents('php://input');
$item_array = json_decode($str , true);
//print_r($item_array);
//if(isset($item_array['json'])){

//die();
    $employee_id = "1";

    foreach($item_array as $item) {
   /* echo $item["email"].'<br>';
    }*/


        $adharcard_id= $item["adharcard_id"];
        $dob= $item["dob"];
        $email= $item["email"];
        $fingerprint1= $item["fingerprint1"];
        $fingerprint2= $item["fingerprint2"];
        $gender= $item["gender"];
        $name= $item["name"];
        $project_id= $item["projectId"];
        $salary= $item["salary"];

//        echo $adharcard_id;
//        echo "<br>";
//        echo $dob;
//        echo "<br>";
//        echo $email;
//        echo "<br>";
//        echo $fingerprint1;
//        echo "<br>";
//        echo $fingerprint2;
//        echo "<br>";
//        echo $gender;
//        echo "<br>";
//        echo $name;
//        echo "<br>";
//        echo $project_id;
//        echo "<br>";
//        echo $salary;
//        echo "<br>";
//        echo $employee_id;
//        echo "<br>";

        $details = $db->insertWDetails($name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$salary,$project_id,$employee_id);
       // print_r($details) ;

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

            $response["error"]=FALSE;
            $response["success"]=1;
            $response["WorkerModel"] = array();
            array_push($response["WorkerModel"],$worker_details);
        }
        else
        {
            $response["error"]=TRUE;
            $response["success"]=0;
            $response["error_msg"]="Something went Worng! Please Try Again";
            echo json_encode($response);
            die();
        }
    }
    echo json_encode($response);

     //   echo json_encode($item_array);

/*}else
{
    $response["error"]=TRUE;
    $response["success"]=0;
    $response["error_msg"]="Required parameters null are coming";
    echo json_encode($response);
}*/