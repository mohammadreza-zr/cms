<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست  محصولات
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> نام محصول</th>
                    <th> دسته بندی</th>
                    <th>تصویر</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody><?php
                $listPro=listproadmin();
                if (isset($listPro)){
                foreach ($listPro as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['title'] ?></td>
                        <td>
                            <?php
                            if ($val['procat'] == 0){
                                echo 'سرگروه';
                            }else{
                                echo selectProCat($val['procat']);
                            }
                            ?>
                        </td>
                        <td><a href="<?php echo $val['img'];?>" target="_blank"><img src="<?php echo $val['img'];?>" width="65" height="65" alt=""></a></td>
                        <td><a href="dashboard.php?m=product&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashboard.php?m=product&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                endforeach;
                }else{
                    echo "<tr><td>محصولی یافت نشد!</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
