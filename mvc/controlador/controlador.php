<?php
class Controlador
{
        //metodo que carga la plantilla
        static public function paginas()
        {
            include("vistas/plantilla.php");
        }

        //método que gestiona los enlaces
        static public function enlacespaginas()
        {
            if(isset($_GET['accion']))
            {
                $enlaces = $_GET['accion'];
            }
            else
            {
                $enlaces = "principal";
            }

            $respuesta= Paginas::enlacesPaginasModelo($enlaces);

            //muestra la pagina
            include $respuesta;
        }

        //metodo para  guardar los puestos
        static public function registroPuestosControlador()
        {
            if(isset($_POST['nombre_puesto']))
            {
                //arreglo
                $datosControlador = array("0"=>$_POST['nombre_puesto'], "1"=>$_POST['salario']);
                $tabla='puesto';
                $respuesta= Datos::guardarPuesto($datosControlador,$tabla);

                if($respuesta == 'ok')
                {
                    ?>
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Datos guardados',
                            text: 'Datos guardados correctamente',
                            confirmButtonText: 'OK',
                            allowOutsideClick: false 
                        }).then((result) =>{
                            if(result.isConfirmed){
                                window.location.replace("index.php?accion=alta_puesto");
                            }
                        });
                    </script>
                    <?php
                }
                else
                {
                    ?>
                    <script>
                     Swal.fire({
                         icon: 'error',
                         title: 'Ocurrió un Error',
                         text: 'Los Datos no se pudieron Guardar',

                     }).then((result) =>{
                         if(result.isConfirmed){
                             window.location.replace("index.php?accion=alta_puesto");
                         }
                     });
                 </script>
                 <?php
             }
         }
     }

        //metodo para  guardar las personas
     static public function registroPersonasControlador()
     {
        if(isset($_POST['nombres']))
        {

                //Gestión de la Imagen
            $archivo= $_FILES['foto']['tmp_name'];
            $nombreArchivo= $_FILES['foto']['name'];

            $ruta= "vistas/imagenes/".$nombreArchivo;



                //arreglo
            $datosControlador = array(
                "0"=>$_POST['nombres'],
                "1"=>$_POST['primer_apellido'],
                "2"=>$_POST['segundo_apellido'],
                "3"=>$_POST['edad'],
                "4"=>$_POST['fecha_nac'],
                "5"=>$_POST['telefono'],
                "6"=>$_POST['correo'],
                "7"=>$_POST['clave'],
                "8"=>$ruta,
                "9"=>$_POST['puesto'],
                "10"=>$_POST['latitud'],
                "11"=>$_POST['altitud']); 

            $tabla='empleado';
            $respuesta= Datos::guardarPersona($datosControlador,$tabla);

            if($respuesta == 'ok')
            {
                     //Instrucción PHP para mover el archivo
                move_uploaded_file($archivo,$ruta);

                ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Datos guardados',
                        text: 'Datos guardados correctamente',
                        confirmButtonText: 'OK',
                        allowOutsideClick: false 
                    }).then((result) =>{
                        if(result.isConfirmed){
                            window.location.replace("index.php?accion=alta_puesto");
                        }
                    });
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                 Swal.fire({
                     icon: 'error',
                     title: 'Ocurrió un Error',
                     text: 'Los Datos no se pudieron Guardar',

                 }).then((result) =>{
                     if(result.isConfirmed){
                         window.location.replace("index.php?accion=alta_puesto");
                     }
                 });
             </script>
             <?php
         }
     }
    }
        //metodo para agregar departamento
        //metodo para  guardar los puestos
    static public function registroDepartamentoControlador()
    {
        if(isset($_POST['nombreDepartamento']))
        {
                //arreglo
            $datosControlador = array("0"=>$_POST['nombreDepartamento']);
            $tabla='departamento';
            $respuesta= Datos::guardarDepartamento($datosControlador,$tabla);

            if($respuesta == 'ok')
            {
                ?>
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Datos guardados',
                        text: 'Datos guardados correctamente',
                        confirmButtonText: 'OK',
                        allowOutsideClick: false 
                    }).then((result) =>{
                        if(result.isConfirmed){
                            window.location.replace("index.php?accion=alta_puesto");
                        }
                    });
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                 Swal.fire({
                     icon: 'error',
                     title: 'Ocurrió un Error',
                     text: 'Los Datos no se pudieron Guardar',

                 });
             </script>
             <?php
         }
     }
    }



        //Método que enlista los puestos
    static public function ListaPuestos()
    {
        $tabla = 'puesto';
        $respuesta= Datos::ObtenerPuestos($tabla);
        ?>
        <select name="puesto" id="" class="form-control">
            <option value="">Elige un Puesto</option>
            <?php
            foreach($respuesta as $registro)
            {
                ?>
                <option value="<?php echo $registro['pk_puesto']; ?>"><?php echo $registro['nombre_puesto']; ?></option>
                <?php
            }
            ?>
            

        </select>

        
        <?php
    }






            //Método que enlista los puestos
    static public function ListaEmpleado()
    {
        $tabla = 'empleado';
        $respuesta= Datos::ObtenerEmpleado($tabla);

        $i=0;
        //conocer el numero de registros
        foreach($respuesta as $registro)
        {
            $i=$i+1;
            ?>
            <tr>
                <td><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></td>
                <td><button class="btn btn-danger"> <i class="fa-solid fa-trash"></i></button></td>
                <td></td>
                <td><img src="<?php echo $registro["foto"];?>" class="img-fluid"></td> 
                <td><?php echo $registro["nombres"];?></td>
                <td><?php echo $registro["primer_apellido"];?></td>
                <td><?php echo $registro["segundo_apellido"];?></td>
                <td><?php echo $registro["edad"];?></td>
                <td><?php echo $registro["fecha_nac"];?></td>
                <td><?php echo $registro["telefono"];?></td>
                <td><?php echo $registro["correo"];?></td>
                <td><?php echo $registro["nombre_puesto"];?></td>
            </tr>  
            <?php
        }

        
    }


    static public function numEmpleados()
    {
        $tabla = 'empleado';
        $respuesta= Datos::ObtenerEmpleado($tabla);

        $i=0;
        //conocer el numero de registros
        foreach($respuesta as $registro)
        {
            $i=$i+1;
        }
        ?>
        <div class="alert alert-info">
           <b>Numero de empleados:</b> <?php echo $i; ?>    
       </div>
       <?php
       
    }

}

