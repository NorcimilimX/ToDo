<?php

    function connect() {
        $dsn = 'mysql:host=localhost;dbname=roadmap';
        $pdo = new PDO($dsn, 'root', '111');

        return $pdo;
    }

    function getAllTasks() {
        $pdo = connect();
        $stmt = $pdo->prepare('SELECT * FROM checkpoint c ORDER BY c.index_number ASC');
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;

        return $result;
    }

    function createTask($title, $description, $indexNumber) {
        $pdo = connect();
        $stmt = $pdo->prepare("INSERT INTO checkpoint (title, description, index_number) VALUES (:title, :description, :index_number)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':index_number', $indexNumber);

        return $stmt->execute();
    }

    function updateTask($taskId) {
        $pdo = connect();
        $stmt = $pdo->prepare("UPDATE checkpoint c SET c.is_completed = 1 WHERE c.id = :taskId");
        $stmt->bindParam(':taskId', $taskId);

        return $stmt->execute();

    }

    function deleteTask($taskId) {
        $pdo = connect();
        $stmt = $pdo->prepare("DELETE FROM checkpoint WHERE id = :taskId");
        $stmt->bindParam(':taskId', $taskId);

        return $stmt->execute();
    }

    function editTask($taskId, $title, $description, $indexNumber) {
        $pdo = connect();
        $stmt = $pdo->prepare("UPDATE checkpoint c SET c.title = :title, c.description = :description, c.index_number = :index_number WHERE c.id = :taskId");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':index_number', $indexNumber);
        $stmt->bindParam(':taskId', $taskId);


        return $stmt->execute();
    }

    function getTaskById($taskId){
        $pdo = connect();
        $stmt = $pdo->prepare("SELECT * FROM checkpoint c WHERE c.id = :taskId");
        $stmt->bindParam(':taskId', $taskId);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

?>
