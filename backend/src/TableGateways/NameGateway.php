<?php
namespace Src\TableGateways;

class NameGateway {

    private $db = null;

    public function __construct($db) {
        $this->db = $db;
    }

    public function findAll() {
        $statement = "
            SELECT 
                id, name
            FROM
                Names;
        ";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function addName($name) {
            $statement = `
                INSERT INTO Names (name)
                VALUES (` + $name + `);
            `;

            try {
                $statement = $this->db->query($statement);
                $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
                return $result;
            } catch (\PDOException $e) {
                exit($e->getMessage());
            }
        }
}