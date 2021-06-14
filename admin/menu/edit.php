<?php
$id=$_GET['id'];
$result=show_edit_menu($id);

if (isset($_POST['btn'])){
    $data=$_POST['frm'];
    edit_menu($data, $id);
    header("location: dashboard.php?m=menu&p=list");
    ?>
    <!--<script>
        window.location.href='dashboard.php?m=menu&p=list'
    </script>-->
<?php
}
?>

<h1 class="pageLables">ویرایش منو</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش منو <?php echo $result['title']?>
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان منو</label>
                        <input value="<?php echo $result['title']?>" type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">آدرس منو</label>
                        <input value="<?php echo $result['url']?>" type="text" name="frm[url]"  class="form-control" placeholder="لینک منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="frm[parent]">
                            <option value='0'>سرگروه</option>
                            <?php
                                $submenu=submenu();
                                foreach ($submenu as $subs){
                                    echo "<option value='$subs[id]'";
                                    if ($result['chid']==$subs['id']){
                                        echo ' selected';
                                    }
                                    echo ">$subs[title]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <label for="exampleInputPassword1">وضعیت</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" value="1" <?php if ($result['status']==1){echo 'checked';} ?> >فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" value="0" <?php if ($result['status']==0){echo 'checked';} ?> >فیر فعال
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب نمایش</label>
                        <input value="<?php echo $result['sort']?>" type="text" name="frm[sort]"  class="form-control" placeholder="ترتیب نمایش را وارد کنید">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ثبت تغییرات</button>
                </form>

            </div>
        </section>
    </div>
</div>
