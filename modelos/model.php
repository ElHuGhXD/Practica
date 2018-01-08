<?php

class EnlacesPaginas{

    public function enlacesPaginasModel($enlacesModel){

        if($enlacesModel == "nosotros" ||
           $enlacesModel == "servicios" ||
           $enlacesModel == "contactenos"){

            $modulo = "vistas/modulos/".$enlacesModel.".php";
        }

        else if($enlacesModel == "index"){

            $modulo = "vistas/modulos/inicio.php";

        }
        else{

            $modulo = "vistas/modulos/inicio.php";

        }

        return $modulo;

    }
}



?>