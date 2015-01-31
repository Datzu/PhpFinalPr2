Are you sure to delete the concert with the id (<?php echo $_POST['id']; ?>)?<br>
<form method="post" action="index.php">
    <input type="text" name="button" value="delete" hidden />
    <input type="text" name="delete" value="0" hidden />
    <input type="text" name="id" value="<?php echo $_POST['id'] ?>" hidden />
    <input name="submit" value="Yes" type="submit" />
</form>
<a href="./index.php"><button>No</button></a>