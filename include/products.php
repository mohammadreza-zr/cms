<?php
function addpro($data,$img){
    $connection=config();
    $sql="INSERT INTO product_tbl (title,text,procat,img) VALUES ('$data[title]','$data[text]','$data[procat]','$img')";
    mysqli_query($connection,$sql);
}
function procat(){
    $connection=config();
    $sql="SELECT * FROM product_cat";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}
function listproadmin(){
    $connection=config();
    $sql="SELECT * FROM product_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return @$result;
}
function selectProCat($catid){
    $connection=config();
    $sql="SELECT * FROM `product_cat` WHERE id=$catid";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res['title'];
}
function show_edit_product($id){
    $connection=config();
    $sql="SELECT * FROM product_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    return mysqli_fetch_assoc($row);
}
function edit_product($data,$id,$img,$oldPic){
    $array=explode("/",$oldPic);
    $total=count($array);
    $ext=end($array);
    $delFolder=$array[$total-2];
    $newFolder="pro-".rand();
    $imgAddress="../images/products/".$newFolder.'/'.$ext;
    //file selected
    if($_FILES[$img]['name']!=''){
        //file selected and title not changed
        if (file_exists("../images/products/".$array[$total-1])){
            unlink($oldPic);
            $pic=uploader_none_mk($img,"../images/products/",$newFolder,'product');
        //file selected and title changed
        }else{
            unlink($oldPic);
            rmdir("../images/products/".$delFolder);
            $pic=uploader($img,"../images/products/",$newFolder,'product');
        }
    //file not selected
    }else{
        //file not selected and title not changed
        if (file_exists("../images/products/".$array[$total-1])){
            $connection=config();
            $sql="UPDATE product_tbl SET text='$data[text]',procat='$data[procat]' WHERE id='$id'";
            mysqli_query($connection,$sql);
            header("location: dashboard.php?m=product&p=list");
            exit();
        //file not selected and title changed
        }else{
            mkdir("../images/products/".$newFolder);
            rename($oldPic, $imgAddress);
            rmdir("../images/products/".$delFolder);
            $pic=$imgAddress;
        }
    }
    $connection=config();
    $sql="UPDATE product_tbl SET title='$data[title]',text='$data[text]',procat='$data[procat]',img='$pic' WHERE id='$id'";
    mysqli_query($connection,$sql);
}
function deletePro($id){
    $connection=config();
    $sql="DELETE FROM product_tbl WHERE id='$id'";
    $sql2="SELECT * FROM product_tbl WHERE id='$id'";
    $test=mysqli_query($connection,$sql2);
    $test2=mysqli_fetch_assoc($test);
    unlink($test2['img']);
    $array=explode("/",$test2['img']);
    $total=count($array);
    rmdir("../".$array[$total-4]."/".$array[$total-3]."/".$array[$total-2]);
    $row=mysqli_query($connection,$sql);
}
function listProDefault(){
    $connection=config();
    $sql="SELECT * FROM product_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}