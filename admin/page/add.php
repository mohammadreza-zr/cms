<?php
if (isset($_POST['btn'])){
    $data=$_POST['frm'];
    add_page($data);
    echo 'افزوده شد!';
}
?>

<h1 class="pageLables">افزودن صفحه جدید</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                افزودن صفحه جدید به وبسایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان صفحه</label>
                        <input type="text" name="frm[title]" class="form-control" placeholder="عنوان صفحه را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">کلمات کلیدی</label>
                        <input type="text" name="frm[keywords]" class="form-control" placeholder="کلمات کلیدی صفحه را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات</label>
                        <input type="text" name="frm[description]" class="form-control" placeholder="توضیحات صفحه را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">محتویات صفحه</label>
                        <textarea name="frm[body]" id="editor" class="form-control ckeditor" rows="8" placeholder="محتویات صفحه را وارد کنید"></textarea>
                        <script>
                            CKEDITOR.replace( 'editor' );
                        </script>
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
