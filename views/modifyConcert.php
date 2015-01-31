<?php
    $concert = $_SESSION['concerts'][$_POST['id']];
?>

<form action="index.php" method="post">
    <table>
        <tr>
            <td>Title:</td>
            <td><input type="text" name="title" value=<?php echo $concert->getTitle(); ?> /></td>
        </tr>
        <tr>
            <td>Group:</td>
            <td><input type="text" name="group" value=<?php echo $concert->getGroup(); ?> /></td>
        </tr>
        <tr>
            <td>Date:</td>
            <td><input type="text" name="date" value=<?php echo $concert->getDate(); ?> /></td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="city" value=<?php echo $concert->getCity(); ?> /></td>
        </tr>
        <tr>
            <td>Location:</td>
            <td><input type="text" name="location" value=<?php echo $concert->getLocation(); ?> /></td>
        </tr>
    </table>
    <input type='text' name='id' value='<?php echo $concert->getId(); ?>' hidden />
    <input type='text' name='modify' value='1' hidden />
    <input type='text' name='button' value='modify' hidden />
    <input type="submit" name="submit" value="Modify"/>
</form>
<a href='./index.php'><button>Cancel</button></a>
