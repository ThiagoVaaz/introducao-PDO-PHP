<?php

namespace app\models;

use app\models\Connection;

abstract class Model{

    protected $connection;

    public function __construct() {
        $this->connection = Connection::connect();
    }    


	public function all() {
		$sql = "select * from {$this->table} where id = :id";

		$list = $this->connection->prepare($sql);

		$list->bindValue(':id', 3);		

		$list->execute();

		return $list->fetch();
	}

	public function find($field, $paramters) {
		$sql = "select * from {$this->table} where {$field} = :id";
		$list = $this->connection->prepare($sql);
		//$list->bindValue('id', $value);
		$list->execute($paramters);

		return $list->fetch();
	}

	public function delete() {
		$sql = "delete from {$this->table} where $field = ?";
		$delete = $this->connection->prepare($sql);
		$delete->bindValue(1, $value);
		$delete->execute();

		return $delete->rowCount();
    }
};