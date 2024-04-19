<?php
if (count($_POST) > 0) {
    require_once "../back/conexao.php";
    //chama a fc nova conexao 
    $conexao = novaConexao();

    try {
        $sql = "INSERT INTO tblusuario 'usuNome , usuSenha , usuEmail , usuPais , usuSexo) VALUES (:n, :r, :c, :e, :s)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':n', $_POST['usuNome']);
        $stmt->bindValue(':r', $_POST['usuSenha']);
        $stmt->bindValue(':c', $_POST['usuEmail']);
        $stmt->bindValue(':e', $_POST['usuPais']);
        $stmt->bindValue(':s', $_POST['usuSexo']);
        $stmt->execute();
        echo "Registro cadastrado com sucesso!";
    } catch (PDOException $e) {
        echo 'Mensagem de erro: ' . $e->getMessage();
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>cadastro</title>
  <link rel="stylesheet" href="../css/style.css">

</head>

<body>

  <!-- partial:index.partial.html -->
  <section>

    <span></span><span></span><span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>

    <div class="signin">
      <div class="content">
        <h2>CADASTRE-SE</h2>
        <div class="form">
        <form method="post" action="login.php">
        <h1></h1>
        
        <div class="inputBox">

        <input type="text" placeholder="Digite o NICK NAME" size="40" require name="usuNome" />
        <br><br>

         </div>
       
         <div class="inputBox">

        <input type="text" placeholder="Digite seu Gmail" size="15" require name="usuEmail" />
        <br><br>
        </div>

        <div class="inputBox">


        <input type="password" placeholder="Digite a sua senha" size="15" require name="usuSenha" />
        <br><br>
        
        </div>
        <div class="inputBox">


        <input type="text" placeholder="Digite o seu pais" size="40" require name="usuPais" />
        <br><br>
        
        </div>
        <div class="inputBox">


        <input type="text" placeholder="Digite o seu sexo" size="40" require name="usuSexo" />
        <br><br>
        



        
        <div class="links">
     
            <a class="pb" href="login.php">Fazer Login</a> 
          </div><br>
          <div class="inputBox">
          <form action="login.php">
    <input type="submit" value="cadastrar-se" />
</form>
          </div>
    </form>
        </div>
      </div>
    </div>
    </form>
  </section>
  <!-- partial -->

</body>

</html>