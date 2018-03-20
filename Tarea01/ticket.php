<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>++ Ticket ++</title>
    <style type="text/css">
      body{
        font-family: verdana;
        font-size: 8px;
      }
    </style>
  </head>
  <body oncontextmenu="return false">
    <form name="fmrticket" method="post" action="crearticket.php">
      <table width="0%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><img src="imagenes/imagen01.jpg" width="80" height="120"></td>
          <td><strong>Cine<br>
              ETI <br>
              SENATI
          </strong>
          </td>
          <td></td>
        </tr>
        <tr>
          <td colspan="2"><br></td>
        </tr>
        <tr>
          <td>Pelicula: </td>
          <td><select name="cmbpelicula">
            <option>[seleccione]</option>
            <option>Planta Madre</option>
            <option>Mad Max</option>
            <option>Terminator</option>
          </select>
          </td>
        </tr>
        <tr>
          <td>Duracion:</td>
          <td colspan="2">
            <input type="number" name="txtduracion" size="5" placeholder="Ingrese">
            <font size ="1"> Horas</font>
          </td>
        </tr>
        <tr>
          <td>Sala:</td>
          <td colspan="2">
            <select name="cmbsala">
              <option>[Seleccione]</option>
              <?php
                for ($x=0; $x <= 10 ; $x++) {
                  print "<option>Sala".$x."</option>";
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>Horario:</td>
          <td>
            <input type="time" name="txtinicio">
            <font size="1">Inicio</font><br>
            <input type="time" name="txtfin">
            <font size="1">Fin</font>
          </td>
        </tr>
        <tr>
          <td>Precio:</td>
          <td><input type="text" name="txtprecio" placeholder="Ingrese"></td>
        </tr>
        <tr>
          <td>Cant. Butacas:</td>
          <td><input type="number" name="txtcantidad" size="5" placeholder="Ingrese"></td>
        </tr>
        <tr>
          <td colspan="3"><br></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="Grabar">
          </td>
        </tr>
        <tr>
          <td colspan="3"><br></td>
        </tr>
        <tr align="center"><br>
          <td colspan="2">
            <font style="font-weight:bold">GRACIAS POR SU PREFERENCIA</font>
          </td>
        </tr>
        <tr align="center">
          <td colspan="3"><font style="font-weight:bold">Disfrute la Pelicula</font>
        </tr>
      </table>
    </form>

  </body>
</html>
