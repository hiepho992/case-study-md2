<?php
class ProductModel
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($product)
    {
        $sql = " INSERT INTO products('name', 'price', 'author', 'producter', 'page', 'year', 'info', 'image', 'qty', 'type')
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->price);
        $statement->bindParam(3, $product->author);
        $statement->bindParam(4, $product->producter);
        $statement->bindParam(5, $product->page);
        $statement->bindParam(6, $product->year);
        $statement->bindParam(7, $product->info);
        $statement->bindParam(8, $product->image);
        $statement->bindParam(9, $product->qty);
        $statement->bindParam(10, $product->type);

        return $statement->execute();
    }

    public function isHot()
    {
        $sql = "SELECT * FROM `buybooks`.`book` WHERE ishot = true";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function isNew()
    {
        $sql = "SELECT * FROM `buybooks`.`book` WHERE isnew = true";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function selectAll()
    {

        $sql = "SELECT * FROM `buybooks`.`book`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectId($id)
    {

        $sql = "SELECT * FROM `buybooks`.`book` WHERE idbooks = '$id'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function selectSameProduct($id){

        $sql = "SELECT * FROM `buybooks`.`book` WHERE typeofbook_idtypeofbook = '$id'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function search($search)  {       

        $sql = "SELECT * FROM buybooks.book WHERE book_name LIKE '%$search%'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
