<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <STyle>
        td{
            border:1px dotted #ff0000;
        }
    </STyle>
</head>
<body>
<form action="<?php echo $_SERVER ['PHP_SELF'];?>" method="post">
    <table width="50%" border="0" align="center">
        <tr>
            <td class="primera_fila">Nombre</td>
            <td class="primera_fila">Id</td>
            <td class="primera_fila">Apellido</td>
            <td class="primera_fila">Dirección</td>
            <td class="sin"> &nbsp;</td>
            <td class="sin"> &nbsp;</td>
            <td class="sin"> &nbsp;</td>
        </tr >
        <?php
        
        foreach($matrizUsuarios as $usuario):
        
        ?>
        <tr>
            <td><?php echo $usuario['id'] ?></td>
            <td><?php echo $usuario['nombre'] ?></td>
            <td><?php echo $usuario['apellido'] ?></td>
            <td><?php echo $usuario['direccion'] ?></td >

            <td class="bot"><a href="borrar.php?Id=<?php echo $usuario['id'] ?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
            <td class="bot"><a href="editar.php?Id=<?php echo $usuario['id'] ?> & nom=<?php echo $usuario['nombre'] ?> & ape=<?php echo $usuario['apellido'] ?> & dir=<?php echo $usuario['direccion'] ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>

        </tr>
        
        <?php
        
        endforeach;

        ?>

        <tr>
            <td></td>
            <td><input type='text' name='Nom' size='10' class='centrado'></td>
            <td><input type='text' name='Ape' size='10' class='centrado'></td>
            <td><input type='text' name='Dir' size='10' class='centrado'></td>
            <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
        </tr>
        <tr>
            <td>
            <?php
            //------------PAGINACIÓN
                for($i=1; $i<=$total_paginas; $i++){
                    echo " <a href='?pagina=" . $i . "'> " . $i . "</a> ";

                }
            ?>
            </td>
        </tr>
    </table>
</form>
</body>
</html>