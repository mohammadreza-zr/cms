<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست  اخبار
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> نام محصول</th>
                    <th>تصویر</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody><?php
                $list=list_widget_admin();
                if (isset($list)){
                foreach ($list as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['title'] ?></td>
                        <?php if (isset($val['img'])){ ?>
                        <td><a href="<?php echo $val['img'];?>" target="_blank"><img src="<?php echo $val['img'];?>" width="65" height="65" alt=""></a></td>
                        <?php } ?>
                        <td><a href="dashboard.php?m=widget&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashboard.php?m=widget&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                endforeach;
                }else{
                    echo "<tr><td>خبری یافت نشد!</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </section>
    </div>
</div>
