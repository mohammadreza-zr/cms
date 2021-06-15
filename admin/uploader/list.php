<style>
    .tooltip {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -60px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست  فایل ها
                <button><a href="dashboard.php?m=uploader&p=add">افزودن</a></button>
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th>عنوان</th>
                    <th>آدرس</th>
                    <th>حجم</th>
                    <th>تصویر</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody><?php
                $list=list_file();
                if (isset($list)){
                foreach ($list as $val):
                    ?>
                    <tr>
                        <td><?php echo $val['title'] ?></td>
                        <td>
                            <div class="tooltip" style="opacity: 1">
                                <input  onclick="myFunction(this)" type="text" style="direction: ltr;border: none;padding: 5px" size="40" value="admin/<?php echo $val['img'] ?>">
                                <span class="tooltiptext">
                                    برای کپی کلیک کنید!
                                </span>
                            </div>
                        </td>
                        <td><?php echo $val['size'] ?></td>
                        <td><a href="<?php echo $val['img'];?>" target="_blank"><img src="<?php echo $val['img'];?>" width="65" height="65" alt=""></a></td>
                        <td><a href="dashboard.php?m=uploader&p=delete&id=<?php echo $val['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                endforeach;
                }else{
                    echo "<tr><td>فایلی یافت نشد!</td></tr>";
                }
                ?>
                </tbody>
            </table>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                function myFunction(value) {
                    var copyText = value;
                    copyText.select();
                    copyText.setSelectionRange(0, 99999)
                    document.execCommand("copy");
                }
            </script>
        </section>
    </div>
</div>