<? //conexão com acess 


include("conexao.php");

$sql = odbc_exec($con,"SELECT * FROM usuario");


$i=0;
?>
<table border="1">
<tr>
<td>id<td>nome<td>login<td>email<td>senha
<?
while(odbc_fetch_array($sql)) {
    $i++;
  echo  "<tr>";
  echo  '<td>'.$id =odbc_result($sql,'id');
  echo 	'<td>'.$nome=odbc_result($sql,'nome');
  echo	'<td>'.$login=odbc_result($sql,'login');
  echo	'<td>'.$email=odbc_result($sql,'email');
  echo  '<td>'.$senha=odbc_result($sql,'senha');

}
 ?>

<tr>
<a href="form1.php" title="Cadastrar">Cadastrar</a>
</table>











    
   
   




