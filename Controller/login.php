<?php

require_once 'db_function.php';
$db=new DB_Functions();
//json response
$response= array("error"=>FALSE);

if(isset($_POST['name'])  && isset($_POST['adharcard_id']))
{
    //recieving the post
    $email=$_post['email'];
    $password=$_post['password'];

    $user=$db->getUserByEmailAndPassword($email,$password);

    if($user != false)
    {
      $response["error"]=FALSE;
          $response["uid"]=$user["unique_id"];
		  $response["user"]["name"]=$user["name"];
		  $response["user"]["email"]=$user["email"];
		  $response["user"]["created_at"]=$user["created_at"];
		  $response["user"]["updated_at"]=$user["updated_at"];


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
