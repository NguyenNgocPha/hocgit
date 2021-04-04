<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>menu nha hang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>

<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }

    .glyphicon {
        margin-right: 5px;
    }

    .thumbnail {
        margin-bottom: 20px;
        padding: 0px;
        -webkit-border-radius: 0px;
        -moz-border-radius: 0px;
        border-radius: 0px;
    }

    .item.list-group-item {
        float: none;
        width: 100%;
        background-color: #fff;
        margin-bottom: 10px;
        height:400px; 
    }

    .item.list-group-item:nth-of-type(odd):hover,
    .item.list-group-item:hover {
        background: #428bca;
    }

    .item.list-group-item .list-group-image {
        margin-right: 10px;
    }

    .item.list-group-item .thumbnail {
        margin-bottom: 0px;
    }

    .item.list-group-item .caption {
        padding: 9px 9px 0px 9px;
    }

   

    .item.list-group-item img {
        float: left;
    }

    .item.list-group-item:after {
        clear: both;
    }

    .list-group-item-text {
        margin: 0 0 11px;
    }
    #img{
        width:300px;
         height:200px;
    }
    #item{
        height:400px; 
    }
    #bottom{
    margin-bottom:2%;}
    #bottom1{
    height:80px;}
</style>


<body>
    <div class="container">
         <h3> Sản phẩm nổi bật</h3>
        <?php
        require 'ClassDish.php';
       $dis= new Dish();
       $arr=$dis->GetListBreakfast();
       $ki ="<div class='container-fluid'><div id='products' class='row list-group'>";
       foreach($arr as $key => $row){
         
        $k = (string) "<div  id='item' class='item  col-xs-3 col-lg-3'>
                   <div class='thumbnail'> <img id='img' class='group list-group-image' src='{$row['D_img']}'
                   width='300'>
                        <div class='caption'> 
                          <div class='row56' id='bottom1'>
                             <h4 class='group inner list-group-item-heading'>  {$row['D_name']}</h4>
                             <p class='group inner list-group-item-text'> {$row['D_material']}.</p>
                         </div>
                        <div class='row' id='bottom'>
                                  <div class='col-xs-12 col-md-6'>
                                       <p class='lead'> {$row['D_price']}đ</p>
                                      </div>
                                  <div class='col-xs-12 col-md-6'> <a class='btn btn-success'
                                    href='http://hocwebgiare.com/'>Chi tiết</a>
                                      </div>
                                 </div>
                            </div>
                       </div>
                  </div>

              
    ";
    
    $ki.=$k;
    
    

       }
       $ki.="</div></div>";
       echo $ki;
    ?>