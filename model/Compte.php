<?php

 
function data_connexion(){
   return mysqli_connect("localhost","root","","banksys");

}
function ListCompte(){
  
 $result =  mysqli_query( data_connexion(), "select nom,prenom,genre,datenaissance,nationalite,balance,compte.id as CompteID  from compte left join client on client.id = compte.id"); 
return $result;
}

function createCompte(){
   extract($_POST);
   $connexion = data_connexion();
   $result = $connexion->prepare("INSERT INTO client (nom, prenom, genre, datenaissance, nationalite) VALUES (?, ?, ?, ?, ?)");
  return $result->execute([$nom, $prenom, $genre, $datenaissance, $nationalite]);
}
function UpdateCompte(){
   extract($_POST);
   
   $connexion = data_connexion();
   $result = $connexion->prepare("UPDATE client
                                  SET
                                   nom = ? ,
                                   prenom= ?,
                                    genre = ?,
                                     datenaissance = ? ,
                                      nationalite = ?
                                       where id = ?
                                       
                               
   ");
  return $result->execute([$nom, $prenom, $genre, $datenaissance, $nationalite,$id]);
}

function EditeCompte($id){
  
   $result =  mysqli_query( data_connexion(), "SELECT * from client where id = $id "); 
  return $result;
  }
  function deleteCompte($id){
   $result =  mysqli_query( data_connexion(), "DELETE from client where id = $id "); 
  return $result;
  }
  
  function checkBankAccount($id){
   $connexion= data_connexion() ;
   $result =  mysqli_query( $connexion, "
      SELECT *  from compte INNER JOIN client on client.id = compte.id where client.id = $id "); 
;
   return $result;
  }
  function StartAtransaction($id): bool|mysqli_result{
   $connexion= data_connexion() ;
   $result =  mysqli_query( $connexion, "
      SELECT *  from compte INNER JOIN client on client.id = compte.id where client.id = $id "); 
;
   return $result;
  }
function DecreaseMontantOftheClient($id){
   extract($_POST);
   
   $connexion = data_connexion();
   $result = $connexion->prepare("UPDATE compte
                                  SET
                                  
                                     balance = balance - ? 
                                       where id = ?
                                       
                               
   ");
  return $result->execute([ $montant,$id]);
}
function increaseMontantOftheClient(){
   extract($_POST);
   
   $connexion = data_connexion();
   $result = $connexion->prepare("UPDATE compte
                                  SET
                                  
                                     balance = balance + ? 
                                       where id = ?
                                       
                               
   ");
  return $result->execute([ $montant,$Destinations]);
}
function ListClients(){
   $result = mysqli_query( data_connexion(),"select *  from client left join compte ");
   return $result;
}
function    CreateClient(){
   extract($_POST);
   $connexion = data_connexion();
   $result = $connexion->prepare(query: "INSERT INTO client (id,nom, prenom, genre, datenaissance, nationalite) VALUES (?,?, ?, ?, ?, ?)");
  return $result->execute([$id,$nom, $prenom, $genre, $datenaissance, $nationalite]);
}
