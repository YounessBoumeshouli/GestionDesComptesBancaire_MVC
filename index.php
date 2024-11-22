
<?php
require_once("controller/bankController.php");
if (isset($_GET["action"])) {
    $action = $_GET["action"];
    
}else{
    $action = 'default';
}

switch($action) {
    case "edite":
        ShowupdateActon();
        break;
    case "create":
        createAction();
        break;
    case "listClient":
        listClientsAction();
    case "delete":
        deleteAction();
        break;
    case "startTransaction":
        MakeTransaction();
        break;
    case "store":
        update();
        break;
    case "bankAccount":
        checkBankAccountAction();
        break;
    case "transaction":
        TransactionAction();
        break;
    case "createClient":
        CreateClientAction();
        break;
    case "CreateNewClient":
        ClientCreatedForm();
        break;
    case "ClientCreated":
        ClientCreated();
        break;
    default: 
    listAcountsAction();
    break;
}