Are you sure to modify the concert with the id (<?php echo $_POST['id']; ?>)?<br>
<form method="post" action="index.php">
    <input type='text' name='modify' value='2' hidden />
    <input type="text" name="button" value="modify" hidden />
    <input type="text" name="id" value="<?php echo $_POST['id'] ?>" hidden />
    <input name="submit" value="Yes" type="submit" />
</form>
<a href="./index.php"><button>No</button></a>