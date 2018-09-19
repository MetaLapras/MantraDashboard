<?php

class DB_Functions
{

	private $conn;
	public  $statistic;
	//constructor

	function __construct()
	{
		require_once 'db_connect.php';
		$db=new DB_CONNECT();
		$this->conn=$db->connect();
	}
	//destructor
	 function __destruct()
	 {
		//TODO: implement destructor
	 }
			 //store new Worker
			 //return user WOrker detiails
			public function storeWorker($name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$permanent_address_id,$current_address_id,$contact1,$contact2,$salary,$bank_id,$project_id,$activation,$image_url)
					 {

						 // unique id $uuid=uniqid('',true);
						 // $hash=$this->hashSSHA($password);
						 // $encrypted_password=$hash["encrypted"];//encrypted $password
						 // $salt=$hash["salt"];

							 $stmt=$this->conn->prepare("insert into worker_master(
								name,
								adharcard_id,
								gender,
								dob,
								fingerprint1,
								fingerprint2,
								email,
								permanent_address_id,
								current_address_id,
								contact1,
								contact2,
								salary,
								bank_id,
								project_id,
								activation,
								image_url) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

							 $stmt->bind_param("ssssssssssssssss",$name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$permanent_address_id,$current_address_id,
								$contact1,$contact2,$salary,$bank_id,$project_id,$activation,$image_url);

							 $result=$stmt->execute();

							 $stmt->close();

							 //check for successfull registration

							 if($result)
							 {
								 $stmt=$this->conn->prepare("select * from worker_master where adharcard_id=?");
								 $stmt->bind_param("s",$adharcard_id);
								 $stmt->execute();
								 $worker=$stmt->get_result()->fetch_assoc();
								 $stmt->close();

								 return $worker;
							 }
							 else
							 {
								 return false;

							 }

					 }

			 //if Is workerExisted
			public function isWorkerExisted($adharcard_id,$name)
						{
								$stmt=$this->conn->prepare("select name from worker_master where adharcard_id=? and name=?");
								$stmt->bind_param("ss",$adharcard_id,$name);
								$stmt->execute();
								$stmt->store_result();

								if($stmt->num_rows>0)
								{
										$stmt->close();
										return true;
								}
								else
								{
									// code...
									$stmt->close();
									return false;
								}
						}

	//insert address details
    public function insertAddress($contact1, $contact2, $address_line_1, $address_line_2, $city, $pincode, $state, $country, $worker_id, $type,$employee_id)
    {
        $stmt=$this->conn->prepare("insert into address_master(
								contact1,
								contact2,
								address_line_1,
								address_line_2,
								city,
								pincode,
								state,
								country,
								worker_id,
								type,
								employee_id) 
								values (?,?,?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param("sssssssssss",$contact1, $contact2, $address_line_1, $address_line_2, $city, $pincode, $state, $country, $worker_id, $type,$employee_id);

        $result=$stmt->execute();

        $stmt->close();

        //check for successfull registration

        if($result)
        {
        	//SELECT * FROM address_master where employee_id=1 ORDER BY id DESC LIMIT 1
//select * from worker_master where employee_id=4 order by id desc limit 1
            $stmt=$this->conn->prepare("SELECT * FROM address_master where employee_id=? ORDER BY id DESC LIMIT 1");
            $stmt->bind_param("s",$employee_id);
            $stmt->execute();
            $address=$stmt->get_result()->fetch_assoc();
            $stmt->close();

            return $address;
        }
        else
        {
            return false;

        }

    }

    //Update worker by Bank id
    public function setBankIdByWorkersId($bid,$wid)
	{
        $stmt=$this->conn->prepare("update worker_master set bank_id=? where id=?");

        $stmt->bind_param("ss",$bid,$wid);

        $result=$stmt->execute();

        $stmt->close();
	}
    //Update worker by Permanent Address Id
    public function setPermanentAddressIdByWorkersId($pid,$wid)
    {
        $stmt=$this->conn->prepare("update worker_master set permanent_address_id=? where id=?");

        $stmt->bind_param("ss",$pid,$wid);

        $result=$stmt->execute();

        $stmt->close();
    }
    //Update worker by Current Address Id
    public function setCurrentAddressIdByWorkersId($cid,$wid)
    {
        $stmt=$this->conn->prepare("update worker_master set current_address_id=? where id=?");

        $stmt->bind_param("ss",$cid,$wid);

        $result=$stmt->execute();

        $stmt->close();
    }
   //Insert Bank Details
    public function insertBankDetails($account_holder_name,$ifsc_code,$account_no,$bank_name,$worker_id,$activation,$employee_id)
    {
        $stmt=$this->conn->prepare("insert into bank_master(
								account_holder_name,
								ifsc_code,
								account_no,
								bank_name,
								worker_id,
								activation,
								employee_id) 
								values (?,?,?,?,?,?,?)");

        $stmt->bind_param("sssssss",$account_holder_name,$ifsc_code,$account_no,$bank_name,$worker_id,$activation,$employee_id);

        $result=$stmt->execute();

        $stmt->close();

        //check for successfull registration

        if($result)
        {

            //SELECT * FROM bank_master where employee_id=1 ORDER BY id DESC LIMIT 1
            $stmt=$this->conn->prepare("select * from bank_master where employee_id=? order by id desc limit 1");
            $stmt->bind_param("s",$employee_id);
            $stmt->execute();
            $bank=$stmt->get_result()->fetch_assoc();
            $stmt->close();

            return $bank;
        }
        else
        {
            return false;

        }
    }
	//Insert Worker Details
    public function insertWDetails($name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$salary,$project_id,$employee_id)
	{
        $stmt=$this->conn->prepare("insert into worker_master(
								name,
								adharcard_id,
								gender,
								dob,
								fingerprint1,
								fingerprint2,
								email,
								salary,
								project_id,
								employee_id) 
								values (?,?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param("ssssssssss",$name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$salary,$project_id,$employee_id);

        $result=$stmt->execute();
        $stmt->close();

        //check for successfull registration

        if($result)
        {
        	//SELECT * FROM bank_master where employee_id=1 ORDER BY id DESC LIMIT 1
            $stmt=$this->conn->prepare("select * from worker_master where employee_id=? order by id desc limit 1");
            //$stmt=$this->conn->prepare("select * from worker_master where employee_id=? ");
            $stmt->bind_param("s",$employee_id);
            $stmt->execute();
            $bank=$stmt->get_result()->fetch_assoc();
            $stmt->close();

            return $bank;
        }
        else
        {
            return false;

        }
	}
    //
	public function getAddressById($address_id)
	{
	    try{
            $stmt=$this->conn->prepare("select * from address_master where id=?");
            $stmt->bind_param("s",$address_id);
            $stmt->execute();
            $contact_details=$stmt->get_result()->fetch_assoc();
            $stmt->close();

            return $contact_details;

        }catch (Exception $e){
            return FALSE ;
	    }

	}

    public function getBankById($bank_id)
    {
        $stmt=$this->conn->prepare("select * from bank_master where id=?");
        $stmt->bind_param("s",$bank_id);
        $stmt->execute();
        $bank_details=$stmt->get_result()->fetch_assoc();
        $stmt->close();

        return $bank_details;
    }

	//return Bank detiails
	public function storeBankDetails($account_holder_name,$ifsc_code,$account_no,$bank_name){
						 $stmt=$this->conn->prepare("insert into bank_master(account_holder_name,ifsc_code,account_no,bank_name) values (?,?,?,?)");

							 $stmt->bind_param("ssss",$account_holder_name,$ifsc_code,$account_no,$bank_name);

							 $result=$stmt->execute();
							 $stmt->close();

							 //check for successfull registration

							 if($result)
							 {
								 $stmt=$this->conn->prepare("select * from bank_master where account_no=?");
								 $stmt->bind_param("s",$account_no);
								 $stmt->execute();
								 $bank_details=$stmt->get_result()->fetch_assoc();
								 $stmt->close();

								 return $bank_details;
							 }
							 else
							 {
								 return false;

							 }

					 }
	//if Is Bank Details Existed
	public function isBankDetailsExisted($account_no)
						{
								$stmt=$this->conn->prepare("select account_holder_name from bank_master where account_no=?");
								$stmt->bind_param("s",$account_holder_name);
								$stmt->execute();
								$stmt->store_result();

								if($stmt->num_rows>0)
								{
										$stmt->close();
										return true;
								}
								else
								{
									// code...
									$stmt->close();
									return false;
								}
						}

	//get bankid by account_no and
	public function getBankId($account_no){
										$stmt=$this->conn->prepare("select * from bank_master where account_no=?");
										$stmt->bind_param("s",$account_no);

													   if($stmt->execute())
													   {
														  $bankdetails=$stmt->get_result()->fetch_assoc();
														  $stmt->close();
														  return $bankdetails['id'];
													   }
													   else
													   {
														 return NULL;
													   }

								}

	//get user by email and password
	public function getUserByEmailAndPassword($email,$password)
			 {
				 $stmt=$this->conn->prepare("select * from users where email=?");
				 $stmt->bind_param("s",$email);

				 if($stmt->execute())
				 {
					 	$user=$stmt->get_result()->fetch_assoc();
						$stmt->close();

						//verifying user password
						$salt=$user['salt'];
						$encrypted_password=$user['encrypted_password'];
						$hash=$this->checkhashSSHA($salt,$password);
						//check for password

						if($encrypted_password==$hash)
							return $user;



				 }
				 else
				 {
					 return NULL;
				 }

			 }

	//encrypting password
	public function hashSSHA($password)
			{
				$salt=sha1(rand());
				$salt=substr($salt,0,10);
				$encrypted=base64_encode(sha1($password.$salt,true).$salt);
				$hash=array("salt"=>$salt,"encrypted"=>$encrypted);

				return $hash;

			}

	//decrypting $password
	public function checkhashSSHA($salt,$password)
			{
				$hash=base64_decode(sha1($password.$salt,true).$salt);
				return $hash;
			}

	public function showProjectLoginDetails($employee_id,$project_name,$password)
			{
                $stmt=$this->conn->prepare("SELECT * FROM project_employee_assignment WHERE employee_id = ? AND project_name= ? AND password = ?  AND activation = 'active'" );
               // $stmt=$this->conn->prepare("SELECT * FROM project_employee_assignment,employee_master where employee_master.id = project_employee_assignment.employee_id AND project_name= ? AND password = ?  AND activation = 'active'" );
                $stmt->bind_param("sss",$employee_id,$project_name,$password);

                //SELECT * FROM project_employee_assignment,employee_master where employee_master.id = project_employee_assignment.employee_id AND project_name= 'mantra1' AND project_employee_assignment.password = '123' AND activation = 'active' AND project_employee_assignment.employee_id='1'

                if($stmt->execute())
                {
                    $project=$stmt->get_result()->fetch_assoc();
                    $stmt->close();

                    //verifying user password
                    $project_name1 = $project['project_name'];
                    $pass1 = $project['password'];
                    $employee_id1 = $project['employee_id'];

                  //  if($project_name1==$project_name and  $pass1==$password and $employee_id1 == $employee_id) {
                        return $project;
                    //}
                }
                else
                {
                    return NULL;
                }
			}

	public function showEmployeeDetails($employee_id)
			{
			$stmt=$this->conn->prepare("SELECT * FROM employee_master WHERE id = ?");
				$stmt->bind_param("s",$employee_id);

				if($stmt->execute())
				{

                    $employee =$stmt->get_result()->fetch_assoc();
					$stmt->close();


					return $employee;
				}
				else
				{
					return NULL;
				}
			}

	public function showWorkerDetailsAsProject($project_id)
			{

				$stmt=$this->conn->prepare("SELECT * FROM worker_master WHERE project_id = ?");
				$stmt->bind_param("s",$project_id);

				if($stmt->execute())
				{

//					$worker =$stmt->get_result()->fetch_all();
//					$stmt->close();
//					return $worker;

                    // Extract result set and loop rows
                    $result = $stmt->get_result();

                    while ($data = $result->fetch_assoc())
                    {
                        $this->statistic[] = $data;
                    }
                    $stmt->close();
                    return $this->statistic ;
                }
				else
				{
					return NULL;
				}
			}

	public function uploadimage($image)
	{
		if(isset($_FILES['uploadfile']))
         {
					//if you want to see file's value which is stored in array format use: print_r e.g> print_r($_FILES["uploadfile"]);
                    //and then you can use the name and temporary name values of file
					//print_r($_FILES["uploadfile"]);
         $filenm = $_FILES["uploadfile"]["name"]; //name of file
         $tempnm = $_FILES["uploadfile"]["tmp_name"]; // temp name of file

         $folder="images/workers/".$filenm;
                    //echo $folder;

                    //for moving uploaded image from temporary location to targeted path(folder) location
          move_uploaded_file($tempnm,$folder);

                    //for displaying image into php file
                    //echo "<img src='$folder' height='100' width='100'/>";
                }

            }

    public function UpdateImageinWorker($imgUrl,$wid){

        $stmt=$this->conn->prepare("update worker_master set image_url =? where id=?");

        $stmt->bind_param("ss",$imgUrl,$wid);

        $result=$stmt->execute();

        $stmt->close();
	}

	public function getWorkerDetailByWid($wid){
			$stmt=$this->conn->prepare("select * from worker_master where id=?");
			$stmt->bind_param("s",$wid);

			if($stmt->execute())
			{
				$details=$stmt->get_result()->fetch_assoc();
				$stmt->close();
				return $details;
			}
			else
			{
				return NULL;
			}
	}

	public function updateWorkerDetails($wid,$employee_id,$name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$salary){


         $stmt=$this->conn->prepare("UPDATE worker_master SET
								name = ?,
								adharcard_id = ?,
								gender = ?,
								dob = ?,
								fingerprint1 = ?,
								fingerprint2 = ?,
								email = ?,
								salary = ?
							    WHERE id = ? 
							    AND 
							    employee_id = ?
								");

         $stmt->bind_param("ssssssssss",$name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$salary,$wid,$employee_id);

         $result=$stmt->execute();

        $stmt->close();

        if($result)
		{

			$query = "SELECT * FROM worker_master WHERE id = ?";
			$stmt=$this->conn->prepare($query);
			$stmt->bind_param("s",$wid);
			$stmt->execute();
			$data = $stmt->get_result()->fetch_assoc();
			return $data;

		}else
		{
			return FALSE;
		}
	}

    public function updateAddressDetails($contact1, $contact2, $address_line_1, $address_line_2, $city, $pincode, $state, $country, $worker_id, $type,$employee_id)
    {
        $stmt=$this->conn->prepare("UPDATE address_master SET
								contact1 = ?,
								contact2 = ?,
								address_line_1 = ?,
								address_line_2 = ?,
								city = ?,
								pincode = ?,
								state = ?,
								country = ?
								WHERE
								worker_id = ?
								AND
								type = ?
								AND
								employee_id = ? 
								");

        $stmt->bind_param("sssssssssss",$contact1, $contact2, $address_line_1, $address_line_2, $city, $pincode, $state, $country, $worker_id, $type,$employee_id);

        $result=$stmt->execute();

        $stmt->close();

        //check for successfull registration

        if($result)
        {
            //SELECT * FROM address_master where employee_id=1 ORDER BY id DESC LIMIT 1
//select * from worker_master where employee_id=4 order by id desc limit 1
            $stmt=$this->conn->prepare("SELECT * FROM address_master where worker_id = ? and type = ?");
            $stmt->bind_param("ss",$worker_id,$type);
            $stmt->execute();
            $address=$stmt->get_result()->fetch_assoc();
            $stmt->close();

            return $address;
        }
        else
        {
            return false;

        }

    }

    public function updateBankDetails($account_holder_name,$ifsc_code,$account_no,$bank_name,$worker_id,$activation,$employee_id)
    {
        $stmt=$this->conn->prepare("UPDATE bank_master SET
								account_holder_name =?,
								ifsc_code =?,
								account_no =?,
								bank_name =?
								WHERE
								worker_id =? AND
								activation = ? AND
								employee_id = ? ");

        $stmt->bind_param("sssssss",$account_holder_name,$ifsc_code,$account_no,$bank_name,$worker_id,$activation,$employee_id);

        $result=$stmt->execute();

        $stmt->close();

        //check for successfull registration

        if($result)
        {

            //SELECT * FROM bank_master where employee_id=1 ORDER BY id DESC LIMIT 1
            $stmt=$this->conn->prepare("select * from bank_master where worker_id =? ");
            $stmt->bind_param("s",$worker_id);
            $stmt->execute();
            $bank=$stmt->get_result()->fetch_assoc();
            $stmt->close();

            return $bank;
        }
        else
        {
            return false;

        }
    }

    public function DeleteWorkerDetails($wid){
        $stmt=$this->conn->prepare("DELETE FROM `worker_master` WHERE id=?");
        $stmt->bind_param("s",$wid);

        if($stmt->execute())
        {
            $details="Worker Deleted Successfully";
            $stmt->close();
            return $details;
        }
        else
        {
            return NULL;
        }
	}

    public function DeleteAddressDetails($addId,$wid){
        $stmt=$this->conn->prepare("DELETE FROM address_master WHERE id=? AND worker_id = ?");
        $stmt->bind_param("ss",$addId,$wid);

        if($stmt->execute())
        {
            $details="Address Deleted Successfully";
            $stmt->close();
            return $details;
        }
        else
        {
            return NULL;
        }
	}

    public function DeleteBankDetails($bankId,$wid){
        $stmt=$this->conn->prepare("DELETE FROM bank_master WHERE id=? AND worker_id = ?");
        $stmt->bind_param("ss",$bankId,$wid);

        if($stmt->execute())
        {
            $details="Bank Deleted Successfully";
            $stmt->close();
            return $details;
        }
        else
        {
            return NULL;
        }
	}

	public function getAllattendance(){
        $stmt=$this->conn->prepare("SELECT * FROM attendance_master ");

       // $stmt=$this->conn->prepare("SELECT * FROM worker_master WHERE project_id = ?");
       // $stmt->bind_param("s",$project_id);

        if($stmt->execute())
        {

            /*	$worker =$stmt->get_result()->fetch_all($stmt);
                $stmt->close();
                return $worker;*/

            // Extract result set and loop rows
            $result = $stmt->get_result();

            while ($data = $result->fetch_assoc())
            {
                $this->statistic[] = $data;
            }
            $stmt->close();
            return $this->statistic ;

        }
        else
        {
            return NULL;
        }
    }

    public function InsertAttendanceDetails($worker_id,$worker_assignment_id,$project_id, $CheckInDate,$CheckInTime, $CheckOutTime, $OverTime, $FullTime, $halfDay, $wages){

        $stmt=$this->conn->prepare("insert into attendance_master(
                                  worker_id,
                                  worker_assignment_id,
                                  project_id,
                                  check_in_date,
                                  check_in_time,
                                  overtime,
                                  fulltime,
                                  halfday,
                                  check_out_time,
                                  wages
								) 
								values (?,?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param("ssssssssss",$worker_id,$worker_assignment_id,$project_id, $CheckInDate,$CheckInTime, $CheckOutTime, $OverTime, $FullTime, $halfDay, $wages);

        $result=$stmt->execute();

        $stmt->close();

        //check for successfull registration

        if($result)
        {

            //SELECT * FROM bank_master where employee_id=1 ORDER BY id DESC LIMIT 1
            $stmt=$this->conn->prepare("select * from attendance_master where worker_id = ? order by id desc limit 1");
            $stmt->bind_param("s",$worker_id);
            $stmt->execute();
            $bank=$stmt->get_result()->fetch_assoc();
            $stmt->close();

            return $bank;
        }
        else
        {
            return false;

        }
    }

    public function insertWorkerDetails($name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$salary,$project_id,$employee_id)
    {
        $stmt=$this->conn->prepare("insert into worker_master(
								name,
								adharcard_id,
								gender,
								dob,
								fingerprint1,
								fingerprint2,
								email,
								salary,
								project_id,
								employee_id) 
								values (?,?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param("ssssssssss",$name,$adharcard_id,$gender,$dob,$fingerprint1,$fingerprint2,$email,$salary,$project_id,$employee_id);
        $result=$stmt->execute();

        $stmt->close();
        print_r($result);
        exit();
        //check for successfull registration

        if($result)
        {
            //SELECT * FROM bank_master where employee_id=1 ORDER BY id DESC LIMIT 1
            // $stmt=$this->conn->prepare("select * from worker_master where employee_id=? order by id desc limit 1");
            $stmt=$this->conn->prepare("select * from worker_master where adharcard_id = ?");
            $stmt->bind_param("s",$adharcard_id);
            $stmt->execute();
            $bank=$stmt->get_result()->fetch_assoc();
            echo $bank;
            $stmt->close();

            return $bank;
        }
        else
        {
            return false;

        }
	}
	

	public function getAllProjectDetails(){
		$stmt=$this->conn->prepare("SELECT * FROM project_master ");
		
        if($stmt->execute())
        {
            $result = $stmt->get_result();

            while ($data = $result->fetch_assoc())
            {
                $this->statistic[] = $data;
            }
            $stmt->close();
            return $this->statistic ;

        }
        else
        {
            return NULL;
        }
    }


}

?>
