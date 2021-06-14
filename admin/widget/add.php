<?php
if (isset($_POST['btn'])){
    $data=$_POST['frm'];
    $img=$_FILES['img'];
    if (empty($img['name'])){
        echo 'لطفا یک عکس انتخاب کنید!';
        return false;
    }
    $folder="widget-".rand();
    $link=uploader('img',"../images/widget/",$folder,'widget');
    if ($link == 'directory_exist'){
        echo 'نام دیگری انتخاب کنید';
    }else{
        add_widget($data,$link);
        echo 'افزوده شد'."<br>";
    }
}
?>

<h1 class="pageLables">افزودن ویجت جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن ویجت جدید به وبسایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان ویجت</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان ویجت را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea name="frm[text]"  class="form-control ckeditor" rows="8" placeholder="توضیحات ویجت را وارد کنید"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">عکس ویجت</label>
                        <input type="file" name="img" id="exampleInputFile">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
