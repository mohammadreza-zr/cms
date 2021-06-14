<?php
if (isset($_POST['btn'])){
    $data=$_POST['frm'];
    addmenu($data);
    echo 'افزوده شد';
}
?>

<h1 class="pageLables">افزودن منو جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن منو جدید به وبسایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان منو</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">آدرس منو</label>
                        <input type="text" name="frm[url]"  class="form-control" placeholder="لینک منو را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">سرگروه</label>
                        <select class="form-control input-lg m-bot15" name="frm[parent]">
                            <option value='0'>سرگروه</option>
                            <?php
                                $submenu=submenu();
                                foreach ($submenu as $subs){
                                    echo "<option value='$subs[id]'>$subs[title]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <label for="exampleInputPassword1">وضعیت</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" value="1">فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="frm[status]" value="0">فیر فعال
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب نمایش</label>
                        <input type="text" name="frm[sort]"  class="form-control" placeholder="ترتیب نمایش را وارد کنید">
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
