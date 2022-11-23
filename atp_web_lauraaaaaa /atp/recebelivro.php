<?php 

    include "includes/conecta.php";
   
    $id = $_POST["id"];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $dat = $_POST['dat'];
    $genero = $_POST['genero'];
    
    //comando sql - monta para inserir os dados do formulario do mysqlw
    $sql = "INSERT INTO livros (titulo, autor, editora, dat, genero) 
                VALUES 
            ('$titulo', '$autor', '$editora' , '$dat' , '$genero')";

    //Envia o codigo sql para o mysql
    //Envia código SQL para o MySQL
    $res = mysqli_query($conn, $sql);
	
    if(empty($id)){

        //Se inseriu com sucesso
        if($res){
            //Redireciona usuário para a listagem
            header("Location: listalivros.php");
        }
        else{
            echo "ERRO AO INSERIR!";
        }
    }
	else{
		
		$sql = "UPDATE livros SET
					titulo = '$titulo',
					autor = '$autor',
					editora = '$editora',
					dat = '$dat',
					genero = '$genero'
				WHERE
					id = $id";
					
		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);
		
		//Se atualizou com sucesso
		if($res){
			//Redireciona usuário para a listagem
			header("Location: listalivros.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
		
	}







    //echo "DADOS ENVIADOS VIA POST <br>";
    //var_dump($_POST);

   /*
    echo "Título " . $_POST ["titulo"] . "<br>";
    echo "Autor: " . $_POST ["autor"] . "<br>";
    echo "Editora: " . $_POST ["editora"] . "<br>";
    echo "Data de lançamento: " . $_POST ["dat"] . "<br>";
    echo "Gênero: " . $_POST ["genero"] . "<br>";
  */
?>