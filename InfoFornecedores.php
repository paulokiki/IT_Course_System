<meta http-equiv="Content-Language" content="pt-br">

<?php
$idCli = $_GET['idObj']; 

$rsForenecedores = consultarFornecedores($vConn, $idCli); 



$tblFornecedores = mysqli_fetch_array($rsForenecedores); //abrindo o resultset para exibição dos dados

$rsProdFornecedor = listarProdFornecedor($vConn, $idCli); 



$tblProdFornecedor = mysqli_fetch_array($rsProdFornecedor); //abrindo o resultset para exibição dos dados

?>

<div class="row">
    <div class="col-lg-2">
        <img title="Foto do funcionario" alt=<?= $tblFornecedores['CompanyName'] ?> src="img/user.jpg" class="img-thumbnail">
    </div>

    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-12">
               
                <h1><?=$tblFornecedores['CompanyName'] ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                
                Supplier Id: <?= $tblFornecedores['SupplierID'] ?><br>
                Contact Name: <?= $tblFornecedores['ContactName'] ?><br>
                Contact Title: <?= $tblFornecedores['ContactTitle'] ?><br>
                City: <?= $tblFornecedores['City'] ?><br>
                Country: <?= $tblFornecedores['Country'] ?><br>
                Postal Code: <?= $tblFornecedores['PostalCode'] ?><br>
                Region: <?= $tblFornecedores['Region'] ?><br>
                Phone: <?= $tblFornecedores['Phone'] ?><br>
            </div>

            <div class="col-lg-6">
                
               

            </div>
        </div>
    </div>
</div>

        <hr>
        
        <table class="table table-sm table-striped" style="margin-top: 30px">
<thead>

                    
                    
                    <th>ProductID</th>
                    <th>Product Name</th>
                    <th>Supplie ID</th>
                    <th>Category ID</th>
                    <th>UnitPrice</th>
                    <th>QuantityPerUnit</th>
                    
                    
                    
            </thead>
            
            <tbody>
                   
                <?php
                while ($tblProdFornecedor = mysqli_fetch_array($rsProdFornecedor)) {
                    ?>
                    <tr>
                       <td><?= $tblProdFornecedor['ProductID'] ?></td> 
                       <td><?= $tblProdFornecedor['ProductName'] ?></td>   
                       <td><?= $tblProdFornecedor['SupplierID'] ?></td>  
                       <td><?= $tblProdFornecedor['CategoryID'] ?></td>  
                       <td><?= $tblProdFornecedor['UnitPrice'] ?></td>  
                       <td><?= $tblProdFornecedor['QuantityPerUnit'] ?></td>  
                     

                    </tr>

                <?php } ?>
            


</tbody>
           
        </table>
