  <?php
  class DB_CONNECT
  {
	  private $conn;

	  //connecting to database

	  public function connect()
	  {
		  require_once 'config.php';
		  $this->conn= new mysqli(db_host,db_user,db_pwd,db_name);
		  return $this->conn;
	  }

  }
  ?>
