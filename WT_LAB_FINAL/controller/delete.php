<?php 
    require_once('../model/adminModel.php');
    session_start();
    

        $id=$_SESSION['edit_id'];
    
        deleteEmployer($id);
        //echo $id;
        if(isset($_POST['display'])){
            header('location: ../view/display.php');
        }else{
            
        }
?>