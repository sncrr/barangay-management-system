<?php

class Model
{
    protected $connection = null;
    protected $incrementing = true;
    protected $timestamps = true;
    protected $table = '';
    protected $columns = [];

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function select($condition)
    {
        $columns = implode(", ", $this->columns);
        $tableName = $this->table;

        $conditionKeys = array_keys($condition);
        $whereClause = implode(" AND ", array_map(fn($key) => "$key = ?", $conditionKeys));

        $sql = "SELECT $columns FROM $tableName WHERE $whereClause";

        $connection = $this->connection;
        $statement = $connection->prepare($sql);

        $types = str_repeat("s", count($condition)); // Assuming all values are strings, adjust as needed
        $statement->bind_param($types, ...array_values($condition));

        if ($statement->execute()) {
            $result = $statement->get_result();
            $data = $result->fetch_all(MYSQLI_ASSOC);
        } else {
            throw new Exception($statement->error);
        }

        $statement->close();
        $connection->close();

        return $data;
    }

    public function create(array $data)
    {   
        try {
            $tableName = $this->table;
            $columns = implode(", ", array_keys($data));
            $placeholders = implode(", ", array_fill(0, count($data), "?"));
            
            $sql = "INSERT INTO $tableName ($columns) VALUES ($placeholders)";
           
            $connection = $this->connection;
            $statement = $connection->prepare($sql);

            $types = str_repeat("s", count($data));
            $statement->bind_param($types, ...array_values($data));

            if ($statement->execute()) {
                $lasId = $connection->insert_id;
                $created = $this->getById($lasId);
            } else {
                throw new Exception($statement->error);
            }
            
            $statement->close();
            $connection->close();

            return $created;

        } catch (\Throwable $th) {
            throw new Exception($th->getMessage(), $th->getCode());
        }
    }

    public function update(array $data)
    {
    }

    public function delete(array $condition)
    {
    }

    public function getById($id)
    {
        $connection = $this->connection;

        $sql = "SELECT * FROM users WHERE id = ?";

        $statement = $connection->prepare($sql);
        $statement->bind_param("i", $id);
        $statement->execute();

        $result = $statement->get_result();
        $row = $result->fetch_assoc();

        $statement->close();
        $connection->close();

        return $row;
    }
}
