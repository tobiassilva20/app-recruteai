<?php
namespace models;

session_start();
if(!isset($_SESSION['logged'])){
  header('Location: index.php');
}

require_once 'Connection.php';

use models\Connection as Connection;
class UserDao{
	public	function createUser(User $user){

		$sql = "INSERT INTO users (name, user,password) VALUES (?,?,?)";

		$stmt = Connection::getConn()->prepare($sql);
		$stmt->bindValue(1, $user->getUserName());
		$stmt->bindValue(2, $user->getUserEmail());
		$stmt->bindValue(3, $user->getUserPassword());
		return true;
		//return $stmt->execute();
	}

	public function getUser(){
		
	}
	public function updateUser(User $user){
		
	}

	public function deleteUser($id){
		
	}
}