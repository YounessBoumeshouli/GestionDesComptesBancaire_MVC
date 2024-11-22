<?php
require_once"model/Compte.php";
function listAcountsAction()
{
   $result =  ListCompte();
   require_once"views/listCompte.php";
}
function createAction(){
   
   require_once"views/formulaire.php";
}
function storeAction(){
   createCompte();
  header("location:index.php");
}
function ShowupdateActon(){
   $id = $_GET['id'];
   $result =  EditeCompte($id);
   require_once"views/edite.php";

}
function update(){
   
  
   $result =  UpdateCompte();
   header(header: "location:index.php");
   require_once"views/edite.php";
   
}

function deleteAction(){
   $id = $_GET["id"];
   deleteCompte($id);
   header(header: "location:index.php");
   require_once"views/delete.php";
   
}
function checkBankAccountAction(){
   $id = $_GET["id"];
  $result =  checkBankAccount($id);
   require_once"views/bankaccount.php";
}
function TransactionAction(): void{
   $id = $_GET["id"];
   $result = StartAtransaction($id);
   require_once"views/transaction.php";
}
function MakeTransaction(){
   $id = $_GET["id"];
   DecreaseMontantOftheClient($id);
   increaseMontantOftheClient();
   header(header: "location:index.php");
}
function listClientsAction(){
   $result = ListClients();
}
function CreateClientAction(){
   $id = $_GET['id'];
      
   require_once"views/CreateNewClient.php";
 
 
}

function ClientCreatedForm(){
   $id = $_GET['id'];
   require_once"views/CreateClient.php";
}
function ClientCreated(){
  
   CreateClient();
   header(header: "location:index.php");
}