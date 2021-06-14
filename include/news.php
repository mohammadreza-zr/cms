<?php
function addnews($data,$img){
    $connection=config();
    $sql="INSERT INTO news_tbl (title,text,img,news_cat,date) VALUES ('$data[title]','$data[text]','$img','$data[newscat]','$data[date]')";
    mysqli_query($connection,$sql);
}
function newscat(){
    $connection=config();
    $sql="SELECT * FROM news_cat";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}
function listnewsadmin(){
    $connection=config();
    $sql="SELECT * FROM news_tbl";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return @$result;
}
function selectNewsCat($catid){
    $connection=config();
    $sql="SELECT * FROM `news_cat` WHERE id=$catid";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res['title'];
}
function deletenews($id){
    $connection=config();
    $sql="DELETE FROM news_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}
function show_edit_news($id){
    $connection=config();
    $sql="SELECT * FROM news_tbl WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    return mysqli_fetch_assoc($row);
}
function edit_news($data,$id,$img,$oldPic){
    $array=explode("/",$oldPic);
    $total=count($array);
    $ext=end($array);
    $delFolder=$array[$total-2];
    $newFolder="news-".rand();
    $imgAddress="../images/news/".$newFolder.'/'.$ext;
    //file selected
    if($_FILES[$img]['name']!=''){
        //file selected and title not changed
        if (file_exists("../images/news/".$array[$total-1])){
            unlink($oldPic);
            $pic=uploader_none_mk($img,"../images/news/",$newFolder,'news');
        //file selected and title changed
        }else{
            unlink($oldPic);
            rmdir("../images/news/".$delFolder);
            $pic=uploader($img,"../images/news/",$newFolder,'news');
        }
    //file not selected
    }else{
        //file not selected and title not changed
        if (file_exists("../images/news/".$array[$total-1])){
            $connection=config();
            $sql="UPDATE news_tbl SET text='$data[text]',news_cat='$data[news_cat]',date='$data[date]' WHERE id='$id'";
            mysqli_query($connection,$sql);
            header("location: dashboard.php?m=news&p=list");
            exit();
        //file not selected and title changed
        }else{
            mkdir("../images/news/".$newFolder);
            rename($oldPic, $imgAddress);
            rmdir("../images/news/".$delFolder);
            $pic=$imgAddress;
        }
    }
    $connection=config();
    $sql="UPDATE news_tbl SET title='$data[title]',text='$data[text]',news_cat='$data[news_cat]',img='$pic',date='$data[date]' WHERE id='$id'";
    mysqli_query($connection,$sql);
}


