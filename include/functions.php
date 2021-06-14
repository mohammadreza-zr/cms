<?php
session_start();
//header("Cache-Control: no cache");
    function config(){
        $server="localhost";
        $user="root";
        $password="";
        $db="cms";
        $connect=mysqli_connect($server,$user,$password,$db);
        mysqli_set_charset($connect, "utf8");
        mysqli_query($connect,"SET NAMES 'utf8'");
        return $connect;
    }
    function uploader($file,$dir,$folder,$name){
        $file=$_FILES[$file];
        if(file_exists($dir.$folder)){
            return 'directory_exist';
        }else{
            mkdir($dir.$folder);
        }
        $fileName=$file['name'];
        $array=explode(".",$fileName);
        $ext=end($array);
        $newName=$name.'-'.rand().'.'.$ext;
        $from=$file['tmp_name'];
        $to=$dir.$folder.'/'.$newName;
        move_uploaded_file($from,$to);
        return $to;
    }
    function uploader_none_mk ($file,$dir,$folder,$name){
        $file=$_FILES[$file];
        $fileName=$file['name'];
        $array=explode(".",$fileName);
        $ext=end($array);
        $newName=$name.'-'.rand().'.'.$ext;
        $from=$file['tmp_name'];
        $to=$dir.$folder.'/'.$newName;
        move_uploaded_file($from,$to);
        return $to;
    }
    include_once 'settings.php';
    $settings=show_settings();
    @$m=$_GET['m']?$_GET['m']:'index';
    switch ($m){
        case 'index':
        case 'menu':
            include_once 'menu.php';
            break;
        case 'product_cat':
            include_once 'procat.php';
            break;
        case 'product':
            include_once 'products.php';
            break;
        case 'news_cat':
            include_once 'newscat.php';
            break;
        case 'news':
            include_once 'news.php';
            break;
        case 'contact':
            include_once 'contact.php';
            break;
        case 'widget':
            include_once 'widget.php';
            break;
    }
    ?>
<link rel="shortcut icon" href="<?php echo $settings['logo'] ?>" type="image/x-icon">
