<!DOCTYPE html> 
<html> 
    <head> 
        <title> Livro Livre - Login </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="css/estilo.css" rel="stylesheet">
    </head>


    <body> 

        <header>
            <h1> faça seu login</h1><br/>
        </header>

        <section>
        <nav>
            <form action="login.php" method="post">

                <label for="login">Login</label>
                <input type = "text" name="Login" />

                <label for="senha"> Senha</label>
                <input type="password" name ="senha" />
                <input type ="submit">
            </form>
        <nav>
        </section>

        <?php
			
            //Se foi enviado parâmetro de erro - se não autenticou
            if(isset($_GET['erro'])){
                echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
            }
            
        
        
        ?>


        <a href="inicio.php"> Home</a>
    </body> 

    <footer>
         <p>boa leitura, seja bem vindo!</p>
    </footer>

</html>

