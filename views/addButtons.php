<?php
    
    function getButton($id) {
        echo "<a href='./views/modifyConcert.php?id=".$id."'><input type='button' value='Modify'/></a>";
        echo "<a href='./controls/deleteConcert.php?id=".$id."'><input type='button' value='Delete'/></a>";
    }

?>