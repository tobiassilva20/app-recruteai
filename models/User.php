<?php


namespace models;

class User{
	
	private $user_id;
	private $user_name;
	private $user_email;
	private $user_password;

	function getUser_id() {
		return $this->user_id;
	}
	
	function getUserName() {
		return $this->user_name;
	}
	function setUserName($name){
		$this->user_name = $name;
	}

	function getUserUsername() {
		return $this->user_name;
	}
	function setUserUsername($username){
		$this->user_name = $username;
	}
	function getUserEmail() {
		return $this->user_email;
	}
	function setUserEmail($email){
		$this->user_email = $email;
	}
	function getUserPassword() {
		return $this->user_password;
	}
	function setUserPassword($password){
		$this->user_password = $password;
	}
}