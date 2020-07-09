<?php
class UserModel{

    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function login(User $user){
        $sql = "SELECT `users`.`idusers`,
        `users`.`user_name`,
        `users`.`user_pass`,
        `users`.`isadmin`,
        `users`.`email`
    FROM `buybooks`.`users`
     WHERE `email` = ? AND `user_pass` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $user->email);
        $statement->bindParam(2, $user->pass);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function isadmin(User $user){
        $sql = "SELECT `users`.`idusers`,
        `users`.`user_name`,
        `users`.`user_pass`,
        `users`.`isadmin`,
        `users`.`email`
        FROM `buybooks`.`users`
        WHERE `isadmin` != 0  ";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function add(User $user){
        $sql = "INSERT INTO `buybooks`.`users`(`user_name`, `email`, `user_pass`)
        VALUES( ?, ?, ?)";
        
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $user->name);
        $statement->bindParam(2, $user->email);
        $statement->bindParam(3, $user->pass);  
        
        return $statement->execute();
    }


}



?>