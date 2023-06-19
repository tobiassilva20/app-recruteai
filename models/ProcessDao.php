<?php

namespace models;

if (!isset($_SESSION['logged'])) {
    header('Location: index.php');
}

require_once 'Connection.php';

use models\Connection as Connection;

class ProcessDao
{
    public    function saveProcess(Process $process)
    {

        $sql = "INSERT INTO process (title, description ,status) VALUES (?,?,?)";

        $stmt = Connection::getConn()->prepare($sql);
        $stmt->bindValue(1, $process->getTitle());
        $stmt->bindValue(2, $process->getDescription());
        $stmt->bindValue(3, true);
        return $stmt->execute();
        //return true;
    }

    public function getAllProcess()
    {
        $sql = 'SELECT * FROM process';

        $stmt = Connection::getConn()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $resultSet = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultSet;
        } else {
            return [];
        }
    }
}
