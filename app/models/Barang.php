<?php

class Barang extends BaseModel {
    public function all() {
        $stmt = $this->db->prepare("SELECT * FROM barang");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}