<?php 

require 'connet.php';
class Dish 
{
    public function monAn()
    {
    }
    //list hết món ăn
    public function GetListDish()
    {
        $cn = new ketnoi();
        $sql='select * from dish ';
        return $cn->ExcuteQuery($sql);
    } 
    public function GetOneListDish($sqlk)
    {
        $cn = new ketnoi();
        $sql="select * from dish WHERE D_id = '$sqlk'" ;
        return $cn->ExcuteQuery($sql);
    } 
    //list hết món ăn sáng
    public function GetListBreakfast()
    {
        $cn = new ketnoi();
        $sql='select * from dish WHERE D_role="breakfast"';
        return $cn->ExcuteQuery($sql);
    }
     //list hết món ăn trưa
    public function GetListLunch()
    {
        $cn = new ketnoi();
        $sql='select * from dish where D_role="lunch"';
        return $cn->ExcuteQuery($sql);
    }
     //list hết món ăn tối 
    public function GetListDinner()
    {
        $cn = new ketnoi();
        $sql='select * from dish where D_role="dinner"';
        return $cn->ExcuteQuery($sql);
    }
     //list hết đồ uống
    public function GetListDrinks()
    {
        $cn = new ketnoi();
        $sql='select * from dish where D_role="drink"';
        return $cn->ExcuteQuery($sql);
    } //list hết món điểm tâm
    public function GetListDesserts()
    {
        $cn = new ketnoi();
        $sql='select * from dish where D_role="dessert"';
        return $cn->ExcuteQuery($sql);
    }
     //list hết các loại rượu
    public function GetListWine()
    {
        $cn = new ketnoi();
        $sql='select * from dish where D_role="wine"';
        return $cn->ExcuteQuery($sql);
    }
 
    public function SerListDish($sqlk)
    {
        $cn = new ketnoi();
        $sql="SELECT * FROM dish
        WHERE D_name LIKE '%$sqlk%'";
        return $cn->ExcuteQuery($sql);
    }
 //thêm mới sản phẩm
    public function addDish($t1,$t2,$t3,$t4,$t5)
    {
        $sql = "insert into dish (D_name,D_prices,D_img,D_material,D_role) 
        values('$t1','$t2','$t3','$t4','$t5')";
        $cn = new ketnoi();
        return $cn->ExcuteQuery($sql);
    }
    public function UpdateDish($t1,$t2,$t3,$t4,$t5,$t6)
    {
        $sql = "UPDATE dish SET D_name ='$t2', D_price = '$t3', D_img ='$t4',D_material='$t5', D_role='$t6' WHERE D_id = '$t1'";
        $cn = new ketnoi();
        return $cn->ExcuteQuery($sql);
    }
    public function deleteDish($masp) 
    {
        $sql="Delete from dish where D_id='$masp' ";
        $cn = new ketnoi();
        return $cn->ExcuteQuery($sql);
    }

}