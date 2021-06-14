<?php
$id=$_GET['id'];
deletecat($id);
header("Location: dashboard.php?m=product_cat&p=list");
?>
<!--<script>
    window.location.href='dashboard.php?m=product_cat&p=list'
</script>-->
