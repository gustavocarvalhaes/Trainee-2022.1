<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function deletaProdutos($tabela, $id)
    {
        $sql = "delete from {$tabela} where id={$id}";


        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function editaProdutos($idp, $table, $parametros)
    {
        $sql = sprintf(
            'UPDATE %s
            SET %s
            WHERE %s;', 
            $table,
            implode(', ', array_map(function ($parametros) {
                return "{$parametros} = :{$parametros}";
            }, array_keys($parametros))),
            'id = :id'
        );

        $parametros['id'] = $idp;

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parametros);
        } catch (Exception $e) {
            die("An error occurred when trying to update database: {$e->getMessage()}");
        }
    }

    
    public function criaProdutos($table, $parametros)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)', 
            $table, implode(',', array_keys($parametros)), 
            ':' . implode(', :', array_keys($parametros))
        );

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute($parametros);
        } catch(Exception $e) {
            die($e->getMessage());
        }
    }
}
