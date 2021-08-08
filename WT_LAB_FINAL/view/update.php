<?php 
    require_once('../model/employerModel.php');
    session_start();
    if(isset($_POST['submit'])){

        $name=$_POST['employerame']; 
        $cname=$_POST['companyname'];
        $contactno=$_POST['contactno'];
        $username=$_POST['username'];
        $pass=$_POST['password'];
        

        $id=$_SESSION['edit_id'];

        $employerinfo = [	
            'employername'	=> $productName, 
            
            'id' => $id
        ];
        updateProduct($product);
        //echo $id;
        if(isset($_POST['display'])){
            header('location: ../view/display.php');
        }else{
            
        }
       
    }

?>
