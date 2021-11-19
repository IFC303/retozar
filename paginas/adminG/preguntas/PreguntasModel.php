<?php

class PreguntasModel
{
    private $db;

    public function __construct()
    {
        $this->db = $this::conexion();
    }

    function conexion()
    {
        try {
            $con = new PDO('mysql: host=localhost; dbname=disc', 'root', 'toor');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $con->exec("SET CHARACTER SET UTF8");
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
        return $con;
    }

    public function get_preguntas()
    {
        try {
            $stmt = $this->db->query("SELECT * FROM preguntas");
            $preguntas = $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }

        return $preguntas;
    }

    public function get_pregunta($id)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM preguntas WHERE id = ? ");
            $stmt->execute(array($id));
            $pregunta = $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }

        return $pregunta;
    }

    public function create($term, $desc, $color)
    {
        if (!empty($term)) {
            if (!empty($desc)) {
                if (!empty($color)) {
                    try {
                        $stmt = $this->db->prepare("INSERT INTO preguntas(term, `desc`, color) VALUES (?, ?, ?)");
                        $stmt->execute(array($term, $desc, $color));
                    } catch (Exception $e) {
                        die('Error ' . $e->getMessage());
                    }
                    $result = 0;
                } else {
                    $result = 1;
                }
            } else {
                $result = 2;
            }
        } else {
            $result = 3;
        }
        return $result;
    }

    public function update($id, $term, $desc, $color)
    {
        try {
            $stmt = $this->db->prepare("UPDATE preguntas SET term = ?, `desc` = ?, color = ? WHERE id = ?");
            $stmt->execute(array($term, $desc, $color, $id));
        } catch (Exception $e) {
            die('Error' . $e->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $stmt = $this->db->prepare('DELETE FROM preguntas WHERE id = ?');
            $stmt->execute(array($id));
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }
    }

    public function upload($fh)
    {
        $stmt = $this->db->prepare("SET FOREIGN_KEY_CHECKS = 0");
        $stmt->execute();
        $stmt = $this->db->prepare("TRUNCATE `preguntas`");
        $stmt->execute();
        $stmt = $this->db->prepare("SET FOREIGN_KEY_CHECKS = 1");
        while (($row = fgetcsv($fh)) !== false) {
            try {
                $stmt = $this->db->prepare("INSERT INTO `preguntas` (`term`, `desc`, `color`) VALUES (?, ?, ?)");
                $stmt->execute([$row[0], $row[1], $row[2]]);
            } catch (Exception $ex) {
                echo $ex->getmessage();
            }
        }
        fclose($fh);
    }
}