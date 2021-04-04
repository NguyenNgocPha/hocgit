
<!DOCTYPE html>
<html lang="en">
    <head>                          
        <meta charset="utf-8" />                            
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />                         
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />                            
        <meta name="description" content="" />                          
        <meta name="author" content="" />                           
        <title>Mysql</title>                                                    
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">                          
                                    
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"                          
        crossorigin="anonymous" />                          
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"                          
        crossorigin="anonymous"></script>   
        <!--<script src="admin.js"></script>--> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&display=swap" rel="stylesheet">
  
        <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
        
 
        <meta name="description" content="" />                          
        <meta name="author" content="" />     
                        
        </head>          
        <style>
            img{
                width:3rem;
                height: 3rem;
            }
          .register {
        color:yellow;
    width: 500px;
    padding: 16px;
    margin: 0 auto;
    background-image: url(https://msmobile.com.vn/upload_images/images/hinh-nen-dep-cho-may-tinh-full-hd-2.jpg);
}
        </style>   

        <body>

<form action="" method="post" >      
    
    <div class="register">
              
    <h1>Đăng kí thông tin người dùng</h1>
                
                <hr stype="color:yellow">
              
                <div class="col-12 mt-3">
                <input type='text' placeholder="Work Email" name="email" class="col-11 mt-3"value='<?php if(isset($_POST['email'])) echo $_POST['email'] ?>'>
                </div>
                <div class="col-12 mt-3">
               
                <input type='text' name="name" placeholder=" name" class="col-5 mt-3"value='<?php if(isset($_POST['name'])) echo $_POST['name'] ?>'>
                <input type='text' name="type"placeholder="type"  class="col-6 mt-3" value='<?php if(isset($_POST['type'])) echo $_POST['type'] ?>'>
                </div>
                <div class="col-12 mt-3">
                <input type='text'class="col-11 mt-3" name="phone" placeholder="Phone" value='<?php if(isset($_POST['phone'])) echo $_POST['phone'] ?>'>
                </div>
                <div class="col-12 mt-3">
                <input type='text'class="col-11 mt-3" name="address" placeholder="address" value='<?php if(isset($_POST['address'])) echo $_POST['address'] ?>'>
                </div>
                <hr>
                <button type="submit" class="btn btn-secondary btn-block" name="save">SIGN UP</button>
                <button type="submit" class="btn btn-secondary btn-block" name="save1">LIST_CUSTUMER</button>
                    

     
        <?php if(isset($_POST['save'])){
       
if(isset($_POST['email'])&&isset($_POST['address'])&&isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['type'])){

    

        $n=$_POST['name'];
        $a=$_POST['address'];
        $p=$_POST['phone'];
        $e=$_POST['email'];
        $t=$_POST['type'];
        require 'Cussumer_data.php';
        $dis= new Customer();
        $dis->add($n,$p,$e,$a,$t);
        $dis->add_new();
   

}
}
if(isset($_POST['save1'])){
    header('Location: http://localhost/SS/DISPLAY_OOP.php');
}


    

?>
   </div>