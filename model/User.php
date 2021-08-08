<?php
	class User{
		private $name;
		private $birth;
		private $email;
		private $login;
		private $password;
		public function insert($n,$b,$e,$l,$p){
			$servername="localhost";
			$user="root";
			$password="";
			$database="pweb";
			$connect=new mysqli($servername,$user,$password,$database);
			if($connect->connect_error){
				die("Conexão falhou!".$connect->connect_error);
			}
			$this->name=$n;
			$this->birth=$b;
			$this->email=$e;
			$this->login=$l;
			$this->password=$p;
			$sql="INSERT INTO user (name,birth,email,login,password) VALUES ('$n','$b','$e','$l','$p')";
			$connect->query($sql);
		}
	}
?>