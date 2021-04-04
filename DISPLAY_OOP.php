<?php
 if(isset($_POST['save1'])){
    header('Location: http://localhost/SS/nhapOOP.php');
 }?>

<!DOCTYPE html>
<html lang="en">
    <head>                          
        <meta charset="utf-8" />                            
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />                         
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />                            
        <meta name="description" content="" />                          
        <meta name="author" content="" />                           
        <title>Tables - SB Admin</title>                                                    
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
          .full-container{
              color:yellow;
  
   
    margin: 0 auto;
    background-image: url(https://butterflynt.com/wp-content/uploads/2021/01/outerspace-70.gif);
    bac
    }
</style>         
<body>

<form action="" method="get" >  
    <div class="full-container">
            <div class="product">
                <div class="title"><H1> Quản lý người dùng </H1></div>
                
                <table class="table text-danger  table-bordered"> 
                <thead class="thead-dark">
                    <thead class="  thead-light text-center  ">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PHONE </th>
                            <th>ADDRESS</th>
                            <th>EMAIL</th>
                            <th>TYPE</th>
                            <th>UPLOAD</th>
                            <th>DELETE</th>
                            
                            </tr>
                    </thead>
                   
         <?php 
         require 'Cussumer_data.php';
         $dis= new Customer();
         $sql="select * from  customer";
         $arr=$dis->get_list($sql);


foreach($arr as $key=> $row){
    
     
                            ?>
                              <thead class="thead-light text-center  ">
                            <tr>
                                <td><?php echo $row["Cus_ID"]?></td>
                                <td><?php  echo $row["Cus_Name"]?></td>
                                <td><?php  echo $row["Cus_Phone"]?></td>
                                <td><?php  echo $row["Cus_Email"]?></td>
                                <td><?php  echo $row["Cus_Address"]?></td>
                                <td><?php  echo $row["Cus_Type"]?></td>
                                <td><a href="upload_OOP.php?MaID=<?php echo $row['Cus_ID']?>"> UPLOAD</td>
                                <td><a href="delete.php?MaSP=<?php echo $row['Cus_ID'] ?>"> DELETE</td>
                             </tr>
                         </thead>
                            <?php
                            }
                           
                       
                        ?>    
                           
                </table>
</div>

<hr>
</form>
<form action="" method="post" >  
<button class="btn btn-primary" name="save1" type="submit">
                    <i class="fas fa-plus mr-2"></i>Create
                </button>     
<button class="btn btn-primary"  name="save2" type="submit">
    <i class="fas fa-plus mr-2"></i>Delete
</button>
</div>
 </form>
 
</html> 
