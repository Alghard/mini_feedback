<?php
    function connect(){
        return new PDO('mysql:host=localhost;dbname=feelback_db','root','root',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}


function getAllUsers():array|string{
    try{
        $req = connect()->prepare("SELECT username FROM users");
        $req -> execute();
        $list = $req->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }
    catch(Exception $error){
        die($error->getMessage());
    }
}

$test = getAllUsers();

?>
