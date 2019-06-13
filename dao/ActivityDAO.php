<?php

require_once __DIR__ . '/DAO.php';

class ActivityDAO extends DAO {
    public function threeSoonestEvents($limit = 3) {
        $now = new DateTime();
        $now->format('Y-m-d');    // MySQL datetime format
        //echo $now->getTimestamp();

        $sql = "SELECT * FROM events WHERE start_date > :now ORDER BY start_date ASC LIMIT :limit";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue('now', $now->format('Y-m-d'));
        $stmt->bindValue('limit', $limit);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllEvents() {
        $now = new DateTime();
        $now->format('Y-m-d');    // MySQL datetime format
        //echo $now->getTimestamp();

        $sql = "SELECT * FROM events WHERE start_date > :now ORDER BY start_date ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue('now', $now->format('Y-m-d'));
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllEventsWithFilters($keyword = "", $date = false, $category = false) {
        $sql = "SELECT * FROM events WHERE name LIKE :keyword";
        $bindValues = array();
        $bindValues[":keyword"] = "%" . $keyword . "%";

        if(!empty($date)) {
            $sql .= " AND start_date >= :date";
            $bindValues[":date"] = $date;
        }

        if(!empty($category)) {
            $sql .= " AND category = :category";
            $bindValues[":category"] = $category;
        }

        $sql .= " ORDER BY start_date ASC";
        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($bindValues);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}