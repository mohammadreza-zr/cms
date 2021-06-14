<?php
function addNewsCat($data){
    $connection=config();
    $sql="INSERT INTO news_cat (title) VALUES ('$data[title]')";
    mysqli_query($connection,$sql);
    echo "افزوده شد";
}
function listnewscatadmin(){
    $connection=config();
    $sql="SELECT * FROM news_cat";
    $row=mysqli_query($connection,$sql);
    while($res=mysqli_fetch_assoc($row)){
        $result[]=$res;
    }
    return $result;
}
function show_edit_cat($id){
    $connection=config();
    $sql="SELECT * FROM news_cat WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    return $res;
}
function edit_cat($data,$id){
    $connection=config();
    $sql="UPDATE news_cat SET title='$data[title]' WHERE id='$id'";
    mysqli_query($connection,$sql);
}
function deletecat($id){
    $connection=config();
    $sql="DELETE FROM news_cat WHERE id='$id'";
    $row=mysqli_query($connection,$sql);
}