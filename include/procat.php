<?php
function addProductCat($data){
    $connection=config();
    $sql="INSERT INTO product_cat (title,status,sort) VALUES ('$data[title]','$data[status]','$data[sort]')";
    mysqli_query($connection,$sql);
    echo "افزوده شد";
}
function listprocatadmin(){
    $connection=config();
    $sql="SELECT * FROM product_cat";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}

