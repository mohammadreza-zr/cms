<?php
$id=$_GET['id'];
$result=show_edit_cat($id);

if (isset($_POST['btn'])){
    $data=$_POST['frm'];
    edit_cat($data, $id);
    header("location: dashboard.php?m=news_cat&p=list");
    ?>
    <!--<script>
        window.location.href='dashboard.php?m=product_cat&p=list'
    </script>-->
<?php
}
?>

<h1 class="pageLables">ویرایش دسته بندی خبر</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش دسته بندی <?php echo $result['title']?>
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان دسته بندی</label>
                        <input value="<?php echo $result['title']?>" type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ثبت تغییرات</button>
                </form>

            </div>
        </section>
    </div>
</div>
