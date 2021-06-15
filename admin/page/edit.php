<?php
    $id=$_GET['id'];
    $result=show_edit_page($id);
    if (isset($_POST['btn'])){
        $data=$_POST['frm'];
        edit_page($data, $id);
        header("location: dashboard.php?m=page&p=list");
    }
?>
<h1 class="pageLables">ویرایش صفحه</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش صفحه
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان صفحه</label>
                        <input value="<?php echo $result['title'];?>" type="text" name="frm[title]" class="form-control" placeholder="عنوان محصول را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">کلمات کلیدی</label>
                        <input value="<?php echo $result['keywords'];?>" type="text" name="frm[keywords]" class="form-control" placeholder="عنوان محصول را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات</label>
                        <input value="<?php echo $result['description'];?>" type="text" name="frm[description]" class="form-control" placeholder="عنوان محصول را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">محتویات صفحه</label>
                        <textarea name="frm[body]" id="editor" class="form-control ckeditor" rows="8" placeholder="توضیحات محصول را وارد کنید"><?php echo $result['body'];?></textarea>
                        <script>
                            CKEDITOR.replace( 'editor' );
                        </script>
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ثبت تغییرات</button>
                </form>

            </div>
        </section>
    </div>
</div>