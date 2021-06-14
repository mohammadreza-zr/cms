<?php
if (isset($_POST['btn'])){
    $data=$_POST['frm'];
    $img=$_FILES['img'];
    if (empty($img['name'])){
        echo 'لطفا یک عکس انتخاب کنید!';
        return false;
    }
    $folder="news-".rand();
    $link=uploader('img',"../images/news/",$folder,'product');
    if ($link == 'directory_exist'){
        echo 'نام دیگری انتخاب کنید';
    }else{
        addnews($data,$link);
        echo 'افزوده شد'."<br>";
    }
}
?>

<h1 class="pageLables">افزودن خبر جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن خبر جدید به وبسایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان محصول را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">تاریخ خبر</label>
                        <input type="date" name="frm[date]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea name="frm[text]"  class="form-control ckeditor" rows="8" placeholder="توضیحات محصول را وارد کنید"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm[newscat]">
                            <?php
                                $procat=newscat();
                                foreach ($procat as $subs){
                                    echo "<option value='$subs[id]'>$subs[title]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">عکس خبر</label>
                        <input type="file" name="img" id="exampleInputFile">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
