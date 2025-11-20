<?php

class BaseModel {
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance(); // ambil koneksi dari class Database
    }
}