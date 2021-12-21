<?php

class DB
{
    static $obj;

    private function __construct()
    {
        $this->con = new mysqli('localhost', 'testUser', 'qwerty', 'users');
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    static public function getConnect()
    {
        if (empty (self::$obj)) {
            self::$obj = new self();
        }
        return self::$obj->con;
    }

    private function __destruct()
    {
        $this->con = null;
    }
}


$db = DB::getConnect();

//foreach ($db->query("select * from films")->fetch_all() as $array){
//    foreach ($array as $k => $v){
//        echo $k . '=>' . $v . '<br>';
//    }
//}

class Film {

    protected $connect;

    public function __construct($db)
    {
        $this->connect = $db;
    }

    public function addFilm($title,$request)
    {
       $this->connect->query("INSERT INTO films ( $title ) values( $request )");
    }

}

$film = new Film($db);

$arr = [
    ['idfilms' => '105',
        'title' => 'sss',
        'year' => '222',
        'filmscol' => 'srr'],
    ['idfilms' => '106',
        'title' => 'fffff',
        'year' => '202',
        'filmscol' => 'sr'],
    ['idfilms' => '107',
        'title' => 'Ford F Ferrari',
        'year' => '2019',
        'filmscol' => 'r'],
    ['idfilms' => '108',
        'title' => 's8ss',
        'year' => '222',
        'filmscol' => 'srr'],
    ['idfilms' => '109',
        'title' => 'fffff',
        'year' => '202',
        'filmscol' => 'sr'],
    ['idfilms' => '110',
        'title' => 'Ford F Ferrari',
        'year' => '2019',
        'filmscol' => 'r'],

];


$i = 0;
$title = '';
$data = '';
foreach ($arr as $value){
    foreach ($value as $k => $v){
        $title .=  $k . ',';
        $data .= "'" . $v . "'" . ',' ;
    }
    $data .= '#';
    $title .= '#';
}

$arrTitle = explode(',#', $title);
$arrData = explode(',#', $data);

for ($i = 0; $i < count($arrData);$i++){
    $film->addFilm($arrTitle[$i],$arrData[$i]);
}

foreach ($db->query("select * from films")->fetch_all() as $array){
    foreach ($array as $k => $v){
        echo $k . '=>' . $v . '<br>';
    }
    echo '<hr>';
}

$db = null;
