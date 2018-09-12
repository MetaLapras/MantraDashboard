<?php
header("Content-type: application/json; charset=utf-8");
//$json = '[{"checkInDate":"2018-09-08","checkInTime":"18:32:47","checkOutTime":"null","fullTime":"null","halfday":"null","id":"1","projectId":"1","wages":"50000","workerAssignmentId":"1","workerId":"11"},{"checkInDate":"2018-09-08","checkInTime":"18:32:56","checkOutTime":"null","fullTime":"null","halfday":"null","id":"2","projectId":"1","wages":"6767","workerAssignmentId":"1","workerId":"12"},{"checkInDate":"2018-09-08","checkInTime":"18:33:14","checkOutTime":"null","fullTime":"null","halfday":"null","id":"3","projectId":"1","wages":"6868","workerAssignmentId":"1","workerId":"13"}]';

require_once 'db_function.php';
include 'models/Attendance.php';
$itemArray = file_get_contents('php://input');
$response = array();
$db=new DB_Functions();

$array = (array) json_decode($itemArray,TRUE);
//var_dump(json_decode($itemArray, true));

$attendanceList = array();
		foreach($array as $item){
			
		/*echo	$checkInDate = $item['checkInDate']; echo"<br>";
		echo    $checkInTime =  $item['checkInTime'];echo"<br>";
		echo    $checkOutTime =  $item['checkOutTime'];echo"<br>";
		echo    $fullTime =  $item['fullTime'];echo"<br>";
		echo    $halfday =  $item['halfday'];echo"<br>";
		echo    $projectId =  $item['projectId'];echo"<br>";
		echo    $wages =  $item['wages'];echo"<br>";
		echo    $workerAssignmentId =  $item['workerAssignmentId'];echo"<br>";
		echo	$workerId =  $item['workerId'];echo"<br>";*/

		$checkInDate = $item['checkInDate'];
		$checkInTime =  $item['checkInTime'];
		$checkOutTime =  $item['checkOutTime'];
		$fullTime =  $item['fullTime'];
		$halfday =  $item['halfday'];
		$projectId =  $item['projectId'];
		$wages =  $item['wages'];
		$workerAssignmentId =  $item['workerAssignmentId'];
		$workerId =  $item['workerId'];
		$OverTime = NULL;

		$details =$db->InsertAttendanceDetails($workerId,
		$workerAssignmentId,
		$projectId,
		$checkInDate,
		$checkInTime,
		$checkOutTime,
		$OverTime,
		$fullTime,
		$halfday,
		$wages);
		
		  if($details)//!= false)
		    {
		    	$Attendance = new Attendance(
		    	$details["id"],
	            $details["worker_id"],
	            $details["worker_assignment_id"],
	            $details["project_id"],
	            $details["check_in_date"],
	            $details["check_in_time"],
	            $details["overtime"],
	            $details["fulltime"],
	            $details["halfday"],
	            $details["check_out_time"],//set worker_id
	            $details["wages"],
	            $details["created_at"],
	            $details["updated_at"]
	            );
	
	        	array_push($attendanceList, $Attendance);
		    	
		    }
		}
		$response["attendance"] = $attendanceList;
		echo json_encode($response);


?>