<?php
class Paginas
{
    //metodo donde se obtiene la ruta del archivo
    static public function enlacesPaginasModelo($enlaces)
    {
        if($enlaces == 'principal')
        {
            $modulo = 'vistas/modulos/principal.php';
        }
        else if($enlaces == 'alta_persona')
        {
            $modulo = 'vistas/modulos/alta_persona.php';
        }
        else if($enlaces == 'mostrar_persona')
        {
            $modulo = 'vistas/modulos/mostrar_persona.php';
        }
        else if($enlaces == 'alta_puestos')
        {
            $modulo = 'vistas/modulos/alta_puestos.php';
        }
        else if($enlaces == 'mostrar_puestos')
        {
            $modulo = 'vistas/modulos/mostrar_puestos.php';
        }
        else if($enlaces == 'altaDepartamento')
        {
            $modulo = 'vistas/modulos/alta_departamento.php';
        }
        else
        {
            $modulo = 'vistas/modulos/principal.php';
        }
        //regresamos la ruta dentro de una variable la ruta del archivo dentro de una variable

        return $modulo;
    }
}