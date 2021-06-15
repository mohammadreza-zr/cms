<?php
if (isset($_POST['btn'])){
    $data=$_POST['frm'];
    $img=$_FILES['img'];
    if (empty($img['name'])){
        echo 'لطفا یک عکس انتخاب کنید!';
        exit();
    }
    $link=file_uploader('img');
    $name=$link[0];
    $size=$link[1];
        add_file($data,$name,$size);
        echo 'افزوده شد'."<br>";
}
?>

<h1 class="pageLables">افزودن فایل جدید</h1>
<button><a href="dashboard.php?m=uploader&p=list">لیست فایل ها</a></button>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن فایل جدید به وبسایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان خبر را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">انتخاب فایل</label>
                        <input type="file" name="img" id="exampleInputFile">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
