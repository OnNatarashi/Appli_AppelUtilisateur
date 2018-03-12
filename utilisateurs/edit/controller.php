<?php


class View
{
    private $data = array();

    private $render = FALSE;

    public function __construct($template)
    {
        try {
            $file = $_SERVER["DOCUMENT_ROOT"] . '/Appli_AppelUtilisateur/templates/utilisateurs/' . strtolower($template) . '.html';
            if (file_exists($file)) {
                $this->render = $file;
            } else {
                throw new Exception('template ' . $file . ' not found!');
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function assign($variable, $value)
    {
        $this->data = $value;
    }

    public function __destruct()
    {
       //extract($this->data);
        $row = $this->data;
        include($this->render);

    }
}
$edit = new View('edit');
$userId = $_GET["id"];
extract($_POST);
$mysqli = new mysqli("localhost", "root", "", "appelutilisateur");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$res = $mysqli->query("SELECT * FROM nageurs WHERE id=".$userId);

$row = $res->fetch_object();

$edit->assign(null,$row);

?>