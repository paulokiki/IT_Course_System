

<?php
$idCli = $_GET['idObj']; 

$rsFuncionario = consultarFuncionario($vConn, $idCli); 



$tblFuncionario = mysqli_fetch_array($rsFuncionario); //abrindo o resultset para exibição dos dados

$rsfunVenda = consultarFunVendas($vConn, $idCli);

$rsVenda = listarVendas($vConn, $idCli); //chamando metodo que retorna dados do cliente 

$tblVenda = mysqli_fetch_array($rsVenda);



?>

<div class="row">
    <div class="col-lg-2">
        <img title="Foto do funcionario" alt=<?= $tblFuncionario['FirstName'] ?> src="img/user.jpg" class="img-thumbnail">
    </div>

    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-12">

                <h1><?=$tblFuncionario['FirstName']." ".$tblFuncionario['LastName'] ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">

                Employee: <?= $tblFuncionario['FirstName']. " ".$tblFuncionario['LastName'] ?><br>
                Birth Date: <?= corrigirData($tblFuncionario['BirthDate']) ?><br>
                Address: <?= $tblFuncionario['Address'] ?><br>
                City: <?= $tblFuncionario['City'] ?><br>
                Country: <?= $tblFuncionario['Country'] ?><br>
                Postal Code: <?= $tblFuncionario['PostalCode'] ?><br>
                Region: <?= $tblFuncionario['Region'] ?><br>
                Phone: <?= $tblFuncionario['HomePhone'] ?><br>
            </div>

            <div class="col-lg-6">

                Title: <?= $tblFuncionario['Title'] ?><br>
                Hire Date: <?= corrigirData($tblFuncionario['HireDate']) ?><br>
                Salary: <?= "R$ " . number_Format($tblFuncionario['Salary'])?><br>
                
                Notes: <?= $tblFuncionario['Notes'] ?><br>

            </div>
        </div>
    </div>
</div>



<table class="table table-sm table-striped" style="margin-top: 30px">
    <thead>
        <th>Order Id</th>
        <th>Product Name</th>
        <th>Order Date</th>
        <th>Contact Name</th>
        <th>Sale Price U$</th>


    </thead>
    <tbody>                
        <?php
        while ($tblFuncionario = mysqli_fetch_array($rsfunVenda)) {
            ?>
            <tr>
                <td><?=$tblFuncionario['OrderID']?></td>
                <td>NULL</td>  
                <td><?= corrigirData($tblFuncionario['OrderDate']) ?></td> 
                <td><?= $tblFuncionario['ContactName'] ?></td>
                <td>U$ <?=number_format(calcularCompra($vConn, $tblFuncionario['OrderID']),2) ?></td>

            </td>



        </tr>

    <?php } ?>
</tbody>
</table>