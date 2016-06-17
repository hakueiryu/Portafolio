<?php
    session_start();
    if(@$_SESSION["usuario"]=="A")
    {
?>
<?php
$codigo=$_GET['cod'];
require("conexion.php");
$conexion=conectar();

$sql="select * from proyecto_cgec where codigo='$codigo'";
$ok=mysql_query($sql,$conexion);
$cliente=mysql_fetch_assoc($ok);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Editar Proyecto</title>
<link rel="stylesheet" type="text/css" href="../css/estilo_n2.css">
<link rel="stylesheet" type="text/css" href="../css/estilo_formulario.css">
</head>
<body>
<form  method="POST" action="modificar_proyecto_cgec.php">
<p class="note">Los campos con <span class="red">*</span> son requeridos.</p>
<div align="center">
    <fieldset>
        <legend>
            <b>Datos del Proyecto a Editar.</b>
        </legend>
                <table>
                    <tbody>
                            <tr>    
                            <td>Nº</td>
                            <td><input name="nro" id="nro" type="text" size="1px" readonly value="<?php echo $cliente['nro'] ?>"></td>

            
                            <td><label for="codigo">Codigo:</label></td>
                            <td><input name="codigo" type="text" readonly maxlength="30" placeholder="xxxxxXXXXxxxxx" required autofocus value="<?php echo $cliente['codigo'] ?>"></td>


                            <td><label for="nombre"><span class="red">*</span>Nombre:</label></td>
                            <td><input name="nombre" type="text" maxlength="100" placeholder="Acueducto rural" required autofocus value="<?php echo $cliente['nombre'] ?>"></td>
                            </tr>
<tr>
            <td>Fecha de Inicio:</td>

            <td colspan="2">
            <?php

            /*Este metodo se utiliza para mostrar el contenido de los select, se utiliza la misma para los demas select */

            echo "<select name='diai' id='diai' required>";
            echo"<option>Dia</option>";
            
            if ($cliente['diai']==0) 

            {
                echo"<option value='0' selected>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==1) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1' selected>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==2) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2' selected>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }                                   
            if ($cliente['diai']==3) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3' selected>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==4) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4' selected>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==5) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5' selected>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==6) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6' selected>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==7) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7' selected>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==8) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8' selected>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==9) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1' >01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9' selected>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==10) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1' >01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10' selected>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==11) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11' selected>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==12) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12' selected>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==13) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13' selected>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==14) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14' selected>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==15) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15' selected>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==16) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16' selected>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==17) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17' selected>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==18) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18' selected>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==19) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19' selected>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==20) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20' selected>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==21) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21' selected>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==22) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22' selected>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==23) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23' selected>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==24) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24' selected>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==25) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25' selected>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==26) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26' selected>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==27) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27' selected>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==28) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28' selected>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==29) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29' selected>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==30) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30' selected>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diai']==31) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31' selected>31</option>";

            }
            echo"</select>";
            ?>

            <?php

            echo"<select name='mesi' id='mesi' required>";      
            echo"<option>Mes</option>";

            if ($cliente['mesi']=="Vacio")
            {
            
                echo"<option value='Vacio' selected>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }

           if ($cliente['mesi']=="Enero")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero' selected>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Febrero")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero' selected>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Marzo")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo' selected>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Abril")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril' selected>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Abril")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril' selected>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Mayo")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo' selected>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Junio")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio' selected>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Julio")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio' selected>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Agosto")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto' selected>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Septiembre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre' selected>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Octubre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre' selected>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Noviembre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre' selected>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesi']=="Diciembre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre' selected>Diciembre</option>";               
            }

              echo "</select>";
              ?>

        <?php

        echo "<select name='anioi' id='anioi'>";
        echo"<option>Ao</option>";
        
       
        if ($cliente['anioi']==0)
            {
            echo"<option value='0' selected>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
        if ($cliente['anioi']==2013)
            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013' selected>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioi']==2014)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014' selected>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioi']==2015)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015' selected>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioi']==2016)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016' selected>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioi']==2017)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017' selected>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioi']==2018)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018' selected>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioi']==2019)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019' selected>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioi']==2020)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020' selected>2020</option>";
            }
            echo"</select>";
            ?>
        </td>
        </tr>

        <tr>
            <td>Fecha de Culminación:</td>

            <td colspan="2">
            <?php

            echo "<select name='diac' id='diac' required>";
            echo"<option>Dia</option>";
            
            if ($cliente['diac']==0) 

            {
                echo"<option value='0' selected>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==1) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1' selected>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==2) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2' selected>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }                                   
            if ($cliente['diac']==3) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3' selected>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==4) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4' selected>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==5) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5' selected>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==6) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6' selected>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==7) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7' selected>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==8) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8' selected>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==9) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1' >01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9' selected>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==10) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1' >01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10' selected>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==11) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11' selected>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==12) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12' selected>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==13) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13' selected>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==14) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14' selected>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==15) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15' selected>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==16) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16' selected>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==17) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17' selected>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==18) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18' selected>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==19) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19' selected>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==20) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20' selected>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==21) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21' selected>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==22) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22' selected>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==23) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23' selected>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==24) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24' selected>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==25) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25' selected>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==26) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26' selected>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==27) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27' selected>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==28) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28' selected>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==29) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29' selected>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==30) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30' selected>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diac']==31) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31' selected>31</option>";

            }
            echo"</select>";
            ?>

            <?php

            echo"<select name='mesc' id='mesc' required>";      
            echo"<option>Mes</option>";

            if ($cliente['mesc']=="Vacio")
            {
            
                echo"<option value='Vacio' selected>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }

           if ($cliente['mesc']=="Enero")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero' selected>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Febrero")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero' selected>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Marzo")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo' selected>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Abril")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril' selected>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Abril")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril' selected>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Mayo")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo' selected>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Junio")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio' selected>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Julio")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio' selected>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Agosto")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto' selected>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Septiembre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre' selected>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Octubre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre' selected>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Noviembre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre' selected>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesc']=="Diciembre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre' selected>Diciembre</option>";               
            }

              echo "</select>";
              ?>

        <?php

        echo "<select name='anioc' id='anioc'>";
        echo"<option>Ao</option>";
        
       
        if ($cliente['anioc']==0)
            {
            echo"<option value='0' selected>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
        if ($cliente['anioc']==2013)
            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013' selected>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioc']==2014)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014' selected>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioc']==2015)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015' selected>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioc']==2016)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016' selected>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioc']==2017)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017' selected>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioc']==2018)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018' selected>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioc']==2019)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019' selected>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioc']==2020)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020' selected>2020</option>";
            }
            echo"</select>";
            ?>
        </td>
        </tr>


                            

                            <tr>
                            <td>Existencia de Valla:</td>
                            <td><input type="radio" name="valla" value="<?php echo $cliente['valla'] ?>">
                            Sí
                              <input type="radio" name="valla" value="<?php echo $cliente['valla'] ?>">No</td>
                            </tr>

                            <tr>
                            <td><label for="descripcion">Descripción:</label></td>
                            <td width="45" heigth="300"><input name="descripcion" maxlength="400"  placeholder="Se esta construyendo una vialidad" value="<?php echo $cliente['descripcion'] ?>"></input></td>
                            </tr>

                            <tr>
                            <td><label for="ente"><span class="red">*</span> Ente Responsable:</label></td>
                            <td><input name="ente" type="text" maxlength="50" placeholder="Gobernacin, Alcaldia, Ministerio" value="<?php echo $cliente['ente'] ?>"></td>

                            </tr>

                            <tr>
                            <td><label for="empresa">Empresa Ejecutora:</label></td>
                            <td><input name="empresa" type="text" maxlength="50" placeholder="COCA COLA" value="<?php echo $cliente['empresa'] ?>"></td>
            
                            <td><label for="rif">Rif:</label></td>
                            <td><input name="rif" type="text" maxlength="30" placeholder="j-12.556.899.0" value="<?php echo $cliente['rif'] ?>"></td>
                            </tr>

                            <tr>
                            <td><label for="ingenieror">Ing. Residente:</label></td>
                            <td><input name="ingenieror" type="text" maxlength="30" placeholder="Jessica Redfox" value="<?php echo $cliente['ingenieror'] ?>"></td>
            
                            <td><label for="civr">C.I.V.:</label></td>
                            <td><input name="civr" type="text" maxlength="20" placeholder="x-xxxxxxxxxx" value="<?php echo $cliente['civr'] ?>"></td>
                            </tr>

                            <tr>
                            <td><label for="ingenieroi">Ing. Inspector:</label></td>
                            <td><input name="ingenieroi" type="text" maxlength="30" placeholder="Franklin Mrquez" value="<?php echo $cliente['ingenieroi'] ?>"></td>

                            <td><label for="civi">C.I.V.:</label></td>
                            <td><input name="civi" type="text" maxlength="20" placeholder="x-xxxxxxxxxx" value="<?php echo $cliente['civi'] ?>"></td>
                            </tr>
                    </tbody>
                </table>
                </div>
    </fieldset>

<div align="center">
    <fieldset>
        <legend>
            <b>Datos de la Inspección a Editar.</b>
        </legend>
            <table>
                <tbody>
                    <tr>
            <td width="155"><label for="inspeccion">Inspección N:</label></td>
            <td width="187"><input name="inspeccion" type="text" maxlength="5" placeholder="00000" size="1px" value="<?php echo $cliente['inspeccion'] ?>"></td>
            <td width="154"><label for="avance">Avance Fisíco:</label></td>
            <td width="184"><input name="avance" size="1px" type="text" maxlength="5" placeholder="00000" value="<?php echo $cliente['avance'] ?>">%</td>
                    </tr>
                <tr>
            <td>Estatus:</td> 
            <td>
            <?php

            echo "<select name='estatus' id='estatus' required>";
            echo "<option>Seleccione...</option>";
				if ($cliente['estatus']=="No iniciado") 
                {
					echo"<option value='No iniciado' selected>No iniciado</option>";
                    echo"<option value='Sin Iniciar'>Sin Iniciar</option>";
                    echo"<option value='En Ejecución'>En ejecución</option>";
                    echo"<option value='Paralizado'>Paralizado</option>";
                    echo"<option value='Culminado'>Culminado</option>";
                }
                if ($cliente['estatus']=="Sin Iniciar") 
                {
					echo"<option value='No iniciado'>No iniciado</option>";
                    echo"<option value='Sin Iniciar' selected>Sin Iniciar</option>";
                    echo"<option value='En Ejecución'>En ejecución</option>";
                    echo"<option value='Paralizado'>Paralizado</option>";
                    echo"<option value='Culminado'>Culminado</option>";
                }

            if ($cliente['estatus']=="En Ejecución") 
                {
					echo"<option value='No iniciado'>No iniciado</option>";
                    echo"<option value='Sin Iniciar' >Sin Iniciar</option>";
                    echo"<option value='En Ejecución' selected>En ejecución</option>";
                    echo"<option value='Paralizado'>Paralizado</option>";
                    echo"<option value='Culminado'>Culminado</option>";

                }
                if ($cliente['estatus']=="Paralizado") 
                {
					echo"<option value='No iniciado'>No iniciado</option>";
                    echo"<option value='Sin Iniciar' >Sin Iniciar</option>";
                    echo"<option value='En Ejecución'>En ejecución</option>";
                    echo"<option value='Paralizado' selected>Paralizado</option>";
                    echo"<option value='Culminado'>Culminado</option>";

                }
                if ($cliente['estatus']=="Culminado") 
                {
					echo"<option value='No iniciado'>No iniciado</option>";
                    echo"<option value='Sin Iniciar'>Sin Iniciar</option>";
                    echo"<option value='En Ejecución'>En ejecución</option>";
                    echo"<option value='Paralizado'>Paralizado</option>";
                    echo"<option value='Culminado' selected>Culminado</option>";

                }                               
                echo"</select>";

                ?>

                </td>
                <td><input name="razon" type="text" maxlength="100" placeholder="Por que esta paralizado?"value="<?php echo $cliente['razon'] ?>"></td>
                
                </tr>
     <tr>
     <td>Fecha de Inspección:</td>

            <td colspan="2">
            <?php

            echo "<select name='diains' id='diains' required>";
            echo"<option>Dia</option>";
            
             if ($cliente['diains']==0) 

            {
                echo"<option value='0' selected>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==1) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1' selected>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==2) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2' selected>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }                                   
            if ($cliente['diains']==3) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3' selected>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==4) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4' selected>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==5) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5' selected>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==6) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6' selected>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==7) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7' selected>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==8) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8' selected>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==9) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1' >01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9' selected>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==10) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1' >01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10' selected>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==11) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11' selected>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==12) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12' selected>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==13) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13' selected>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==14) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14' selected>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==15) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15' selected>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==16) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16' selected>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==17) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17' selected>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==18) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18' selected>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==19) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19' selected>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==20) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20' selected>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==21) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21' selected>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==22) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22' selected>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==23) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23' selected>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==24) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24' selected>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==25) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25' selected>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==26) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26' selected>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==27) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27' selected>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==28) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28' selected>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==29) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29' selected>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==30) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30' selected>30</option>";
                echo"<option value='31'>31</option>";

            }
            if ($cliente['diains']==31) 

            {
                echo"<option value='0'>00</option>";
                echo"<option value='1'>01</option>";
                echo"<option value='2'>02</option>";
                echo"<option value='3'>03</option>";
                echo"<option value='4'>04</option>";
                echo"<option value='5'>05</option>";
                echo"<option value='6'>06</option>";
                echo"<option value='7'>07</option>";
                echo"<option value='8'>08</option>";
                echo"<option value='9'>09</option>";
                echo"<option value='10'>10</option>";
                echo"<option value='11'>11</option>";
                echo"<option value='12'>12</option>";
                echo"<option value='13'>13</option>";
                echo"<option value='14'>14</option>";
                echo"<option value='15'>15</option>";
                echo"<option value='16'>16</option>";
                echo"<option value='17'>17</option>";
                echo"<option value='18'>18</option>";
                echo"<option value='19'>19</option>";
                echo"<option value='20'>20</option>";
                echo"<option value='21'>21</option>";
                echo"<option value='22'>22</option>";
                echo"<option value='23'>23</option>";
                echo"<option value='24'>24</option>";
                echo"<option value='25'>25</option>";
                echo"<option value='26'>26</option>";
                echo"<option value='27'>27</option>";
                echo"<option value='28'>28</option>";
                echo"<option value='29'>29</option>";
                echo"<option value='30'>30</option>";
                echo"<option value='31' selected>31</option>";

            }
            echo"</select>";
            ?>

            <?php

            echo"<select name='mesins' id='mesins' required>";      
            echo"<option>Mes</option>";

           if ($cliente['mesins']=="Vacio")
            {
            
                echo"<option value='Vacio' selected>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }

           if ($cliente['mesins']=="Enero")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero' selected>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Febrero")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero' selected>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Marzo")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo' selected>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Abril")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril' selected>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Abril")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril' selected>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Mayo")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo' selected>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Junio")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio' selected>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Julio")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio' selected>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Agosto")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto' selected>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Septiembre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre' selected>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Octubre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre' selected>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Noviembre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre' selected>Noviembre</option>";
                echo" <option value='Diciembre'>Diciembre</option>";                
            }
            if ($cliente['mesins']=="Diciembre")
            {
            
                echo"<option value='Vacio'>Vacio</option>";
                echo"<option value='Enero'>Enero</option>";
                echo"<option value='Febrero'>Febrero</option>";
                echo"<option value='Marzo'>Marzo</option>";
                echo"<option value='Abril'>Abril</option>";
                 echo"<option value='Mayo'>Mayo</option>";
                 echo"<option value='Junio'>Junio</option>";
                echo" <option value='Julio'>Julio</option>";
                echo" <option value='Agosto'>Agosto</option>";
                echo" <option value='Septiembre'>Septiembre</option>";
                echo" <option value='Octubre'>Octubre</option>";
                echo" <option value='Noviembre'>Noviembre</option>";
                echo" <option value='Diciembre' selected>Diciembre</option>";               
            }

              echo "</select>";
              ?>

        <?php

        echo "<select name='anioins' id='anioins'>";
        echo"<option>Ao</option>";
        
        if ($cliente['anioins']==0)
            {
            echo"<option value='0' selected>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
        if ($cliente['anioins']==2013)
            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013' selected>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioins']==2014)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014' selected>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioins']==2015)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015' selected>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioins']==2016)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016' selected>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioins']==2017)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017' selected>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioins']==2018)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018' selected>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioins']==2019)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019' selected>2019</option>";
            echo"<option value='2020'>2020</option>";
            }
            if ($cliente['anioins']==2020)

            {
            echo"<option value='0'>0000</option>";
            echo"<option value='2013'>2013</option>";
            echo"<option value='2014'>2014</option>";
            echo"<option value='2015'>2015</option>";
            echo"<option value='2016'>2016</option>";
            echo"<option value='2017'>2017</option>";
            echo"<option value='2018'>2018</option>";
            echo"<option value='2019'>2019</option>";
            echo"<option value='2020' selected>2020</option>";
            }
            echo"</select>";
            ?>
        </td>
     </tr>
     <tr>
            <td><label for="inspector" >Inspector:</label></td>
            <td><input name="inspector" type="text" maxlength="50" size="25" value="<?php echo $cliente['inspector'] ?>"></td>
            <td>Telefono:</td>
<td>
 <?php
    
    
    echo "<select name='telefi'  id='telefi' required>";
    echo "<option>Seleccione...</option>";

    if($cliente['telefi']==0)
    {
    echo "<option value='0' selected>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }
    if($cliente['telefi']==274)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274' selected>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }
    if($cliente['telefi']==275)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275' selected>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }
    if($cliente['telefi']==276)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276' selected>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }
    if($cliente['telefi']==277)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277' selected>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }
    if($cliente['telefi']==278)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'  selected>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }
                                        
    if($cliente['telefi']==416)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416' selected>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }                                   

if($cliente['telefi']==426)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426' selected>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }

    if($cliente['telefi']==414)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414' selected>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }

    if($cliente['telefi']==424)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424' selected>0424</option>";
    echo "<option value='412'>0412</option>";
    }
                            
    if($cliente['telefi']==412)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412' selected>0412</option>";
    }
     echo "</select>";
    ?>
    
 

            <input name="telefonoi" type="text" maxlength="7" placeholder="7777777" value="<?php echo $cliente['telefonoi'] ?>"/></td>
        </tr>
     <tr>
            <td colspan="5" align="center"><label for="trabajos">Trabajos</label></td>

        </tr>
        <tr>
            <td colspan="5" align="center"><input name="t_ejecutado" type="text" placeholder="Trabajos ejecutados" size="30" maxlength="500" value="<?php echo $cliente['t_ejecutados'] ?>">
           <input name="t_ejecucion" type="text" placeholder="Trabajos en ejecucin" size="30" maxlength="500" value="<?php echo $cliente['t_ejecucion'] ?>">
           <input name="t_ejecutar" type="text" placeholder="Trabajos por ejecutar" size="30" maxlength="500" value="<?php echo $cliente['t_ejecutar'] ?>"></td>
        </tr>
                </tbody>
            </table>
            </div>
    </fieldset>

<div align="center">
    <fieldset>
        <legend>
            <b>Datos del Entrevistado a Editar.</b>
        </legend>
            <table>
                <tbody>
                    <tr>
                        <td><label for="entrevistado">Entrevistado:</label></td>
                        <td><input name="entrevistado" type="text" maxlength="50" placeholder="Sasha Gray" value="<?php echo $cliente['entrevistado'] ?>"></td>

                        <td>Telefono:</td>
            
                    <td>

 <?php
    
    
     echo "<select name='telef'  id='telef' required>";
    echo "<option>Seleccione...</option>";

    if($cliente['telef']==0)
    {
    echo "<option value='0' selected>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }
    if($cliente['telef']==274)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274' selected>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }
    if($cliente['telef']==275)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275' selected>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }
    if($cliente['telef']==276)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276' selected>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }
    if($cliente['telef']==277)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277' selected>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }
        if($cliente['telef']==278)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'  selected>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }                                    
    if($cliente['telef']==416)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416' selected>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }                                   

if($cliente['telef']==426)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426' selected>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }

    if($cliente['telef']==414)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414' selected>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412'>0412</option>";
    }

    if($cliente['telef']==424)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424' selected>0424</option>";
    echo "<option value='412'>0412</option>";
    }
                            
    if($cliente['telef']==412)
    {
    echo "<option value='0'>0000</option>";
    echo "<option value='274'>0274</option>";
    echo "<option value='275'>0275</option>";
    echo "<option value='276'>0276</option>";
    echo "<option value='277'>0277</option>";
    echo "<option value='278'>0278</option>";
    echo "<option value='416'>0416</option>";
    echo "<option value='426'>0426</option>";
    echo "<option value='414'>0414</option>";
    echo "<option value='424'>0424</option>";
    echo "<option value='412' selected>0412</option>";
    }
     echo "</select>";
    ?>
    
 

            <input name="telefono" type="text" maxlength="7" placeholder="7777777" value="<?php echo $cliente['telefono'] ?>"/></td>
        </tr>

        <tr>
            <td><label for="cargo">Cargo Ocupado:</label></td>
            <td><input name="cargo" type="text" maxlength="50" placeholder="Inspector de acueductos" value="<?php echo $cliente['cargo'] ?>"></td>
        </tr>
                </tbody>
            </table>
            </div>
    </fieldset>
        <div align="center">
        <input name="enviar" type="submit" value="Enviar"/><input name="borrar" type="reset" value="Borrar"/>
    </div>
    </table>
    <div align="center">
            <a href="javascript:history.back(1);"><input type="button" name="volver" value="Volver al Listado"></a>
        </div>
    </form>
    </div>
</body>
</html>
<?php
 } else {
    echo "<center><b>Error de acceso: Necesitas iniciar sesion</b></center>";
   }
?>		