<meta charset="utf-8">

<?php
$rsRegion = listarRegistros($vConn, "region");

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
	
	<form action="CadastroDados.php" method="post">
		<div class="row LinhaForm">
			<div class="col-lg-6">
				<label>Company Name </label>
				<input type="text" name="HTML_companyName" class="form-control">
			</div>
			<div class="col-lg-6">
				<label>Contacty Name</label>
				<input type="text" name="HTML_contactName" class="form-control">
			</div>
		</div>

		<hr class="linhaSeparador"></hr>

		<div class="row LinhaForm">
			<div class="col-lg-12">
				<label>Contact Title </label>
				<input type="text" name="HTML_contactTitle" class="form-control">
			</div>
			
		</div>


		<hr class="linhaSeparador"></hr>

		<div class="row LinhaForm">
			<div class="col-lg-5">
				<label>Address </label>
				<input type="text" name="HTML_address" class="form-control">
			</div>
			<div class="col-lg-4">
				<label>City </label>
				<input type="text" name="HTML_city" class="form-control">
			</div>

			<div class="col-lg-3">
				<label>Region</label>

				<select name="HTML_region" class="form-control">
					<?php
					while($tblRegion = mysqli_fetch_array($rsRegion)){
						?>
						<option><?=$tblRegion[1]?></option>

						<?php
					}
					?>
				</select>            


			</div> 
		</div>
		<div class="row">

			<div class="col-lg-5">
				<label>Country: </label>
				<select name="HTML_country" class="form-control">
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
				</select>
			</div>

			<div class="col-lg-7">
				<label>Postal Code </label>
				<input type="text" name="HTML_postaCode" class="form-control">
			</div>
		</div>

		<hr class="linhaSeparador"></hr>

		<div class="row LinhaForm">
			<div class="col-lg-3">
				<label>Phone </label>
				<input type="text" name="HTML_phone" class="form-control">
			</div>
			<div class="col-lg-5">
				<label>E-mail/Fax: </label>
				<input type="text" name="HTML_fax" class="form-control">
			</div>
			<div class="col-lg-4">
				<label>Home Page: </label>
				<input type="text" name="HTML_homePage" class="form-control">
			</div>
		</div>
		<div class="row LinhaForm">
			<div class="col-lg-12">  
				<button type="submit" class="btn btn-dark float-right" style="margin-top:20px">Register Suppliers</button> 
				<div class="col-lg-12">  
					<button type="reset" class="btn btn-dark float-right" style="margin-top:20px; margin-right:20px">Reset</button>            
				</div>           
			</div>

		</div>


	</form>



</div>