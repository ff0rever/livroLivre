<?php

	include "includes/topo.php";

?>
		<header>
		  <h2>Lançamento de exames</h2>
		</header>
		
		<section>
		<?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
			<article>
				<form action="#" method="post">
				
					<label for="paciente">Paciente</label> 
					<select name="paciente">
						<option></option>
						<option>Fulano da Silva</option>
						<option>Beltrano da Silva</option>
					</select>
					
					<label for="medico">Médico solicitante</label> 
					<select name="medico">
						<option></option>
						<option>Fulano da Silva</option>
						<option>Beltrano da Silva</option>
					</select>
					
					<label for="exame">Tipo de exame</label> 
					<select name="exame">
						<option></option>
						<option>Hemoglobina</option>
						<option>Glicemia</option>
					</select>
					
					<label for="exame">Convênio</label>
					<select name="convenio">
						<option></option>
						<option>Unimed</option>
						<option>Amil</option>
					</select>
					
					<label for="dtexame">Data do exame</label>
					<input type="date" name="dtexame" />
					
					<label for="resultado">Resultado</label>
					<input type="text" name="resultado" />

					<input type="submit">
		
				</form>
				<a href="inicio.html">Voltar</a>
			</article>
		</section>

<?php

	include "includes/rodape.php";
	
?>