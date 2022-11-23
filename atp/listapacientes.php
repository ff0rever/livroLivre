<?php

	include "includes/topo.php";

?>
	
		<header>
		  <h2>Cadastro de pacientes</h2>
		</header>
		
		<section>
		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
		  
				<div>
					<a href="cadpacientes.php">Cadastra novo paciente</a>
				</div>
		  
				<table border="1">
					<tr>
						<td>ID</td>
						<td>Nome</td>
						<td>CPF</td>
						<td> - </td>
						<td> - </td>
					</tr>
					<?php
					
						include "includes/conecta.php";
						
						//Monta comando SQL para obter todos os pacientes
						$sql = "SELECT titulo, autor, editora, genero FROM livros";
						
						//Envia código SQL para o MySQL
						$res = mysqli_query($conn, $sql);
						
						//Se encontrou algum registro
						if($res){
							//Percorre os registros encontrados
							while($row = mysqli_fetch_assoc($res)){
								
								echo "<tr>
										<td>". $row['titulo'] ."</td>
										<td>". $row['autor'] ."</td>
										<td>". $row['editora'] ."</td>
										<td><a href='cadlivros.php?id=". $row['id'] ."'>Editar</a></td>
										<td><a href='excluilivros.php?id=". $row['id'] ."'>Excluir</a></td>
									</tr>";
								
							}
						}
										
					?>
				</table>
		  </article>
		</section>
<?php

	include "includes/rodape.php";
	
?>
		