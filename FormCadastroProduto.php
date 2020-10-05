<?php
$rsCat = listarRegistros($vConn, "Categories");
$rsForn = listarRegistros($vConn, "Suppliers");
?>
<div class="container">
<form action="CadastroDados.php" method="post">

    <div class="row LinhaForm">
        <div class="col-lg-4">
            <label>Product Name</label>
            <input type="text" name="HTML_productName" class="form-control">
        </div>  
        <div class="col-lg-4">
            <label>Category</label>
            
            <select name="HTML_categoryId" class="form-control">
                <?php
                    while($tblCat = mysqli_fetch_array($rsCat)){
                ?>
                <option><?=$tblCat[1] . " - " . $tblCat[2]?></option>
                
                <?php
                    }
                ?>
            </select>            
            
        </div> 
        <div class="col-lg-4">
            <label>Supplier</label>
            
            <select name="HTML_supplier" class="form-control">
                <?php
                    while($tblForn = mysqli_fetch_array($rsForn)){
                ?>
                <option><?=$tblForn[1]?></option>
                
                <?php
                    }
                ?>
            </select>       
            </div>
        </div> 




    <div class="row LinhaForm">
        <div class="col-lg-4">
            <label>Quantity Per Unit</label>
            <input type="text" name="HTML_quantityPerUnit" class="form-control">
        </div>
        <div class=" col-lg-4">
            <label>Unit Price</label>
            <input type="text" name="HTML_valor" class="form-control">
        </div> 

         <div class=" col-lg-4">
            <label>Unitln Stock</label>
            <input type="text" name="HTML_unitStock" class="form-control">
        </div> 
    </div>
    
     
         
        <div class="row LinhaForm">
        
       
        <div class=" col-lg-5">
            <label>Unit On Order</label>
            <input type="text" name="HTML_unitOnOrder" class="form-control">
        </div>
        <div class=" col-lg-5">
            <label>Record Level</label>
            <input type="number" name="HTML_recordLevel" class="form-control">
        </div>

         <div class="col-lg-2">
            <label>Discontinued</label>
            
            <select name="HTML_dicontinued" class="form-control">
                
                <option>YES</option>
                <option>NO</option>
               
            </select>       
            </div>
        </div> 
        </div>  
    



    
    
    


    <div class="row LinhaForm">
            <div class="col-lg-12">  
                <input type="hidden" name="tabela" value="products">
                <button type="submit" class="btn btn-dark float-right" style="margin-top:20px">Cadastrar Produtos</button> 
                <div class="col-lg-12">  
                    <button type="reset" class="btn btn-dark float-right" style="margin-top:20px; margin-right:20px">Limpar</button>            
                </div>           
            </div>

        </div>

    
</form>
</div>