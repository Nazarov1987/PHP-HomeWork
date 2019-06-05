<?php

namespace app\model;

use app\interfaces\IModel;
use app\engine\Db;

abstract class Model implements IModel
{
    protected $db;

    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function getOne($id) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        return $this->db->queryOne($sql, ['id' => $id]);
    }
    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->db->queryAll($sql);
    }

    public function insert() {
        $tableName = $this->getTableName();
        $sql = "INSERT INTO {$tableName} (`name_book`, `author`, `price`) VALUES (:name_book, :author, :price)";
        return $this->db->execute($sql, $params);
    }

    public function update() {

    }

    public function delete() {

    }

}