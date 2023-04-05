<?php

namespace app\models;

use app\models\Connection;
use app\traits\PersistDb;

abstract class Model{

	use PersistDb;

    protected $connection;

    public function __construct() {
        $this->connection = Connection::connect();
    }    


	public function all() {
		$sql = "select * from {$this->table}"; //where id = :id";

		$list = $this->connection->prepare($sql);

		//$list->bindValue(':id', 'id'); //

		$list->execute();

		return $list->fetchAll();
	}

	public function find($field, $value) {
		$sql = "select * from {$this->table} where {$field} = :{$field}";
		
		$list = $this->connection->prepare($sql);
		
		$list->bindValue($field, $value);
		
		$list->execute();

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