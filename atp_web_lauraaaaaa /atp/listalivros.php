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
                <li><a href="listalivros.php">Livros disponivéis</a></li>
                <li><a href="cadlivros.php">Espreste seu livro :)</a></li>
                <li><a href="cadusuarios.php">Se Cadastre! </a></li>   
                <li><a href="index.php">Login</a></li>    
              </ul>
            </nav>
     
            <article>
                
                <article>
		  
          <div>
              <a href="cadlivros.php">Cadastro novos livros</a>
          </div>
    
          <table border="1">
              <tr>
                  <td>ID</td>
                  <td>Titulo</td>
                  <td>Autor</td>
                  <td>Editora</td>
                  <td>Data</td>
                  <td>Gênero</td>
                 
              </tr>
              <?php
              
                  include "includes/conecta.php";
                  
                  //Monta comando SQL para obter todos os pacientes
                  $sql = "SELECT id, titulo, autor, editora, dat, genero FROM livros";
                  
                  //Envia código SQL para o MySQL
                  $res = mysqli_query($conn, $sql);
                  
                  //Se encontrou algum registro
                  if($res){
                      //Percorre os registros encontrados
                      while($row = mysqli_fetch_assoc($res)){
                          
                          echo "<tr>
                                  <td>". $row['id'] ."</td>
                                  <td>". $row['titulo'] ."</td>
                                  <td>". $row['autor'] ."</td>
                                  <td>". $row['editora'] ."</td>
                                  <td>". $row['dat'] ."</td>
                                  <td>". $row['genero'] ."</td>
                                  <td><a href='cadlivros.php?id=". $row['id'] ."'>Editar</a></td>
                                  <td><a href='excluilivros.php?id=". $row['id'] ."'>Excluir</a></td>
                              </tr>";
                          
                      }
                  }
                                  
              ?>
          </table>
            </article>
         </section> 

    </body>  
   
 </html>
