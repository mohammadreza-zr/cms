<?php
$id=$_GET['id'];
deletenews($id);
header("Location: dashboard.php?m=news&p=list");
?>
<!--<script>
    window.location.href='dashboard.php?m=product&p=list'
</script>-->
