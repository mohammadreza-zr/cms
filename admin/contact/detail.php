<?php
    $id=$_GET['id'];
    $result=show_detail($id);
?>
<h1 class="pageLabels" xmlns="http://www.w3.org/1999/html"><?php echo $result['subject']?></h1>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2" >
        <section class="panel">
            <header class="panel-heading">
                <?php echo $result['name'].": ".$result['subject']?>
            </header>
            <div class="panel-body">
                <h6>
                    <h4>زمان:</h4>
                    <?php echo $result['time']?>
                </h6>
                <p>
                    <h4>متن پیام:</h4>
                    <?php echo $result['text']?>
                <br>
                <h5>
                    <h4>ایمیل:</h4>
                    <?php echo $result['email']?>
                </h5>
            </div>
        </section>
    </div>
</div>