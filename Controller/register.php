<?php

require_once 'db_function.php';
$db=new DB_Functions();

//json response
$response= array("Registration"=>FALSE);

    if(isset($_POST['name'])  && isset($_POST['adharcard_id']) && isset($_POST['gender']) && isset($_POST['dob'])
        && isset($_POST['fingerprint1']) && isset($_POST['fingerprint2']) && isset($_POST['email'])
        && isset($_POST['permanent_address_id']) && isset($_POST['current_address_id']) && isset($_POST['contact1'])
        && isset($_POST['contact2']) && isset($_POST['salary'])  && isset($_POST['project_id']) && isset($_POST['activation'])
        && isset($_FILES['image_url']) && isset($_POST['account_holder_name']) && isset($_POST['ifsc_code']) && isset($_POST['account_no'])
        && isset($_POST['bank_name']))
    {
        //recieving the post
        $name=$_POST['name'];
        $adharcard_id=$_POST['adharcard_id'];
        $gender=$_POST['gender'];
        $dob=$_POST['dob'];
        $fingerprint1=$_POST['fingerprint1'];
        $fingerprint2=$_POST['fingerprint2'];
        $email=$_POST['email'];
        $permanent_address_id=$_POST['permanent_address_id'];
        $current_address_id=$_POST['current_address_id'];
        $contact1=$_POST['contact1'];
        $contact2=$_POST['contact2'];
        $salary=$_POST['salary'];

        $project_id=$_POST['project_id'];

        $activation=$_POST['activation'];




        //isset($_FILES['uploadfile'])
        $filenm = $_FILES["image_url"]["name"]; //name of file
        $tempnm = $_FILES["image_url"]["tmp_name"]; // temp name of file

        $image_url="images/workers/".$filenm;
        //echo $image_url;

        //for moving uploaded image from temporary location to targeted path(folder) location
        move_uploaded_file($tempnm,$image_url);



        $account_holder_name=$_POST['account_holder_name'];
        $ifsc_code=$_POST['ifsc_code'];
        $account_no=$_POST['account_no'];
        $bank_name=$_POST['bank_name'];

        static $bank_id;

        if($account_no>0)
        {

              if($db->isBankDetailsExisted($account_no))
              {

                      $response["error"] =TRUE;
                      $response["error_msg"]="Bank details already exist".$account_no;
                      echo json_encode($response);
              }
              else
              {
                        //craete new bank details
                        $bank_details=$db->storeBankDetails($account_holder_name,$ifsc_code,$account_no,$bank_name);

                          if($bank_details)
                          {
                            $response["error"]=FALSE;
                            //$response["uid"]=$worker["unique_id"];
                            $response["bank_master"]["account_holder_name"]=$bank_details["account_holder_name"];
                            $response["bank_master"]["ifsc_code"]=$bank_details["ifsc_code"];
                            $response["bank_master"]["account_no"]=$bank_details["account_no"];
                            $response["bank_master"]["bank_name"]=$bank_details["bank_name"];
                            echo json_encode($response);

                            $bank_id=$db->getBankId($account_no);

                          }
                          else
                          {

                            $response["error"]=TRUE;
                            $response["error_msg"]="Unknown error occured in bank details registration !!!";
                            echo json_encode($response);
                          }
              }

              if($db->isWorkerExisted($adharcard_id))
              {
                $response["WorkerExist"] =TRUE;
                $response["error_msg"]="Worker already exist".$adharcard_id;
                echo json_encode($response);
              }
              else
              {


                  //craete new user
                  $worker=$db->storeWorker($name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$permanent_address_id,$current_address_id,$contact1,$contact2,$salary,$bank_id,$project_id,$activation,$image_url);

                  if($worker)
                  {
                    $response["NewWorker"]=FALSE;
                    //$response["uid"]=$worker["unique_id"];
                    $response["worker_master"]["name"]=$worker["name"];
                    $response["worker_master"]["adharcard_id"]=$worker["adharcard_id"];
                    $response["worker_master"]["gender"]=$worker["gender"];
                    $response["worker_master"]["dob"]=$worker["dob"];
                    $response["worker_master"]["fingerprint1"]=$worker["fingerprint1"];
                    $response["worker_master"]["fingerprint2"]=$worker["fingerprint2"];
                    $response["worker_master"]["email"]=$worker["email"];
                    $response["worker_master"]["permanent_address_id"]=$worker["permanent_address_id"];
                    $response["worker_master"]["current_address_id"]=$worker["current_address_id"];
                    $response["worker_master"]["contact1"]=$worker["contact1"];
                    $response["worker_master"]["contact2"]=$worker["contact2"];
                    $response["worker_master"]["salary"]=$worker["salary"];
                    $response["worker_master"]["bank_id"]=$worker["bank_id"];
                    $response["worker_master"]["project_id"]=$worker["project_id"];
                    $response["worker_master"]["activation"]=$worker["activation"];
                    $response["worker_master"]["image_url"]=$worker["image_url"];

                    echo json_encode($response);
                  }
                  else
                  {

                    $response["error"]=TRUE;
                    $response["error_msg"]="Unknown error occured in registration !!!";
                    echo json_encode($response);
                  }
              }


       }
       elseif($db->isWorkerExisted($adharcard_id))
              {
                $response["WorkerExist"] =TRUE;
                $response["error_msg"]="Worker already exist   ".$adharcard_id;
                echo json_encode($response);
              }
              else
              {


                  //craete new user
                  $worker=$db->storeWorker($name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$permanent_address_id,$current_address_id,$contact1,$contact2,$salary,$bank_id,$project_id,$activation,$image_url);

                  if($worker)
                  {
                    $response["NewWorker"]=FALSE;
                    //$response["uid"]=$worker["unique_id"];
                    $response["worker_master"]["id"]=$worker["worker_id"];
          		      $response["worker_master"]["name"]=$worker["name"];
                    $response["worker_master"]["adharcard_id"]=$worker["adharcard_id"];
                    $response["worker_master"]["gender"]=$worker["gender"];
                    $response["worker_master"]["dob"]=$worker["dob"];
                    $response["worker_master"]["fingerprint1"]=$worker["fingerprint1"];
                    $response["worker_master"]["fingerprint2"]=$worker["fingerprint2"];
                    $response["worker_master"]["email"]=$worker["email"];
                    $response["worker_master"]["permanent_address_id"]=$worker["permanent_address_id"];
                    $response["worker_master"]["current_address_id"]=$worker["current_address_id"];
                    $response["worker_master"]["contact1"]=$worker["contact1"];
                    $response["worker_master"]["contact2"]=$worker["contact2"];
                    $response["worker_master"]["salary"]=$worker["salary"];
                    $response["worker_master"]["bank_id"]=$worker["bank_id"];
                    $response["worker_master"]["project_id"]=$worker["project_id"];
                    $response["worker_master"]["activation"]=$worker["activation"];
                    $response["worker_master"]["image_url"]=$worker["image_url"];

                    echo json_encode($response);
                  }
                  else
          		    {

                    $response["error"]=TRUE;
                    $response["error_msg"]="Unknown error occured in registration !!!";
                    echo json_encode($response);
                  }
              }


    }
    else 
    {
      $response["error"]=TRUE;
      $response["error_msg"]="Required parameter is not set!!!!!!!";
      echo json_encode($response);
    }

?>
