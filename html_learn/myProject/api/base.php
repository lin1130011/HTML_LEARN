<?php

class DB
{
    public $table;
    public $dsn = "mysql:host=localhost;dbname=crudtest;charset=utf8";
    public $pdo;


    function __construct($table)
    {
        $this->table = $table;

        $this->pdo = new PDO($this->dsn, 'root', '');
    }

    function getAll()
    {
        $sql = "SELECT * FROM `$this->table`";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    function setRank()
    {
        $data = $this->getAll();
        $tmp = $data;

        foreach ($data as $key2 => $value2) {
            // $tmp[$key2]['rank'] = $value2['id'];
            if ($value2['id'] >= 5) {
                $tmp[$key2]['rank'] = 2;
            } else {
                $tmp[$key2]['rank'] = 1;
            }
        }
        return $tmp;
    }
    function store($data)
    {
        $sql = "INSERT INTO `$this->table`(`name`, `mobile`) VALUES ('{$data['name']}','{$data['mobile']}')";
        $this->pdo->query($sql);
        header("location: ../view/student/index.php");
        exit();
    }
}

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function to($url)
{
    header("location='{$url}'");
}

$Student = new DB('students');
