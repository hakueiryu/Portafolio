<html>
<head>
	<style type="text/css">
	.form
	{
		background-color: red;
		width: 80%;
		border-radius:10px;
		border: 1px;

	}
	fieldset {
width: 80%; 
background-color:#f6f6f6;  
padding: 6px; 
display: block; 
}</style>
</head>
<body>
	<form class="form">
	<fieldset>
	      <legend>
            <b>Datos de Cuenta</b>
        </legend>
           <div>
               <table>
                   <tbody><tr>
                        <td>
                        
                        <label for="Preapertura_tipo_cuenta">Tipo Cuenta <span class="required">*</span></label>                        </td>
                        <td>
                                                        
                            <select onchange="mostrar_mensaje(this.value);" name="Preapertura[tipo_cuenta]" id="Preapertura_tipo_cuenta">
<option value="">Seleccione</option>
<option value="01">CUENTA DE AHORRO</option>
<option value="02">CUENTA CORRIENTE</option>
<option value="03">CUENTA EN DIVISAS</option>
</select>                                                                </td>
                        <td>
                        </td>
                        <td>
                        </td>
                   </tr>
               </tbody></table>
           </div>
    </fieldset>
</form>
</body>
</html>