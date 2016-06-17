<?php
    session_start();
    if(@$_SESSION["usuario"]=="A")
    {
?>
<?php
require("funciones2.php");
require("conexion.php");
$conexion = conectar();
?>
<!doctype html>
<html>
<head>
<script type="text/javascript">
	function mostrar(select){
    (select.selectedIndex == 3)?
        document.getElementById("text").style.visibility = "visible"
    :
        document.getElementById("text").style.visibility = "hidden"
}
</script>
<meta charset="utf-8">
<title>Registrar Proyecto</title>
<link rel="stylesheet" type="text/css" href="../css/estilo_n2.css">
<link rel="stylesheet" type="text/css" href="../css/estilo_formulario.css">
</head>
<body>
<div class="registro">
	<form id="form1" name="form1" method="post" action="guardar_proyecto_espeaten.php">
	<p class="note">Los campos con <span class="red">*</span> son requeridos.</p>
    <div align="center">
    <fieldset>
          <legend>
            <b>Datos del Proyecto.</b>
        </legend>
               <table>
                   <tbody>
             <tr>   
            <td>Nº</td>
            <td><input name="nro" id="nro" type="text" readonly value="<?php echo nro($conexion) ?>"></td>
            
            <td><label for="codigo"><span class="red">*</span> Codigo:</label></td>
            <td><input name="codigo" type="text" maxlength="30" placeholder="xxxxxXXXXxxxxx" required autofocus></td>
            </tr>
<tr>
     <td><label for="nombre"><span class="red">*</span>  Nombre:</label></td>
            <td><input name="nombre" type="text" maxlength="350" size="40" placeholder="Acueducto rural" required autofocus></td>
</tr>
<tr>
            <td><label for="fechai">Fecha de Inicio:</label></td>
            <td colspan="2"><select name="diai">            <option value="0">Dia</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                </select>

            <select name="mesi">                <option value="Vacio">Mes</option>
                                                <option value="Enero">Enero</option>
                                                <option value="Febrero">Febrero</option>
                                                <option value="Marzo">Marzo</option>
                                                <option value="Abril">Abril</option>
                                                <option value="Mayo">Mayo</option>
                                                <option value="Junio">Junio</option>
                                                <option value="Julio">Julio</option>
                                                <option value="Agosto">Agosto</option>
                                                <option value="Septiembre">Septiembre</option>
                                                <option value="Octubre">Octubre</option>
                                                <option value="Noviembre">Noviembre</option>
                                                <option value="Diciembre">Diciembre</option>
                                                </select>

            <select name="anioi">               <option value="0000">Ao</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                </select></td>
        </tr>

        <tr>
            <td><label for="fechac">Fecha de Culminación:</label></td>
            <td colspan="2"><select name="diac">            <option value="0">Dia</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                </select>

                <select name="mesc">            <option value="Vacio">Mes</option>
                                                <option value="Enero">Enero</option>
                                                <option value="Febrero">Febrero</option>
                                                <option value="Marzo">Marzo</option>
                                                <option value="Abril">Abril</option>
                                                <option value="Mayo">Mayo</option>
                                                <option value="Junio">Junio</option>
                                                <option value="Julio">Julio</option>
                                                <option value="Agosto">Agosto</option>
                                                <option value="Septiembre">Septiembre</option>
                                                <option value="Octubre">Octubre</option>
                                                <option value="Noviembre">Noviembre</option>
                                                <option value="Diciembre">Diciembre</option>
                                                </select>

                <select name="anioc">           <option value="0000">Ao</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                </select></td>
        </tr>

            <tr>

            <td><label for="ente"><span class="red">*</span>  Ente Responsable:</label></td>
            <td><input name="ente" type="text" maxlength="100" placeholder="Gobernacin, Alcaldia, Ministerio" required autofocus size="30"></td>

            <td><label for="fecha">Año de Aprobación:</label></td>
            <td><select name="anio">                    <option value="0000">Ao</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        </select></td>

        
            </tr>

        <tr>
            <td><label for="valla">Existencia de Valla:</label></td>
            <td><input type="radio" name="valla" value="S">
            Sí
                <input type="radio" name="valla" value="No">No</td>

        </tr>

        <tr>
            <td><label for="municipio"> <span class="red">*</span> Municipio:</label></td><td><select name="municipio" required autofocus>
                            
                                                                                                <option>--Seleccione--</option>
                                                                                                <option value="Andrs Bello">Andrs Bello</option>
                                                                                                <option value="Antonio Rmulo Costa">Antonio Rmulo Costa</option>
                                                                                                <option value="Ayacucho">Ayacucho</option>
                                                                                                <option value="Bolvar">Bolvar</option>
                                                                                                <option value="Capacho Nuevo">Capacho Nuevo</option>
                                                                                                <option value="Capacho Viejo">Capacho Viejo</option>
                                                                                                <option value="Crdenas">Crdenas</option>
                                                                                                <option value="Crdoba">Crdoba</option>
                                                                                                <option value="Fernndez Feo">Fernndez Feo</option>
                                                                                                <option value="Francisco de Miranda">Francisco de Miranda</option>
                                                                                                <option value="Garca de Hevia">Garca de Hevia</option>
                                                                                                <option value="Gusimos">Gusimos</option>
                                                                                                <option value="Juregui">Juregui</option>
                                                                                                <option value="Jos Mara Vargas">Jos Mara Vargas</option>
                                                                                                <option value="Junn">Junn</option>
                                                                                                <option value="Libertador">Libertador</option>
                                                                                                <option value="Lobatera">Lobatera</option>
                                                                                                <option value="Michelena">Michelena</option>
                                                                                                <option value="Panamericano">Panamericano</option>
                                                                                                <option value="Pedro Mara Urea">Pedro Mara Urea</option>
                                                                                                <option value="Rafael Urdaneta">Rafael Urdaneta</option>
                                                                                                <option value="Samuel Daro Maldonado">Samuel Daro Maldonado</option>
                                                                                                <option value="San Cristbal">San Cristbal</option>
                                                                                                <option value="San Judas Tadeo">San Judas Tadeo</option>
                                                                                                <option value="Seboruco">Seboruco</option>
                                                                                                <option value="Simn Rodrguez">Simn Rodrguez</option>
                                                                                                <option value="Sucre">Sucre</option>
                                                                                                <option value="Torbes">Torbes</option>
                                                                                                <option value="Uribante">Uribante</option>
                                                                                                </select></td>
            
            <td><label for="parroquia"><span class="red">*</span>Parroquia:</label></td>
            <td><input name="parroquia" type="text" maxlength="50" placeholder="La Concordia" required autofocus></td>

            <td><label for="sector">Sector</label></td>
            <td><input name="sector" type="text" maxlength="50" placeholder="Las Pilas"></td>
        </tr>


            <tr>
            
            <td><label for="descripcion">Descripción:</label></td>
            <td><textarea name="descripcion" maxlength="500" placeholder="Se esta construyendo una vialidad" required autofocus></textarea></td>

            <td><label for="inversion">Inversión:</td>
            <td><input name="inversion" type="text" size="8" maxlength="50" placeholder="5000000,00">Bs</td>
            <td><label for="coordenadas">Coordenadas U.T.M.:</label></td>
            <td colspan="2"><input name="coordnorte" size="10" type="text" maxlength="9" placeholder="Norte"><input name="coordeste" size="10" type="text" maxlength="9" placeholder="Este"></td>

            </tr>

            <tr>
            <td><label for="empresa">Empresa Ejecutora:</label></td>
            <td><input name="empresa" type="text" maxlength="50" placeholder="CORPOINTA"></td>
            
            <td><label for="rif">Rif:</label></td>
            <td><input name="rif" type="text" maxlength="30" placeholder="j-12.556.899.0"></td>
            </tr>

            <tr>
            <td><label for="ingenieror">Ing. Residente:</label></td>
            <td><input name="ingenieror" type="text" maxlength="30" placeholder="Jessica Redfox"></td>
            
            <td><label for="civr">C.I.V.:</label></td>
            <td><input name="civr" type="text" maxlength="20" placeholder="x-xxxxxxxxxx"></td>
            </tr>

            <tr>
            <td><label for="ingenieroi">Ing. Inspector:</label></td>
            <td><input name="ingenieroi" type="text" maxlength="30" placeholder="Franklin Mrquez"></td>

            <td><label for="civi">C.I.V.:</label></td>
            <td><input name="civi" type="text" maxlength="20" placeholder="x-xxxxxxxxxx"></td>
            </tr>

            <tr>
            <td><label for="beneficiados">Beneficiados:</label></td>
            <td><input name="beneficiados" type="text" size="8" maxlength="20" placeholder="5000">Personas</td>
            </tr>

                    </tbody>
               </table>
           </div>
    </fieldset>

    <div align="center">
   <fieldset>
        <legend>
            <b>Datos de La Inspección.</b>
        </legend>
            
                <table>
                    <tbody>
                        <tr>
                            <td width="114"><label for="inspeccion"> Inspección Nº:</label></td>
                            <td width="226"><input name="inspeccion" type="text" maxlength="5" placeholder="00000" size="1px"></td>
                            <td width="118" style="text-align: center;"><label for="avance"> Avance Fisco:</label></td>
                            <td width="222"><input name="avance" type="text" size="1" maxlength="5" placeholder="00000">%</td>
                        </tr>
                        <tr>
                            <td width="114"><label for="estatus">Estatus:</label></td> <td width="226"><select name="estatus" onchange="mostrar(this)" required autofocus>  <option value="No iniciado">--Seleccione--</option>
                                                                                                            <option value="Sin Iniciar">Sin Iniciar</option>
                                                                                                            <option value="En Ejecución">En ejecución</option>
                                                                                                            <option value="Paralizado">Paralizado</option>
                                                                                                            <option value="Culminado">Culminado</option>
                                                                                                            </select>
                                                                                                            <input type="text" maxlength="100" name="razon" id="text" style="visibility:hidden" placeholder="Porque esta Paralizado?"></td>


                        </tr>

                        <tr>
            <td><label for="fechains">  Fecha de Inspección:</label></td>
            <td colspan="3"><select name="diains">          <option value="0">Dia</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                </select>

            <select name="mesins">              <option value="Vacio">Mes</option>
                                                <option value="Enero">Enero</option>
                                                <option value="Febrero">Febrero</option>
                                                <option value="Marzo">Marzo</option>
                                                <option value="Abril">Abril</option>
                                                <option value="Mayo">Mayo</option>
                                                <option value="Junio">Junio</option>
                                                <option value="Julio">Julio</option>
                                                <option value="Agosto">Agosto</option>
                                                <option value="Septiembre">Septiembre</option>
                                                <option value="Octubre">Octubre</option>
                                                <option value="Noviembre">Noviembre</option>
                                                <option value="Diciembre">Diciembre</option>
                                                </select>

            <select name="anioins">             <option value="0000">Ao</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                </select>
                                                </td>

        </tr>
                        <tr>
                                <td><label for="inspector" >Inspector:</label></td>
                                <td><input name="inspector" type="text" maxlength="50" placeholder="Liliana Ontiberos" size="25"></td>

                                <td style="text-align: center;"> <label for="telefi" id="telefi">Telefono:</label> </td> 
                                        <td colspan="2"> 
                                        <select name="telefi">
                                        <option value="0000">selecc</option>
                                        <option value="274">0274</option>
                                        <option value="275">0275</option>
                                        <option value="276">0276</option>
                                        <option value="277">0277</option>
                                        <option value="278">0278</option>
                                        <option value="416">0416</option> 
                                        <option value="426">0426</option>
                                        <option value="414">0414</option>
                                        <option value="424">0424</option>
                                        <option value="412">0412</option>
                                        
                                        </select>
                                        <input name="telefonoi" type="text" maxlength="7" placeholder="7777777" size="18" /></td> 
                                </tr>

        <tr>
            <td colspan="5" align="center"><label for="trabajos">Trabajos</label></td>

        </tr>
        <tr>
            <td colspan="5">
        <input name="t_ejecutado" type="text" placeholder="Trabajos ejecutados" size="30" maxlength="500">
        <input name="t_ejecucion" type="text" placeholder="Trabajos en ejecucin" size="30" maxlength="500">
        <input name="t_ejecutar" type="text" placeholder="Trabajos por ejecutar" size="30" maxlength="500"></td>
        </tr>
        
                    </tbody>
                </table>
            </div>
    </fieldset>

        <div align="center">
 <fieldset>
            <legend>
                <b>Datos del Entrevistado.</b>
            </legend>
                
                    <table>
                        <tbody>
                                <tr>
                                <td><label for="entrevistado"><span class="red">*</span>  Entrevistado:</label></td>
                                <td><input name="entrevistado" type="text" maxlength="50" placeholder="Sarah Connor" required autofocus size="30"></td>

                                <td> <label for="telef" id="telef">Telefono:</label> </td> <td colspan="2"> <select name="telef">
                                         <option value="0000">selecc</option>
                                        <option value="274">0274</option>
                                        <option value="275">0275</option>
                                        <option value="276">0276</option>
                                        <option value="277">0277</option>
                                        <option value="278">0278</option>
                                        <option value="416">0416</option> 
                                        <option value="426">0426</option>
                                        <option value="414">0414</option>
                                        <option value="424">0424</option>
                                        <option value="412">0412</option>
                                        
                                        </select>
                                        <input name="telefono" type="text" maxlength="7" placeholder="xxxxxxx" /></td> 
                                </tr>


                                <tr>
                                <td><label for="cargo">Cargo Ocupado:</label></td>
                                <td><input name="cargo" type="text" maxlength="50" placeholder="Inspector de acueductos" size="30"></td>
                                </tr>
                        </tbody>
                    </table>
                 </div>
    </fieldset>

    <div align="center">
        <input name="enviar" type="submit" value="Enviar"/><input name="borrar" type="reset" value="Borrar"/>
    </div>
    </form>
</body>
</html>
<?php
 } else {
    echo "<center><b>Error de acceso: Necesitas iniciar sesion</b></center>";
   }
?>