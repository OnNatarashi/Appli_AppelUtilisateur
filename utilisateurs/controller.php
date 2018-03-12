<?php


class View
{
private $data = array();

private $render = FALSE;

public function __construct($template)
{
    try {
        $file = __DIR__ . '/../templates/utilisateurs/' . strtolower($template) . '.html';
        
        if (file_exists($file)) {
            $this->render = $file;
        } else {
            throw new Exception('template ' . $template . ' not found!');
        }
    }
    catch (Exception $e) {
        echo $e->getMessage();
    }
}

public function assign($variable, $value)
{
    $this->data[$variable] = $value;
}

public function __destruct()
{
   //extract($this->data);
   $data = $this->data;
    include($this->render);

}
}
$index = new View('index');

$mysqli = new mysqli("localhost", "root", "", "appelutilisateur");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$res = $mysqli->query("SELECT * FROM nageurs");

while ($row = $res->fetch_object()){
    $index->assign($row->id,$row);
}
?>