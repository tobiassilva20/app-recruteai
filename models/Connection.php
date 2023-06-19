<?php

namespace models;

class Connection{
	private static $instace;

	public static function getConn(){
		if(!isset(self::$instace)){
			self::$instace = new \PDO('mysql:host=localhost;dbname=recrutaai', 'root', 'password');
		}
		return self::$instace;			
	}
}