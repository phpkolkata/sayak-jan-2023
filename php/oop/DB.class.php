<?php
class Db
{
    public static $host = "localhost";
    public static $user = "asif";
    public static $pass = "asif";
    public static $db = "mobile_sayak";
    private $con = null;

    public function __construct($id)
    {
        // echo "constructing " . $id . "<br>";
        $this->connect();
    }

    public function connect()
    {
        $this->con = mysqli_connect(self::$host, self::$user, self::$pass, self::$db);
        if (!$this->con) {
            die("connection error");
        } else {
            echo "connection started<br>";
        }

    }

    public function insert($table, $data)
    {
        $sql = "INSERT INTO $table VALUES($data)";
        // print $sql;die;
        $res = mysqli_query($this->con, $sql);
    }

    public function __destruct()
    {
        echo "destructing";
    }

}
// ----------------------------------------

$obj = new Db(44);
// $obj->connect();
$data = "NULL,'test','y'";
$obj->insert('category', $data);

//---------------------------------
