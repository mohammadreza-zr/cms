<?php
function show_settings(){
    $connection=config();
    $sql="SELECT * FROM settings_tbl";
    $row=mysqli_query($connection,$sql);
    return mysqli_fetch_assoc($row);
}
function edit_settings($data,$logo){
    $connection=config();
    $sql="UPDATE settings_tbl SET title='$data[title]',logo='$logo',description='$data[description]',copyright='$data[copyright]',facebook='$data[facebook]',instagram='$data[instagram]',tel='$data[tel]',fax='$data[fax]',aboutus='$data[aboutus]',logotype='$data[logotype]',email='$data[email]',address='$data[address]',map='$data[map]'";
    mysqli_query($connection,$sql);
}