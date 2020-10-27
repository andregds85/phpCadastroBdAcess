<?
echo 'Nome :  '.$nome=$_POST['nome'];
echo "<br>";
echo	'login : '.$login=$_POST['login'];
echo "<br>";
echo	'Email : '.$email=$_POST['email'];
echo "<br>";
echo  'Senha : '.$senha=$_POST['senha'];
echo "<br>";
echo "<br>";

include("conexao.php");
$dados=odbc_exec($con,"insert into usuario(nome,login, email, senha)
                     values('$nome','$login','$email','$senha')");


                     if($dados){

                     echo  "<font color=red>'.'Cadastro Efetuado com sucesso";
                         }
                         
                     else
                         {
                         
                     echo "<font color=red>'.'Erro ao efetuar o cadastro";
                     
                     }


 ?>
 
 
 
 
 
  <br><br><br>
 
 <a href="form1.php" title="Voltar">Voltar</a>
