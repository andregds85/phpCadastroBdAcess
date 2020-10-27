<HTML>
<HEAD>
<TITLE>Cadastro</TITLE>
<SCRIPT>
<!--
function valida()
{
 if(document.regform.nome.value=="" || document.regform.nome.value.length < 8)
{
alert( "Preencha campo Nome corretamente!" );
regform.nome.focus();
return false;
}
 if(document.regform.login.value=="" || document.regform.login.value.length < 5)
{
alert( "Preencha campo login corretamente!" );
regform.login.focus();
return false;
}
 if(document.regform.email.value=="" || document.regform.email.value.length < 5)
{
alert( "Preencha campo email corretamente!" );
regform.email.focus();
return false;
}

 if(document.regform.senha.value=="" || document.regform.senha.value.length < 5)
{
alert( "Preencha campo senha corretamente!" );
regform.senha.focus();
return false;
}
return true;
}

//-->
</SCRIPT>
</HEAD>
<BODY>
<table>
  <form method="POST" action="cadastra.php" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()"

  <tr><td>Nome : <td><input type="text" name="nome" size="50">
  <tr><td>Login : <td><input type="text" name="login" size="50">
  <tr><td>email : <td><input type="text" name="email" size="50">
  <tr><td>senha :<td><input type="password" name="senha">
  <tr><td><td><input type="submit" value="Enviar">  <br><br>
  
  
  <a href="acess.php" title="Voltar">Voltar</a>

</form>
</BODY>
</HTML>
