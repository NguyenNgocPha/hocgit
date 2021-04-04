
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
    background-image: url(https://i.pinimg.com/originals/51/c5/31/51c531ddf272ba739c86cffbe6bd6eff.gif);
}
        </style>   

        <body>
        <?php 
         include 'Cussumer_data.php';
        $dis= new Customer();
    if(isset($_GET['MaID'])){
        $id=$_GET['MaID'];
      
        
        $sql="select * from  customer WHERE Cus_ID='$id'";
        $arr=$dis->get_list($sql);
        foreach($arr as $key=> $row){
                $GLOBALS['id']=$id;
                $GLOBALS['n']=$row["Cus_Name"];
                $GLOBALS['e']=$row["Cus_Email"];
                $GLOBALS['a']=$row["Cus_Address"];
                $GLOBALS['t']=$row["Cus_Type"];
                $GLOBALS['p']=$row["Cus_Phone"];
        }
    
    }
    if(isset($_POST['save'])){
                if(isset($_POST['email'])  && isset($_POST['phone'])  && isset($_POST['name'])  && isset($_POST['address'])  &&isset($_POST['type']) ){
                    if(($_POST['email']=="")|| ($_POST['phone']=="")||($_POST['name']=="")||($_POST['address']=="")|| ($_POST['type']=="")){
                        echo"<script>alert('KHÔNG ĐƯỢC ĐỂ TRỐNG')</script>"; 
                    }else{
                $id=$GLOBALS['id'] ;
                $email=$_POST['email'];
                $name=$_POST['name']; 
                $phone= $_POST['phone'];
                $address=$_POST['address'];
                $type=$_POST['type'];
                $dis ->get_update($id,$name,$phone,$email,$address,$type);
               $k= $dis ->get_update_ID();
               if($k){
              
                header('Location: http://localhost/SS/DISPLAY_OOP.php');
               } 
            }
            }
    }?>

<form action="" method="post" >      
    
  <div class="register">
    <h1>Chỉnh sửa thông tin người dùng</h1>
                
                <hr stype="color:yellow">
                <div class="col-12 mt-3">
                <lable>id</lable><br>
                <input type='number'disabled placeholder="Work Email" name="id"  class="col-11 mt-1"value='<?php echo $GLOBALS['id'] ?>'>
                </div>
                <div class="col-12 mt-3">
                <lable>email</lable><br>
                <input type='text' placeholder='<?php echo $GLOBALS['e'] ?>' name="email" class="col-11 mt-1" >
                </div>
                <div class="col-12 mt-3">
                <lable >name</lable> &emsp;&emsp; &emsp;&emsp;  &emsp;&emsp;  &emsp;   <lable class="col-5">Cus_Type</lable><br>
                <input type='text' name="name" placeholder='<?php echo $GLOBALS['n'] ?>' class="col-5 mt-1">
                <input type='text' name="type"placeholder='<?php echo $GLOBALS['t'] ?>'  class="col-6 mt-1" >
                </div>
                <div class="col-12 mt-3">
                <lable>phone</lable><br>
                <input type='text'class="col-11 mt-1" name="phone" placeholder='<?php echo $GLOBALS['p'] ?>'> 
                </div>
                <div class="col-12 mt-3">
                <lable>address</lable><br>
                <input type='text'class="col-11 mt-1" name="address" placeholder='<?php echo $GLOBALS['a'] ?>'> 
                </div>
                <hr>
              
                <button type="submit" class="btn btn-secondary btn-block" name="save">UPLOAD</button>
                    

     
   
            </div>
  
</from>