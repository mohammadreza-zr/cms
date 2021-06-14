<?php
    $id=$_GET['id'];
    $result=show_edit_product($id);
    if (isset($_POST['btn'])){
        $data=$_POST['frm'];
        edit_product($data, $id,'img',$result['img']);
        header("location: dashboard.php?m=product&p=list");
    }
?>
<h1 class="pageLables">ویرایش محصول</h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                ویرایش محصول
            </header>
            <div class="panel-body">
                <form role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان محصول</label>
                        <input value="<?php echo $result['title'];?>" type="text" name="frm[title]" class="form-control" placeholder="عنوان محصول را وارد کنید">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea name="frm[text]" id="editor" class="form-control ckeditor" rows="8" placeholder="توضیحات محصول را وارد کنید"><?php echo $result['text'];?></textarea>
                        <script>
                            CKEDITOR.replace( 'editor' );
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">دسته بندی</label>
                        <select class="form-control input-lg m-bot15" name="frm[procat]">
                            <option value='0'>سرگروه</option>
                            <?php
                            $procat=procat();
                            foreach ($procat as $subs){
                                echo "<option value='$subs[id]'";
                                if ($result['procat'] == $subs['id']){
                                    echo "selected";
                                }
                                echo ">$subs[title]</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="img" id="exampleInputFile">
                        <img src="<?php echo $result['img']?>" width="60" >
                    </div>
                    <button type="submit" name="btn" class="btn btn-info">ثبت تغییرات</button>
                </form>

            </div>
        </section>
    </div>
</div>