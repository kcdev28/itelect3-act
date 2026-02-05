<?php
session_start();


if (isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
     $contact = $_POST['contact'];
    $id = $_POST['id'];

    if($id == ""){
      
        $newid = count($_SESSION['customer']) > 0
        ? max(array_keys($_SESSION['customer'])) + 1 
        : 1;    

        $_SESSION['customer'][$newid] = [
            'fullname'=> $fullname,
            'email' => $email,
            'contact'=> $contact
        ];
    }else{
     
        $_SESSION['employee'][$id] = [
            'fullname'=> $fullname,
            'email' => $email,
            'contact'=> $contact
        ];
    }
    $_SESSION['success'] = "Customer Info Added Successfully!";
    header("Location:" . $_SERVER['PHP_SELF']);
    exit;
}


?>
