<?php
require_once 'PreguntasModel.php';

class PreguntasController
{
    private $model;

    public function __construct()
    {
        // ORM
        $this->model = new PreguntasModel();
    }

    public function all()
    {
        $preguntas = $this->model->get_preguntas();
        require_once 'views/allView.php';
    }

    public function create()
    {
        $txtTerm = $_POST['txtTerm'] ?? "";
        $txtDesc = $_POST['txtDesc'] ?? "";
        $txtColor = $_POST['txtColor'] ?? "";

        if (isset($_POST['subInsertar'])) {
            switch ($this->model->create($txtTerm, $txtDesc, $txtColor)) {
                case 0:
                    header("Location: ../preguntas");
                    break;
                case 1:
                    $subInsertar = "Debes introducir un color";
                    break;
                case 2:
                    $subInsertar = "Debes introducir un desc";
                    break;
                case 3:
                    $subInsertar = "Debes introducir un term";
                    break;
                default:
                    $subInsertar = "";
                    break;
            }
        } else {
            $preguntas = $this->model->get_preguntas();
            $subInsertar = "";
        }

        require_once 'views/createView.php';
    }

    public function read()
    {
        $id = $_GET['id'];
        $pregunta = $this->model->get_pregunta($id);

        require_once 'views/readView.php';
    }

    public function update()
    {
        $id = $_GET['id'];

        if (isset($_POST['subModificar'])) {
            $this->model->update($id, $_POST['txtTerm'], $_POST['txtDesc'], $_POST['txtColor']);
            header("Location: ../editar/$id");
        } else {
            $pregunta = $this->model->get_pregunta($id);
            require_once 'views/readView.php';
            require_once 'views/updateView.php';
        }
    }

    public function delete()
    {
        $id = $_GET['id'];

        if (isset($_POST['subBorrar'])) {
            $this->model->delete($id);
            header("Location: ../preguntas");
        } else {
            $pregunta = $this->model->get_pregunta($id);
            require_once 'views/readView.php';
            require_once 'views/deleteView.php';
        }
    }

    public function upload()
    {
        if (isset($_POST['subUpload'])) {
            $fh = fopen($_FILES["upcsv"]["tmp_name"], "r");
            if ($fh === false) exit("Error al abrir el archivo");
            $this->model->upload($fh);
            $subUpload = "Importado";
        } else {
            $subUpload = "";
        }
        require_once 'views/uploadView.php';
    }
}