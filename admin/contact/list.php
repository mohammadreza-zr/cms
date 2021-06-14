<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست  تماس ها
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> نام</th>
                    <th>ایمیل</th>
                    <th>موضوع</th>
                    <th>نمایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody><?php
                $list=listContactAdmin();
                if (isset($list)){
                foreach ($list as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['name'] ?></td>
                        <td><?php echo $val['email'] ?></td>
                        <td><?php echo $val['subject'] ?></td>
                        <td><a href="dashboard.php?m=contact&p=detail&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-info"></i></a></td>
                        <td><a href="dashboard.php?m=contact&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                endforeach;
                }else{
                    echo "<tr><td>هیچ تماسی وجود ندارد!</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </section>
    </div>
</div>