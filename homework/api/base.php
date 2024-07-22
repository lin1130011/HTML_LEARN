<?php
class DB
{
    public $pdo;
    public $dsn = "mysql:host=localhost;dbname=cakestore;charset=utf8";
    public $table;

    function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }

    function getAll()
    {
        $sql = "select * from $this->table";

        $data = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    function store($data)
    {
        $result = $this->a2s($data);
        $keys = array_keys($data);
        $val = join(",", $result);
        dd($keys);
        dd($val);
        $sql = "INSERT INTO `{$this->table}`(`id`, `img`, `text`, `sh`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";
        echo $sql;
    }

    function update($data)
    {
        $id = $data['id'];
        $sql = "UPDATE `{$this->table}` SET `id`='[value-1]',`img`='[value-2]',`text`='[value-3]',`sh`='[value-4]' WHERE `id` = '{$id}'";
    }
    function del($data)
    {
        $sql = "DELETE FROM `{$this->table}` WHERE 0";
    }

    function count($key, $val)
    {

        $sql = "SELECT COUNT(*) FROM $this->table WHERE `$key` = '$val'";
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
}



function q($sql)
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=cakestore";
    $pdo = new PDO($dsn, 'root', '');
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}



function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$User = new DB('users');
