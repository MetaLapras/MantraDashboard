<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 28-08-2018
 * Time: 02:13 PM
 */

require_once 'db_function.php';
//include_once("models/ProjectDetails.php");
include_once("models/WorkerDetails.php");
//include_once("models/WorkerDetails.php");
header("Content-type: application/json; charset=utf-8");


$db=new DB_Functions();
$response= array();

if(isset($_POST['uploadfile']) && isset($_POST['worker_id'])&& isset($_POST['employee_id']) )
 {
     //if you want to see file's value which is stored in array format use: print_r e.g> print_r($_FILES["uploadfile"]);
     //and then you can use the name and temporary name values of file
     //print_r($_FILES["uploadfile"]);


     $filename = $_POST['uploadfile'];
     $wId = $_POST['worker_id'];
     $empId = $_POST['employee_id'];


     $db->UpdateImageinWorker($filename,$wId);



     $workerDetails = $db->getWorkerDetailByWid($wId);
     if($workerDetails){

         $response["error"]=FALSE;
         $response["success"]=1;

         $response["WorkerModel"] = $workerDetails;

         echo json_encode($response);
     }else{
         $response["error"]=TRUE;
         $response["success"]=0;
         $response["error_msg"]="Something went wrong.Please Try Again";
         echo json_encode($response);
     }



     //for displaying image into php file
     //echo "<img src='$folder' height='100' width='100'/>";
 }else {

     $response["error"]=TRUE;
     $response["success"]=0;
     $response["error_msg"]="Required parameters Null are comming ";
     echo json_encode($response);
 }
