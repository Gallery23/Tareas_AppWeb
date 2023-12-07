<?php
require_once('cls_conexion.model.php');
class Clase_Usuarios
{
    public function todos()
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT * FROM `usuarios`";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function uno($UsuarioId)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT * FROM `usuarios` WHERE UsuarioId=$UsuarioId";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function insertar($Cedula, $Nombres, $Apellidos, $Telefono, $Correo, $Contrasenia, $Rol)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "INSERT INTO `usuarios`(`Cedula`, `Nombres`, `Apellidos`, `Telefono`, `Correo`, `Contrasenia`, `Rol`) VALUES('$Cedula','$Nombres','$Apellidos','$Telefono','$Correo','$Contrasenia','$Rol')";
            //$cadena =sprintf("INSERT INTO `Usuarios`(`Cedula`, `Nombres`, `Apellidos`, `Telefono`, `Correo`, `Contrasenia`, `Rol`) VALUES('%s','%s','%s','%s','%s','%s','%s'",mysqli_real_escape_string($con,$Cedula));
            $result = mysqli_query($con, $cadena);
            return 'ok';
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function actualizar($UsuarioId, $Cedula, $Nombres, $Apellidos, $Telefono, $Correo, $Contrasenia, $Rol)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "UPDATE `usuarios` SET `Cedula`='$Cedula',`Nombres`='$Nombres',`Apellidos`='$Apellidos',`Telefono`='$Telefono',`Correo`='$Correo',`Contrasenia`='$Contrasenia',`Rol`='$Rol' WHERE `UsuarioId`= $UsuarioId";
            $result = mysqli_query($con, $cadena);
            return "ok";
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function eliminar($UsuarioId)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "delete from usuarios where UsuarioId=$UsuarioId";
            $result = mysqli_query($con, $cadena);
            return "ok";
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function actualizar_contrasenia($UsuarioId, $contrasenia)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "UPDATE `usuarios` SET `Contrasenia`='$contrasenia' WHERE `UsuarioId`=$UsuarioId";
            $result = mysqli_query($con, $cadena);
            return "ok";
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }

    public function cedula_repetida($cedula)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT count(*) as cedula_repetida FROM `usuarios` WHERE `Cedula`= '$cedula'";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function verifica_correo($correo)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT count(*) as cedula_repetida FROM `usuarios` WHERE `correo`= '$correo'";
            $result = mysqli_query($con, $cadena);
            return $result;
        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }

    public function login($correo, $contrasenia)
    {
        try {
            $con = new Clase_Conectar_Base_Datos();
            $con = $con->ProcedimientoConectar();
            $cadena = "SELECT `Correo`, `Contrasenia` FROM `usuarios` WHERE `Correo`= '$correo' AND `Contrasenia`= '$contrasenia'";
            $result = mysqli_query($con, $cadena);
            return $result;

        } catch (Throwable $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }

}

