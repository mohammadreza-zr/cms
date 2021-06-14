<?php
    $id=$_GET['id'];
    $result=show_edit_widget($id);
    if (isset($_POST['btn'])){
        $data=$_POST['frm'];
        edit_widget($data, $id,'img',$result['img']);
        header("location: dashboard.php?m=widget&p=list");
    }
?>
<h1 class="pageLables">ویرایش ویجت</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش ویجت
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان خبر</label>
                        <input value="<?php echo $result['title'];?>" type="text" name="frm[title]" class="form-control" placeholder="عنوان ویجت را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea name="frm[text]"  class="form-control ckeditor" rows="8" placeholder="توضیحات ویجت را وارد کنید"><?php echo $result['text'];?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">عکس محصول</label>
                        <input type="file" name="img" id="exampleInputFile">
                        <img src="<?php echo $result['img']?>" width="60" >
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ثبت تغییرات</button>
                </form>

            </div>
        </section>
    </div>
</div>