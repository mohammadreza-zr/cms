<?php
if (isset($_POST['btn'])){
    $data=$_POST['frm'];
    $img=$_FILES['img'];
    if (empty($img['name'])){
        echo 'لطفا یک عکس انتخاب کنید!';
        return false;
    }
    $folder="pro-".rand();
    $link=uploader('img',"../images/products/",$folder,'product');
    if ($link == 'directory_exist'){
        echo 'نام دیگری انتخاب کنید';
    }else{
        addpro($data,$link);
        echo 'افزوده شد'."<br>";
    }
}
?>

<h1 class="pageLables">افزودن محصول جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن محصول جدید به وبسایت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان محصول</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان محصول را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea name="frm[text]"  class="form-control ckeditor" rows="8" placeholder="توضیحات محصول را وارد کنید"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm[procat]">
                            <option value='0'>سرگروه</option>
                            <?php
                                $procat=procat();
                                foreach ($procat as $subs){
                                    echo "<option value='$subs[id]'>$subs[title]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">عکس محصول</label>
                        <input type="file" name="img" id="exampleInputFile">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
