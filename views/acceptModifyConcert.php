<?php

    session_start();

?>
<table>
    <tr>
        <td>Are you sure you want to modify the concert with the id(<?php echo $_SESSION['tmp']['id']; ?>)?</td>
        <td><a href="../controls/acceptModifyConcert.php?id=<?php echo $_SESSION['tmp']['id']; ?>"><button>Accept</button></a></td>
        <td><a href='../index.php'><button>Cancel</button></a></td>
    </tr>
</table>