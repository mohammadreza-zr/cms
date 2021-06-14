<?php

function add_widget($data,$img){
    $connection=config();
    $sql="INSERT INTO widget_tbl (title,text,img) VALUES ('$data[title]','$data[text]','$img')";
    mysqli_query($connection,$sql);
}
function list_widget_admin(){
    $connection=config();
    $sql="SELECT * FROM widget_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return @$result;
}
function delete_widget($id){
    $connection=config();
    $sql="DELETE FROM widget_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}
function show_edit_widget($id){
    $connection=config();
    $sql="SELECT * FROM widget_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    return mysqli_fetch_assoc($row);
}
function edit_widget($data,$id,$img,$oldPic){
    $array=explode("/",$oldPic);
    $total=count($array);
    $ext=end($array);
    $delFolder=$array[$total-2];
    $newFolder="widget-".rand();
    $imgAddress="../images/widget/".$newFolder.'/'.$ext;
    //file selected
    if($_FILES[$img]['name']!=''){
        //file selected and title not changed
        if (file_exists("../images/widget/".$array[$total-1])){
            unlink($oldPic);
            $pic=uploader_none_mk($img,"../images/widget/",$newFolder,'widget');
            //file selected and title changed
        }else{
            unlink($oldPic);
            rmdir("../images/widget/".$delFolder);
            $pic=uploader($img,"../images/widget/",$newFolder,'widget');
        }
        //file not selected
    }else{
        //file not selected and title not changed
        if (file_exists("../images/widget/".$array[$total-1])){
            $connection=config();
            $sql="UPDATE widget_tbl SET text='$data[text]',title='$data[title]' WHERE id='$id'";
            mysqli_query($connection,$sql);
            header("location: dashboard.php?m=widget&p=list");
            exit();
            //file not selected and title changed
        }else{
            mkdir("../images/widget/".$newFolder);
            rename($oldPic, $imgAddress);
            rmdir("../images/widget/".$delFolder);
            $pic=$imgAddress;
        }
    }
    $connection=config();
    $sql="UPDATE widget_tbl SET title='$data[title]',text='$data[text]',img='$pic' WHERE id='$id'";
    mysqli_query($connection,$sql);
}
