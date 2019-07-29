<?php
include 'dbconfig.php';
class Client{
	private $user;
	private $pwd;
	public $conn;
	 public function __construct($user,$pwd,$conn){
		
		
		$this->user=$user;
		$this->pwd=$pwd;
		
		$c=new Database();
		$this->conn=$c->connexion();
	}
	function getuser()
	{	return $this->user;	}
	
	function getpwd(){
		return $this->pwd;
	}
	
	function setuser($user) {$this->user=$user;}
function setpwd($pwd) {$this->pwd=$pwd;}
	public function Logedin($conn,$user,$pwd)
	{
		$req="select * from client where user='$user' && pwd='$pwd'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
		
	}
}

?>