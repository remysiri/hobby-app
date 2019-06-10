<?php

require_once __DIR__ . '/DAO.php';

class StoreDAO extends DAO {
    
    public function getYearlyEvent() {
        $sql = "SELECT * FROM events WHERE type = :type";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue('type', 1);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function purchase($data) {
        $sql = "INSERT INTO `user_purchases` (`user_id`,`product_id`,`package_type`, `active`, `purchase_end`) VALUES (:user_id, :product_id, :package_type, :active, :purchase_end)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue('user_id', $data['user_id']);
        $stmt->bindValue('product_id', $data['product_id']);
        $stmt->bindValue('package_type', $data['package']);
        $stmt->bindValue('active', 1);
        $stmt->bindValue('purchase_end', $data['expire']);
        $stmt->execute();
    }

}