 <?php
    while($rows = mysql_fetch_array($result)){
        echo 'content:'.$rows['content'].'<br>';

?>

<form action="action.php" method="psot" name = "Update_Form">
    <p>update this liuyan:</p>
    <textarea name="update_content" id="update" cols="50" rows="3"></textarea>
    // <input type="hidden" name="id" value="<?php ehco $rows['id'];?>"> 
    <input type="submit" name= "action" value="update">
</form>
        <a href="action.php?action=delete$id=<?php echo $rows['id'];?>"><button>delete</button></a>

