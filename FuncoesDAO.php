<?php

include "Conexao.php";

function listarRegistros($vConn, $tabela){

    $sqlLista = "Select * from $tabela";
    $rsLista = mysqli_query($vConn, $sqlLista) or die(mysqli_error($vConn));
    
    return $rsLista; //retornando rsult com os dados do banco
}

/*-----------------------------------------------------------------------*/

function listarCampos($vConn, $tabela){
    $sqlCampos = "Show columns from $tabela";
    $rsCampos = mysqli_query($vConn, $sqlCampos) or die(mysqli_error($vConn));
    
    return $rsCampos; //retornando rsult com os dados do banco    
}

/*----------------------------------------------------------------------------*/

function listarDadosHome($vConn, $id){

    if($id == 10)
        $sqlDados = "Select CustomerID, CompanyName, Country from Customers limit 3";
    if($id == 20)
        $sqlDados = "Select EmployeeID, FirstName, LastName, Country from Employees limit 3";
    if($id == 30)
        $sqlDados = "Select SupplierID, CompanyName, City, Country from Suppliers limit 3";
    if($id == 40)
        $sqlDados = "Select ShipperID, CompanyName, Phone from Shippers limit 5";
    if($id == 50)
        $sqlDados = "Select ProductId, ProductName, UnitPrice from Products limit 3";
    if($id == 60)
        $sqlDados = "Select OrderId, OrderDate, CustomerID, ShipCity from Orders limit 3";
    
    $rsDados = mysqli_query($vConn, $sqlDados) or die(mysqli_error($vConn));

    return $rsDados;
    
}

/*----------------------------------------------------------------------------*/

function consultarCliente($vConn, $idCli){
    $sqlCliente = "Select * from customers where CustomerId like '$idCli'";    
    $rsCliente = mysqli_query($vConn, $sqlCliente) or die(mysqli_error($vConn));
    
    return $rsCliente;
}


function consultarFuncionario($vConn, $idCli){
  $sqlFuncionario = "Select * from employees where EmployeeID like '$idCli'";    
  $rsFuncionario = mysqli_query($vConn, $sqlFuncionario) or die(mysqli_error($vConn));

  return $rsFuncionario;
}

function consultarProduto($vConn, $idCli){
    $sqlProduto = "Select * from products where ProductID like '$idCli'";    
    $rsProduto = mysqli_query($vConn, $sqlProduto) or die(mysqli_error($vConn));
    
    return $rsProduto;
}


function consultarVenda($vConn, $idCli){
    $sqlVenda = "Select * from orders where EmployeeID like '$idCli'";    
    $rsVendas = mysqli_query($vConn, $sqlVenda) or die(mysqli_error($vConn));
    
    return $rsVendas;
}

function consultarFornecedores($vConn, $idCli){
 $sqlFornecedores = "Select * from Suppliers where SupplierID like '$idCli'";    
 $rsFornecedores = mysqli_query($vConn, $sqlFornecedores) or die(mysqli_error($vConn));

 return $rsFornecedores;
}


function listarProdFornecedor($vConn, $idCli){
    $sqlProdFornecedor = "select * from `products` where `SupplierID` = '$idCli';";
    $rsProdFornecedor = mysqli_query($vConn, $sqlProdFornecedor) or die(mysqli_error($vConn));

    return $rsProdFornecedor;

}

/*----------------------------------------------------------------------------*/

function listarVendas($vConn, $idCli){
    $sqlVendas = "Select * from orders O, employees E, Shippers S where O.CustomerId like '$idCli' and O.EmployeeID = E.EmployeeID and O.ShipVia = S.ShipperID";    
    $rsVendas = mysqli_query($vConn, $sqlVendas) or die(mysqli_error($vConn));
    
    return $rsVendas;
    
}

function consultarFunVendas ($vConn, $idCli){
    $sqlFuncionario = "select `OrderID`, `ContactName`, `OrderDate` from `orders`, `customers` where `orders`.`EmployeeID` = '$idCli' and `orders`.`CustomerID` = `customers`.`CustomerID`;";
    $rsFuncionario = mysqli_query($vConn, $sqlFuncionario) or die(mysqli_error($vConn));
    return $rsFuncionario;
}
/*----------------------------------------------------------------------------*/
function calcularCompra($vConn, $idVenda){
    $sqlTotal = "SELECT sum(OD.UnitPrice * OD.Quantity) as total FROM Orderdetails OD,";
    $sqlTotal .= "Orders O where OD.orderid = O.orderid and O.orderid = $idVenda";
    $rsTotal = mysqli_query($vConn, $sqlTotal) or die(mysqli_error($vConn));
    
    $tblTotal = mysqli_fetch_array($rsTotal);
    
    return $tblTotal['total'];
    
}

/*----------------------------------------------------------------------------*/
function corrigirData($tmpData){

    $vData = explode("-", $tmpData);
    $vDia = explode(" ", $vData[2]);
    
    return $vDia[0] . "/" . $vData[1] . "/" . $vData[0];  
    
}
?>