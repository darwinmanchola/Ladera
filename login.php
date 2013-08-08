<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="lib/css/sigpro.css" rel="stylesheet" type="text/css" />
<style type="text/css"></style>
<link rel="stylesheet" type="text/css" href="lib/jquery-ui/css/start/jquery-ui-1.9.2.custom.css"/>
<script type="text/javascript" src="lib/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<link rel="stylesheet" type="text/css" href="lib/css/sigpro.css"/>
<script>
$(document).ready(function(){
	  
	$("#login").dialog({
			title: "Inicio de Sesion",
			open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); },
			closeOnEscape: false,
			modal:true,
			width: 430,
			minWidth: 400,
		    show: "fold",
		    hide: "scale"

  });
});	
</script><title>Formulario de Inicio de Sesion</title>
</head>

<body>
<div id="login" style="display:none; text-align:right;" >
<form action="" method="post" name="login">
<p>Nombre de Usuario: <input name="Nombre de usuario" type="text" maxlength="20" /></p>
<p>Contraseña: <input name="password" type="text" maxlength="20" /></p>
<p><input name="login" type="submit" value="Enviar" /></p>
</form>

</div>
</body>
</html>