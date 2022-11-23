<?php

    include "includes/conecta.php";

    $id = "";
    $titulo = "";
    $autor = "";
    $editora = "";
    $dat = "";
    $genero = "";

    //se foi enviado ID via GET- se eh edição de livro
    if(isset($_GET['id'])){
        //obtém valor enviado via get 
        $id = $_GET['id'];

        $sql = "SELECT * FROM livros WHERE id = $id";
		//Envia a consulta para obter dados do paciente atual
		$res = mysqli_query($conn, $sql);
		//Armazena os dados obtidos
		$row = mysqli_fetch_assoc($res);
		
        $id = $row['id'];
		$titulo = $row['titulo'];
		$autor = $row['autor'];
		$editora = $row['editora'];
		$dat = $row['dat'];
		$genero = $row['genero'];
    }
?>


<!DOCTYPE html>
 <html> 

    <head> 

        <title> Cadastro  </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link href="css/estilo.css" rel="stylesheet">
    </head> 

    <body>
        <header>
            <h1> cadastre seu livrolivre </h1><br/>
        </header>

        <section>
            <nav>
              <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="listalivros.php">Livros disponivéis </a></li>
                <li><a href="cadlivros.php">Espreste seu livro :)</a></li>
                <li><a href="cadusuarios.php">Se Cadastre! </a></li>   
                <li><a href="index.php">Login</a></li>    
              </ul>
            </nav>
     
            <article>
            <form action="recebelivro.php" method="post">

                <input type="hidden" name="id" value="<?php echo $id; ?>" />

                <label for="titulo"> Título do livro</label>
                <input type="text" name="titulo" value="<?php echo $titulo; ?>"/> 
                
                <label for="autor">Autor</label>
                <input type="text" name="autor" value="<?php echo $autor; ?>"/> 

                <label for="editora">Editora</label>
                <input type="text" name="editora" value="<?php echo $editora; ?>"> 

                <label for="dat"> Data de lançamento</label>
                <input type="date" name="dat" value="<?php echo $dat; ?>"/> 

                <label for="genero"> Gênero</label>
                <select name="genero">

                    <option> Terror </option>
                    <option> Romance </option>
                    <option> Auto-ajuda </option>
                    <option> Ficção </option>
                    <option> Culinária </option>
                    <option> Biografia </option>
                    <option> Outro </option>

                </select>
                <input type="submit">



            </form>
            </article>
        </section> 

    </body>  


    <footer>
         <p>Footer</p>
    </footer>
   
 </html>
