<?php
    session_start();
    if(@$_SESSION["usuario"]=="A")
    {
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="../css/estilo_tablas.css">
</head>
<body>
<?php
require("../php/conexion.php");
?>
<div class="botones">
<p>Para acceder al buscador use el boton.</p>
<a href="../buscadores/buscador-cgec/index.php"><input name="buscador" type="button" value="Buscador"/></a>
</div>
<br>
<center><img src="../imagenes/mapa4.PNG" width="1000px" height="500px" usemap="#Map"></center>
<map name="Map">
  <area shape="poly" title="García de Hevia" coords="194,69,185,74,177,71,171,74,164,74,155,74,150,79,145,84,139,90,139,97,141,102,138,105,137,106,131,113,122,113,120,119,117,124,119,128,115,135,121,140,123,142,126,151,135,158,142,162,138,159,139,151,147,168,145,156,147,172,152,177,152,184,156,189,156,174,158,190,159,193,160,188,162,190,163,193,166,195,169,199,176,200,184,200,187,197,192,197,197,191,202,186,207,181,209,174,206,167,203,160,205,160,210,159,211,156,212,152,213,146,207,138,205,135,206,131,206,126,206,123,204,120,196,114,199,107,199,96,193,88,192,79,190,76" href="../listado_proyectos/I_listado_garcia_hevia_cg.php">
  <area shape="poly" title="Panamericano" coords="278,35,274,36,269,40,264,43,261,44,259,47,255,47,250,53,246,53,242,51,235,52,229,58,217,63,206,67,203,78,202,87,209,93,208,100,210,108,212,112,215,117,219,119,221,110,221,115,218,125,219,128,219,132,224,137,227,140,225,139,226,140,229,144,235,149,228,151,239,155,247,150,248,147,257,145,261,144,264,146,267,147,267,140,270,136,276,132,282,129,286,125,289,122,291,118,291,111,287,102,287,95,288,87,282,80,277,70,277,64,280,57,280,49,278,42,278,38" href="../listado_proyectos/I_listado_cgnamericano_cg.php">
  <area shape="poly" title="Samuel Dario Cordoba" coords="289,43,295,56,289,62,288,72,293,80,298,84,299,81,301,90,306,83,307,89,305,96,305,101,304,107,307,111,305,117,305,120,307,126,313,128,316,130,320,134,324,137,326,131,329,127,335,127,337,127,341,127,352,128,344,123,350,121,352,116,356,109,370,98,363,83,358,76,356,70,351,61,343,60,335,57,328,55,323,53,316,47,312,51,302,51" href="../listado_proyectos/I_listado_samuel_dario_cg.php">
  <area shape="poly" title="Ayacucho" coords="126,154,132,159,137,162,139,165,140,173,142,177,144,184,146,188,147,193,149,199,156,202,161,204,166,206,172,207,182,208,179,212,185,210,190,217,194,220,196,227,201,235,199,245,194,251,179,255,170,254,163,249,155,257,152,252,145,253,137,249,137,239,137,230,132,224,132,218,132,206,135,208,135,200,135,193,129,184,124,175,126,166" href="../listado_proyectos/I_listado_ayacucho_cg.php">
  <area shape="poly" title="Antonio Romulo Costa" coords="203,221,194,211,192,203,198,200,203,196,208,193,212,189,216,184,221,180,227,175,235,185,225,189,220,193,220,202,215,208,212,209,209,213" href="../listado_proyectos/I_listado_antonio_romulo_cg.php">
  <area shape="poly" title="San Judas Tadeo" coords="221,171,218,166,223,160,236,160,244,156,255,149,252,150,259,152,266,153,270,158,272,153,273,146,276,150,280,156,282,162,285,165,295,169,293,177,284,181,282,183,277,187,271,188,261,193,251,189,248,186,243,180,242,175,238,170,234,170" href="../listado_proyectos/I_listado_san_judas_cg.php">
  <area shape="poly" title="Jauregui" coords="279,139,285,137,290,133,296,132,304,134,305,137,311,140,316,144,315,151,317,156,318,163,326,169,316,172,315,178,309,183,309,189,307,196,307,203,309,207,309,213,307,220,306,227,304,232,301,239,301,245,294,245,288,248,285,251,279,249,272,247,275,237,274,230,274,224,271,220,270,215,274,211,273,204,272,195,276,196,282,193,290,191,295,186,299,180,300,174,301,167,299,161,295,158,290,155,287,146" href="../listado_proyectos/I_listado_jauregui_cg.php">
  <area shape="poly" title="Seboruco" coords="237,191,230,193,231,199,230,203,229,206,224,210,220,215,208,226,215,225,219,229,225,226,230,227,236,223,240,229,250,222,247,217,262,210,258,203,248,198,241,194" href="../listado_proyectos/I_listado_seboruco_cg.php">
  <area shape="poly" title="Jose María Vargas" coords="230,236,235,233,243,233,247,236,251,235,252,229,257,225,262,227,264,234,264,240,262,245,261,249,259,255,256,263,251,267,249,274,241,279,230,279,227,274,230,269,225,263,228,263,230,253,231,245,230,238" href="../listado_proyectos/I_listado_jose_maria_cg.php">
  <area shape="poly" title="Michelena" coords="212,235,220,241,215,249,213,256,216,264,213,269,212,274,206,276,208,278,193,278,187,277,179,275,174,270,171,262,177,264,184,264,191,266,195,262,199,259,203,253,205,247" href="../listado_proyectos/I_listado_michelena_cg.php">
  <area shape="poly" title="Lobatera" coords="138,257,147,258,150,260,151,267,157,269,163,270,163,274,167,281,174,285,182,283,205,281,200,287,194,291,189,299,174,299,165,299,156,298,149,295,137,290,127,286,127,280,129,271,135,266" href="../listado_proyectos/I_listado_lobatera_cg.php">
  <area shape="poly" title="Pedro María Ureña" coords="108,251,113,250,117,252,125,258,122,265,118,273,117,280,119,289,112,287,109,297,104,296,96,297,94,289,95,282,81,280,85,276,90,272,99,271,102,266,107,262,109,257" href="../listado_proyectos/I_listado_pedro_maria_cg.php">
  <area shape="poly" title="Simon Rodriguez" coords="335,133,341,133,345,134,346,137,347,142,350,147,346,150,341,154,338,152,337,155,335,163,332,160,330,153,330,146,330,143,333,139" href="../listado_proyectos/I_listado_simon_rodriguez_cg.php">
  <area shape="poly" title="Libertad" coords="142,304,135,298,127,299,120,301,121,308,122,316,125,319,129,322,132,322,133,325,135,329,136,334,135,339,139,340,141,347,143,347,147,351,151,356,156,363,158,359,157,353,155,348,154,341,148,334,147,330,146,325,143,318,142,309" href="../listado_proyectos/I_listado_libertad_cg.php">
  <area shape="poly" title="Cardenas" coords="168,321,173,326,177,329,179,324,172,321" href="../listado_proyectos/I_listado_cardenas_cg.php">
  <area shape="poly" title="Independencia" coords="150,303,157,306,160,308,158,315,159,322,162,327,160,332,155,326,152,319,150,312" href="../listado_proyectos/I_listado_independencia_cg.php">
  <area shape="poly" title="Guasimos" coords="186,304,178,304,174,307,172,311,174,314,183,317,180,318,183,320,187,312,188,308" href="../listado_proyectos/I_listado_guasimos_cg.php">
  <area shape="poly" title="Andrés Bello" coords="235,284,228,287,219,285,213,285,206,289,206,295,197,301,203,306,208,307,213,309,217,312,222,315,222,304,225,299,230,297,230,291" href="../listado_proyectos/I_listado_andres_bello_cg.php">
  <area shape="poly" title="Sucre" coords="278,259,273,259,268,261,264,264,262,270,257,271,254,279,250,286,242,293,240,300,231,305,240,307,246,311,254,310,261,311,265,310,270,314,275,317,277,321,278,324,282,328,289,332,292,335,294,337,296,340,299,337,305,334,312,331,317,327,335,322,325,315,319,316,316,313,309,315,305,311,307,311,293,306,290,307,283,305,278,302,277,299,276,289,278,286,280,283,283,281,285,279,285,272,281,269,278,262" href="../listado_proyectos/I_listado_sucre_cg.php">
  <area shape="poly" title="Francisco de Miranda" coords="282,299,300,302,310,302,313,301,316,304,318,305,323,310,327,311,333,313,336,316,346,315,345,307,352,306,352,297,348,290,340,287,332,286,322,285,315,282,309,274,307,265,303,255,298,253,288,257,292,262,297,262,298,265,299,270,299,273,300,277,300,282,298,284,289,287,284,289,286,294" href="../listado_proyectos/I_listado_francisco_miranda_cg.php">
  <area shape="poly" title="Bolívar" coords="95,305,96,311,95,317,94,319,94,324,93,331,92,337,91,342,91,348,87,351,86,357,90,358,93,364,94,368,94,375,96,378,100,373,105,369,105,365,102,362,102,355,102,351,103,344,105,342,109,340,114,338,117,334,118,329,120,326,116,323,111,318,106,317,104,314,102,308,99,305" href="../listado_proyectos/I_listado_bolivar_cg.php">
  <area shape="poly" title="Junín" coords="124,341,121,343,117,346,117,349,115,354,115,359,120,360,119,366,119,369,117,372,116,376,113,377,108,379,105,382,106,386,108,392,111,396,115,400,115,404,118,407,119,412,119,417,121,423,120,429,119,433,117,439,118,452,119,440,122,435,126,433,129,428,130,420,132,416,133,411,131,406,130,396,129,393,130,383,142,378,136,376,137,368,140,366,148,364,143,356,140,352,136,346,131,346,127,342,127,339" href="../listado_proyectos/I_listado_junin_cg.php">
  <area shape="poly" title="Rafael Urdaneta" coords="86,364,84,376,89,391,91,396,92,401,92,406,92,411,91,416,88,420,87,427,90,429,93,434,94,436,96,441,98,445,98,451,99,461,102,455,106,455,106,449,104,445,104,440,108,435,106,430,110,423,108,417,105,410,103,404,96,398,89,373" href="../listado_proyectos/I_listado_rafael_urdaneta_cg.php">
  <area shape="poly" title="Torbes" coords="179,362,186,369,186,376,185,382,192,384,197,384,203,384,206,386,210,382,215,380,219,383,224,382,243,379,239,372,238,368,225,372,223,375,218,375,215,375,212,373,207,373,202,372,197,371,191,367" href="../listado_proyectos/I_listado_torbes.pa.php">
  <area shape="poly" title="Cordoba" coords="154,376,162,371,165,375,172,377,178,379,170,384,176,390,182,392,189,392,197,393,199,395,206,399,211,402,224,407,230,410,235,413,241,418,227,423,221,425,215,431,209,437,202,440,196,450,190,451,186,452,181,456,174,451,167,452,158,452,154,451,148,450,130,450,123,455,130,443,134,438,137,434,138,431,140,426,141,422,141,419,136,408,147,412,141,400,142,391,147,389,153,388,154,382" href="../listado_proyectos/I_listado_cordoba_cg.php">
  <area shape="poly" title="Fernandez Feo" coords="221,388,218,391,219,396,228,397,231,399,239,400,243,402,245,408,241,411,247,414,251,420,248,423,241,426,240,430,236,431,234,438,227,440,221,443,218,448,212,452,201,455,207,458,210,461,215,464,223,462,230,462,239,462,246,464,250,468,255,472,266,473,278,473,285,465,294,462,299,459,308,457,314,459,320,455,332,450,331,444,328,438,326,435,319,429,324,429,316,421,323,425,331,419,339,418,338,406,336,396,343,393,351,389,354,371,344,378,335,386,324,390,308,384,301,377,296,376,291,370,284,366,278,358,273,366,274,354,262,357,254,364,248,370,254,373,254,379,246,382,245,387,240,386,236,388,228,389,223,390" href="../listado_proyectos/I_listado_fernandez_feo_cg.php">
  <area shape="poly" title="Libertador" coords="351,413,348,403,358,394,362,384,363,372,367,361,371,350,376,344,383,341,392,338,397,336,401,330,409,330,410,330,412,320,418,328,424,329,429,329,436,333,442,331,446,333,454,338,460,340,468,323,466,336,463,342,467,347,470,353,469,361,475,365,474,374,474,381,474,387,475,394,475,399,482,399,487,401,496,404,498,410,504,413,507,421,511,425,535,432,515,433,507,427,504,424,497,422,487,423,481,424,475,420,469,417,461,416,453,417,446,417,437,417,429,413,419,412,408,411,398,411,394,414,387,411,379,411" href="../listado_proyectos/I_listado_libertador_cg.php">
  <area shape="poly" title="Uribante" coords="283,348,287,343,307,344,316,342,323,338,331,336,337,331,344,326,352,322,358,312,367,308,361,306,362,299,362,291,358,285,353,282,345,280,338,280,330,277,323,275,319,268,316,262,313,254,313,247,316,238,319,232,317,226,319,220,323,213,331,206,338,208,344,211,349,216,353,220,358,224,367,227,369,235,373,242,378,247,385,252,385,246,390,250,401,261,397,252,411,271,417,264,427,259,426,255,434,253,439,249,441,243,450,248,447,256,450,261,453,266,457,272,464,273,470,279,470,288,469,296,468,306,468,312,464,317,461,324,454,332,446,329,441,326,440,323,433,322,426,321,420,317,416,311,406,311,406,318,400,320,398,326,390,327,381,331,372,337,362,344,359,352,355,359,348,364,338,372,334,381,322,382,313,378,305,370,296,363,287,358" href="../listado_proyectos/I_listado_uribante_cg.php">
  <area shape="poly" title="San Cristóbal" coords="166,365,172,358,164,347,170,340,172,335,176,334,185,330,186,325,194,326,198,326,200,329,204,331,207,334,212,335,212,341,220,346,228,346,235,353,228,352,238,360,232,362,222,368,217,358,209,360,208,362,199,363,194,362,189,359,187,355,183,354,179,354,177,355,173,359" href="../listado_proyectos/I_listado_sc_cg.php">
  <area shape="poly" title="Cardenas" coords="246,360,252,350,259,349,265,347,269,343,272,338,266,335,259,330,258,324,255,317,247,318,240,321,233,315,233,314,231,320,226,324,221,321,215,317,204,314,198,321,211,323,216,327,223,328,226,339,229,336,232,341,236,343,242,346,244,350" href="../listado_proyectos/I_listado_cardenas_cg.php">
</map>
</html>
<?php
 } else {
    echo "<center><b>Error de acceso: Necesitas iniciar sesion</b></center>";
   }
?>