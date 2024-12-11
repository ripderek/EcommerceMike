<?php

namespace models;

use \PDO;

if (file_exists(__DIR__ . "/../config/server.php")) {
    require_once __DIR__ . "/../config/server.php";
}
class mainModel
{
    private $server = DB_SERVER;
    private $db = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;

    protected function conectar()
    {
        $conexion =  new PDO("mysql:host=" . $this->server . ";dbname=" . $this->db, $this->user, $this->pass);
        $conexion->exec("SET CHARACTER SET utf8");
        return $conexion;
    }
    protected function ejecturarConsulta($consulta)
    {
        $sql = $this->conectar()->prepare($consulta);
        $sql->execute();
        return $sql;
    }
    public function limpiarCadena($cadena)
    {
        $palabras = ["<script>", "</script>", "<script src", "<script type=", "SELECT * FROM", "SELECT ", " SELECT ", "DELETE FROM", "INSERT INTO", "DROP TABLE", "DROP DATABASE", "TRUNCATE TABLE", "SHOW TABLES", "SHOW DATABASES", "<?php", "?>", "--", "^", "<", ">", "==", "=", ";", "::"];
        $cadena = trim($cadena);
        $cadena = stripslashes($cadena);

        foreach ($palabras as $palabra)
            $cadena = str_ireplace($palabra, "", $cadena);
        $cadena = trim($cadena);
        $cadena = stripslashes($cadena);
        return $cadena;
    }
    protected function verficarDatos($filtro, $cadena)
    {
        if (preg_match("/^" . $filtro . "$/", $cadena))
            return false;
        else
            return true;
    }
    protected function guardarDatos($tabla, $datos)
    {
        $query = "INSERT INTO $tabla (";

        $C = 0;
        foreach ($datos as $clave) {
            if ($C >= 1)
                $query .= ",";
            $query .= $clave["campo_nombre"];
            $C++;
        }

        $query .= ") VALUES(";

        $C = 0;
        foreach ($datos as $clave) {
            if ($C >= 1)
                $query .= ",";
            $query .= $clave["campo_marcador"];
            $C++;
        }

        $query .= ")";
        $sql = $this->conectar()->prepare($query);

        foreach ($datos as $clave)
            $sql->bindParam($clave["campo_marcador"], $clave["campo_valor"]);


        $sql->execute();

        return $sql;
    }
}
