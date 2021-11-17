<?php
 include 'conn.php';
 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql= "insert into `crudtable` (name, email,password) values('$name','$email','$password')";
    $result= mysqli_query($con,$sql);
    
    if($result){
        //echo "insert sucessfully";
        header('location:display.php'); // hearder(no return type) is used to re-direct to another page  
    }else{
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Crud Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter Your name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>email</label>
                <input type="email" class="form-control" placeholder="Enter Your email" name="email" autocomplete="off">
            </div>
            
            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Your Password" name="password">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>