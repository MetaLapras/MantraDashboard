<?php

require_once 'db_function.php';
$db=new DB_Functions();
//json response
$response= array("error"=>FALSE);


if(isset($_POST['email'])  && isset($_POST['password']))
{
    //recieving the post
    $email=$_POST['email'];
    $password=$_POST['password'];

    $details=$db->showDetailsToEmployee($email,$password);

    if($details != false)
    {
        $response["emp_login"]=FALSE;
        $response["employee_master"]["name"]=$details["name"];
        $response["employee_master"]["email"]=$details["email"];
        $response["employee_master"]["created_at"]=$details["created_at"];
        $response["employee_master"]["updated_at"]=$details["updated_at"];


        echo json_encode($response);
    }
    else
    {

        $response["error"]=TRUE;
        $response["error_msg"]="Login informations are wrong.Please Try Again";
        echo json_encode($response);
    }
}
else {

    $response["error"]=TRUE;
    $response["error_msg"]="Required parameters passowrd is missing ";
    echo json_encode($response);
}

?>
