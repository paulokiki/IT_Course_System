<meta charset="utf-8">

<?php
$rsClientes = listarRegistros($vConn, "customers");
$rsFuncionario = listarRegistros($vConn, "employees")

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="container">
	<form method="post" action="CadastroDados.php">
		<div class="row linhaForm">
			<!-- ------------------------------------------------------------------------------>
		
		<div class="col-lg-6">
		<label>Nome do Cliente</label>
		
		<select name="HTML_nomeCliente" class="form-control">
			<?php
			while($tblCliente = mysqli_fetch_array($rsClientes)){
				?>
				<option><?=$tblCliente[1]. " - EMPRESA - " . $tblCliente[1]?></option>
				
				<?php
			}
			?>
		</select>            
		
		
	</div>
			
			<!-- ------------------------------------------------------------------------------>
		<div class="col-lg-6">
		<label>Nome do Funcionario</label>
		
		<select name="HTML_nomeFuncionario" class="form-control">
			<?php
			while($tblFuncionario = mysqli_fetch_array($rsFuncionario)){
				?>
				<option><?=$tblFuncionario[2] . " " . $tblFuncionario[1]?></option>
				
				<?php
			}
			?>
		</select>
	</div>
		</div>

		<hr style="border: 0;
    height: 2px;
    background-image: linear-gradient(to right, transparent, #CCC, transparent); margin-bottom: 50px; margin-top: 50px">
</hr>
		
		<div class="row linhaForm">
			<div class="col-lg-4">
				<label>Data da Compra</label>
				<input type="date" class="form-control" name="HTML_dataCompra">
			</div>
			<div class="col-lg-4">
			<label>Data do Requerimento</label>
				<input type="date" class="form-control" name="HTML_dataRequerimento">
			</div>
			<div class="col-lg-4">
			<label>Data do Envio</label>
				<input type="date" class="form-control" name="HTML_dataEnvio">
			</div>
		</div>

		<hr style="border: 0;
    height: 2px;
    background-image: linear-gradient(to right, transparent, #CCC, transparent); margin-bottom: 50px; margin-top: 50px">
</hr>
		
		<div class="row linhaForm">
			<div class="col-lg-4">
				
			<label>Tipo de Envio</label>
				<input type="text" class="form-control" name="HTML_tipoEnvio">
			
				
			</div>
			<div class="col-lg-4">
				
			<label>Valor do Frete</label>
				<input type="text" class="form-control" name="HTML_valorFrete">
			
				
			</div>
			
				<div class="col-lg-4">
					<label>ShipName</label>
					<input type="text" class="form-control" name="HTML_shipName">
				</div>

			
		</div>

		<hr style="border: 0;
    height: 2px;
    background-image: linear-gradient(to right, transparent, #CCC, transparent); margin-bottom: 50px; margin-top: 50px">
</hr>

		<div class="row linhaForm">
			<div class="col-lg-12">
				<label>Endereço da Entrega</label>
				<input type="text" class="form-control" name="HTML_enderecoEntrega">
				
			</div>
			

		</div>

		<hr style="border: 0;
    height: 2px;
    background-image: linear-gradient(to right, transparent, #CCC, transparent); margin-bottom: 50px; margin-top: 50px">
</hr>
		<div class="row LinhaForm">
    <div class="col-lg-12">  
        <button type="submit" class="btn btn-dark float-right" style="margin-top:20px">Cadastrar Funcionário</button> 
        <div class="col-lg-12">  
           <button type="reset" class="btn btn-dark float-right" style="margin-top:20px; margin-right:20px">Limpar</button>            
       </div>           
   </div>

</div>
			
</div>




	</form>


	
</div>