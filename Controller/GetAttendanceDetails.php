<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 29-08-2018
 * Time: 07:07 PM
 */

require_once 'db_function.php';
include 'models/Attendance.php';
header("Content-type: application/json; charset=utf-8");

$db=new DB_Functions();
$response= array();

$attenDetails = $db->getAllattendance();

if($attenDetails) {

    $response["error"]=FALSE;
    $response["success"]=1;
    $response["Attendance"]=array();

    foreach ($attenDetails as $value) {

        $attendance=new Attendance(
            $value["id"],
            $value["worker_id"],
            $value["worker_assignment_id"],
            $value["project_id"],
            $value["check_in_date"],
            $value["check_in_time"],
            $value["overtime"],
            $value["fulltime"],
            $value["halfday"],
            $value["check_out_time"],
            $value["wages"],
            $value["created_at"],
            $value["updated_at"]
        );

       array_push($response["Attendance"], $attendance);
        // echo "$value <br>";
    }

    echo json_encode($response);
}