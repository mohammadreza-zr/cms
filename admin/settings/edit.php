<?php
$result=show_settings();
if(isset($_GET['edited=ok'])){
    echo 'edited';
}
if (isset($_POST['btn'])) {
    $data = $_POST['frm'];
    $file= $_FILES['logo'];
    if($file['name']!=''){
        //delete old file and folder
        $array=explode("/",$result['logo']);
        $total=count($array);
        $ext=end($array);
        $delFolder=$array[$total-2];
        unlink($result['logo']);
        rmdir("../images/logo/".$delFolder);
        //upload new file and create folder
        $folder=$file['name'];
        $logo=uploader('logo',"../images/logo/",$folder,'logo');;
        if ($logo == 'directory_exist'){
            echo 'نام دیگری انتخاب کنید';
        }else{
            edit_settings($data,$logo);
            header("location: dashboard.php?m=settings&p=edit");
        }
    }else{
        $logo=$result['logo'];
        edit_settings($data,$logo);
        header("location: dashboard.php?m=settings&p=edit");
    }
}
?>
<section id="container" class="">
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <aside class="profile-info col-lg-12">
                    <section class="panel">
                        <div class="bio-graph-heading">
                            تنظیمات سایت
                        </div>
                        <div class="panel-body bio-graph-info">
                            <h1>تماس با ما</h1>
                            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">متن درباره ما</label>
                                    <div class="col-lg-10">
                                        <textarea name="frm[aboutus]" id="editor" class="form-control" cols="30" rows="10" placeholder="متن درباره ما"><?php echo $result['aboutus']?></textarea>
                                        <script>
                                            CKEDITOR.replace( 'editor' );
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">ایمیل</label>
                                    <div class="col-lg-6">
                                        <input type="email" name="frm[email]" value="<?php echo $result['email']?>" class="form-control" id="email" placeholder="ایمیل">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">شماره تماس</label>
                                    <div class="col-lg-6">
                                        <input type="number" name="frm[tel]" value="<?php echo $result['tel']?>" class="form-control" id="mobile" placeholder="شماره تماس">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">فکس</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="frm[fax]" value="<?php echo $result['fax']?>" class="form-control" id="mobile" placeholder="فکس">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">آدرس</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="frm[address]" value="<?php echo $result['address']?>" class="form-control" id="mobile" placeholder="آدرس">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">ادرس بر روی نقشه</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="frm[map]" value="<?php echo $result['map']?>" class="form-control" id="mobile" placeholder="آدرس نقشه گوگل">
                                    </div>
                                </div>
                            <h1>تنظیمات دیگر</h1>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">لوگو</label>
                                    <div class="col-lg-6">
                                        <input type="file" name="logo" class="form-control">
                                    </div>
                                    <a href="<?php echo $result['logo']?>"><img src="<?php echo $result['logo']?>" width="40" height="40"></a>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">لوگو تایپ</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="frm[logotype]" value="<?php echo $result['logotype']?>" class="form-control" placeholder="لوگو تایپ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">نام سایت</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="frm[title]" value="<?php echo $result['title']?>" class="form-control" placeholder="نام سایت">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">توضیح کوتاه درباره سایت</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="frm[description]" value="<?php echo $result['description']?>" class="form-control" placeholder="توضیح کوتاه درباره سایت">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">کپی رایت</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="frm[copyright]" value="<?php echo $result['copyright']?>" class="form-control" placeholder="کپی رایت">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">فیسبوک</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="frm[facebook]" value="<?php echo $result['facebook']?>" class="form-control" placeholder="facebook">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">اینستاگرام</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="frm[instagram]" value="<?php echo $result['instagram']?>" class="form-control" placeholder="instagram">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">توییتر</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="frm[twitter]" value="<?php echo $result['twitter']?>" class="form-control" placeholder="twitter">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button name="btn" type="submit" class="btn btn-success">Save</button>
                                        <button type="reset" class="btn btn-default">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </aside>
            </div>

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>