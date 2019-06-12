<?php

require_once __DIR__ . '/DAO.php';

class ActivityDAO extends DAO {
    public function getAllEvents() {
        $sql = "SELECT * FROM events ORDER BY start_date ASC LIMIT 3";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}