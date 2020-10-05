<meta http-equiv="Content-Language" content="pt-br">

<?php
$idCli = $_GET['idObj']; 

$rsProdutos = consultarProduto($vConn, $idCli); 



$tblProduto = mysqli_fetch_array($rsProdutos); //abrindo o resultset para exibição dos dados

?>

<div class="row">
    <div class="col-lg-2">
        <img src="img/user.jpg" class="img-thumbnail">
    </div>

    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 100px">
                <h1><?=$tblProduto['ProductName']?></h1>
            </div>
        </div>
        
    </div>
</div>

        <hr>
        
        <table class="table table-sm table-striped">

            <thead>

                    
                    
                    <th>ProductID</th>
                    <th>ProductName</th>
                    <th>SupplierID</th>
                    <th>CategoryID</th>
                    <th>QuantityPerUnit</th>
                    <th>UnitPrice</th>
                    <th>UnitsInStock</th>
                    <th>UnitsOnOrder</th>
                    <th>ReorderLevel</th>
                    <th>Discontinued</th>
                    
                    
            </thead>
            <tbody>

<!-- ------------------------------------------------------------------>
<?php
            $i = 0;  
            for($i = 0;$i < 10; $i++ ){?>


                <td><?= $tblProduto[$i] ?></td>
                
                


                <?php }?>

           
   

<!-- ------------------------------------------------------------------>

</tbody>
           
        </table>
