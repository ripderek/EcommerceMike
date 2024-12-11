<?php

namespace models;

class viewsModel
{
    protected function obtenerVistasModelo($vista, $subvista = null)

    {
        //vistas permitidas
        //estas representan las subcarpetas contenidas en ./views/content
        $listaBlanca = ["tienda", "Users", "Admin"];
        //echo $vista . "/" . $subvista;
        //si existe la subvista entonces quiere decir que va a entrar en una carpeta 
        if ($subvista) {
            if (in_array($vista, $listaBlanca)) {
                if (is_file("./views/content/" . $vista . "/" . $subvista . ".php"))
                    $contentido = "./views/content/" . $vista . "/" . $subvista . ".php";
                else
                    $contentido = "404";
            } else
                $contentido = "404";
        }
        //quiere decir que va a buscar en una sola vista y no en subcarpetas
        else {
            if (in_array($vista, $listaBlanca)) {
                if (is_file("./views/content/" . $vista . ".php"))
                    $contentido = "./views/content/" . $vista . ".php";
                else
                    $contentido = "404";
            } elseif ($vista == "tienda" || $vista == "index")
                $contentido = "tienda";
            else
                $contentido = "404";
        }
        return $contentido;
    }
}
