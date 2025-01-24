<?php

require_once 'models/Model.php';

class User extends Model
{
    protected $columns = [
        'id',
        'username',
        'password',
        'firstname',
        'lastname',
        'contact_no',
        'email'
    ];

    protected $table = 'users';

    public function getByUsername($username)
    {
        $connection = $this->connection;

        $sql = "SELECT * FROM users WHERE username = ?";

        $statement = $connection->prepare($sql);
        $statement->bind_param("s", $username);
        $statement->execute();

        $result = $statement->get_result();
        $row = $result->fetch_assoc();

        $statement->close();
        $connection->close();

        return $row;
    }
}