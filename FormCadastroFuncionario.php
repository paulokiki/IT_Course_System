
<?php
$rsRegion = listarRegistros($vConn, "region");
$rsCountry = listarRegistros($vConn, "territories");

?>


<meta charset="utf-8">
<!-- Referencia ao Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<div class="container">
    <form action="CadastroDados.php" method="post">
        <div class="row LinhaForm">

            <div class="col-lg-3">
                <label>First Name </label>
                <input type="text" name="HTML_firstName" class="form-control">
            </div>
            <div class="col-lg-6">
                <label>Last Name</label>
                <input type="text" name="HTML_lastName" class="form-control">
            </div>

            <div class="col-lg-3">
                <label>Birth Date</label>
                <input type="date" name="HTML_birthDate" class="form-control">

            </div>
        </div>

        <div class="row LinhaForm">
            <div class="col-lg-12">
                <label>Home Phone: </label>
                <input type="text" name="HTML_homePhone" class="form-control">
            </div>
           
        </div>
        <!-- ---------------------------------------------------------------->
        <div class="row">
            <input type="file" name="HTML_photo" class="col-lg-12" accept="img/png, img/jpge" style="margin-top: 30px">
        </div>


        

        <!-- ---------------------------------------------------------------->


        <hr style="border: 0;
        height: 2px;
        background-image: linear-gradient(to right, transparent, #CCC, transparent); margin-bottom: 50px; margin-top: 50px">
    </hr>

    <div class="row LinhaForm">
        <div class="col-lg-4">
            <label>Address: </label>
            <input type="text" name="HTML_address" class="form-control">
        </div>
        <div class="col-lg-4">
            <label>City: </label>
            <input type="text" name="HTML_city" class="form-control">
        </div>
        <div class="col-lg-4">
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

    <div class="row LinhaForm">


<div class="col-lg-4">
            <label>Country</label>
            
            <select name="HTML_Country" class="form-control">
                <?php
                while($tblCountry = mysqli_fetch_array($rsCountry)){
                ?>
                    <option><?=$tblCountry[1]?></option>

                <?php } ?>
            </select>            
            

        </div> 




        
        <div class="col-lg-4">
            <label>Postal Code: </label>
            <input type="text" name="HTML_postalCode" class="form-control" onkeypress="$(this).mask('00000-000')">
            
        </div>
    </div>

    <hr style="border: 0;
    height: 2px;
    background-image: linear-gradient(to right, transparent, #CCC, transparent); margin-bottom: 50px; margin-top: 50px">
</hr>

<div class="row LinhaForm">
    <div class="col-lg-6">
        <label>Title</label>
        <input type="text" name="HTML_title" class="form-control">
    </div>
    <div class="col-lg-3">
        <label>Salary</label>

        
        
        <input type="text"class="form-control" name="HTML_salary" id="valor" onkeyup="formatarMoeda();" />

    </div>
    <div class="col-lg-3">
        <label>Hire Date</label>
        <input type="date" name="HTML_hireDate" class="form-control">

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <label>Note</label>
        <textarea class="form-control"rows="8" name="HTML_note" placeholder="Digite aqui alguma observação sobre o funcionário"></textarea>
    </div>
</div>

<div class="row LinhaForm">
    <div class="col-lg-12">  
        <button type="submit" class="btn btn-dark float-right" style="margin-top:20px">Cadastrar Funcionário</button> 
        <div class="col-lg-12">  
           <button type="reset" class="btn btn-dark float-right" style="margin-top:20px; margin-right:20px">Limpar</button>            
       </div>           
   </div>

</div>


</form>


</div>

<script type="text/javascript">
    
    function formatarMoeda() {
  var elemento = document.getElementById('valor');
  var valor = elemento.value;
  
  valor = valor + '';
  valor = parseInt(valor.replace(/[\D]+/g,''));
  valor = valor + '';
  valor = valor.replace(/([0-9]{2})$/g, ",$1");

  if (valor.length > 6) {
    valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
  }

  elemento.value = valor;
}

</script>




