<script>
    var a= {'name':'tom','age'35,'sex':'man'};
    document.write(a.name+'<br>');
    document.write(a['age']);

</script>

<?php 
    $age = array('zhangsan'=>30,'lisi'=>35,'zhaoliu'=>40);
    echo $age['zhangsan'];
    echo $age['lisi'];
    echo $age[0];
?>