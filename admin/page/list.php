<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست  صفحه ها
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>کلمات کلیدی</th>
                    <th>آدرس صفحه</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody><?php
                $list=list_page_admin();
                if (isset($list)){
                foreach ($list as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['title'] ?></td>
                        <td><?php echo $val['keywords'] ?></td>
                        <td>
                            <div class="tooltip" style="opacity: 1">
                                <input class="myInput" onclick="myFunction(this)" style="direction: ltr;border: none" size="20" type="text" value="page.php?id=<?php echo $val['id'] ?>">
                                <div class="tooltiptext">
                                    برای کپی کلیک کنید.
                                </div>
                            </div>
                        </td>
                        <td><a href="dashboard.php?m=page&p=edit&id=<?php echo $val['id']; ?>" class="btn btn-primary btn-xs"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashboard.php?m=page&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                endforeach;
                }else{
                    echo "<tr><td>صفحه ای وجود ندارد!</td></tr>";
                }
                ?>
                </tbody>
            </table>
            <script>
                document.querySelectorAll('.myInput').forEach(item => {
                    item.addEventListener('mouseleave', event => {
                        item.parentNode.childNodes[3].innerText='برای کپی کلیک کنید.';
                    })
                })
            </script>
        </section>
    </div>
</div>
