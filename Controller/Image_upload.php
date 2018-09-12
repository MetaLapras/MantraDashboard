<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 24-08-2018
 * Time: 02:14 PM
 */

require_once 'db_function.php';
//include_once("models/ProjectDetails.php");
include_once("models/WorkerDetails.php");
//include_once("models/WorkerDetails.php");
header("Content-type: application/json; charset=utf-8");


$db=new DB_Functions();
$response= array();

if(isset($_FILES['uploadfile']))
{
    $filenm = $_FILES["uploadfile"]["name"]; //name of file
    $tempnm = $_FILES["uploadfile"]["tmp_name"]; // temp name of file

    $folder="images/workers/".$filenm;

    move_uploaded_file($tempnm,$folder);

    $response["error"]=FAlSE;
    $response["success"]=1;
    $response["ImageURL"]=$folder;
    $response["ImageName"]=$filenm;


   // $db->UpdateImageinWorker($folder,$wId);

    echo json_encode($response);
}

?>