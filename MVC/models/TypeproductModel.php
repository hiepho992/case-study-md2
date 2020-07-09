<?php
class TypeproductModel{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($typeProduct){

        $sql = "INSERT INTO typeProducts('name') VALUES (?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1,$typeProduct->name);
        return $statement->execute();
    }

    public function selectAll(){

        $sql = "SELECT * FROM buybooks.typeofbook";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);

    }

}


?>