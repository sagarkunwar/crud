
<?php 
include 'conn.php';
if(isset($_GET['deleteid'])){
    
    $id= $_GET['deleteid'];
    
    // let Query to delete data
    $sql= "delete from `crudtable` where id=$id";
    $result= mysqli_query($con, $sql);
    //mysqli_query help to execut query
    
    if($result){
        //echo "sucessfully deleted";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
        //mysqli_error throw error while connection with database
    }

}

?>