<?php
session_start();
class DB
{
    public $pdo;
    public $dsn = "mysql:host=localhost;dbname=cakestore;charset=utf8";
    // public $dsn = "mysql:host=localhost;dbname=s1130111;charset=utf8";
    public $table;

    function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
        // $this->pdo = new PDO($this->dsn, 's1130111', 's1130111');
    }

    function getAll(...$arg)
    {
        $sql = "select * from $this->table";

        $data = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function getOne($data)
    {
        if (is_array($data)) {
            $tmp = $this->a2s($data);
            $sql = "SELECT * FROM $this->table WHERE " . join(" && ", $tmp);
        } else {
            $sql = "SELECT * FROM $this->table WHERE `id` = $data";
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    function store($data)
    {

        $keys = array_keys($data);

        // dd($keys);
        // $sql = "INSERT INTO `{$this->table}`(``) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";
        $sql = "INSERT INTO `{$this->table}` " . "(`" . join("`,`", $keys) . "`)" . " VALUES " . "('" . join("','", $data) . "')";
        // echo $sql;
        return $this->pdo->exec($sql);
    }

    function update($data)
    {
        $tmp = $this->a2s($data);
        // $sql = "UPDATE `{$this->table}` SET `id`='[value-1]',`img`='[value-2]',`text`='[value-3]',`sh`='[value-4]' WHERE `id` = '{$id}'";
        $sql = "UPDATE `{$this->table}` SET " . join(" , ", $tmp) . " WHERE `id` = '{$data['id']}'";
        return $this->pdo->exec($sql);
    }
    function del($data)
    {
        $sql = "DELETE FROM `{$this->table}` WHERE `id` = '{$data['id']}'";
        return $this->pdo->exec($sql);
    }

    function count($data)
    {
        $tmp = $this->a2s($data);
        $sql = "SELECT COUNT(*) FROM $this->table WHERE " . join(" && ", $tmp);
        // echo $sql;
        return $this->pdo->query($sql)->fetchColumn();
    }

    function a2s($array)
    {
        $tmp = [];
        foreach ($array as $key => $value) {
            $tmp[] = "`{$key}` = '{$value}'";
        }
        return $tmp;
    }
    function q($sql)
    {
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}







function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

// $User = new DB('users');
