<?php

namespace controllers;

use models\viewsModel;

class viewsControler extends viewsModel
{

    public function obtenerVistasControlador($vista, $subvista = null)
    {
        if ($vista != "") {
            //echo $vista . "/" . $subvista;
            $respuesta = $this->obtenerVistasModelo($vista, $subvista);
        } else {
            $respuesta = "tienda";
        }
        return $respuesta;
    }
}
