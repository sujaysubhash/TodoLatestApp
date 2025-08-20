<?php
if(isset($_POST['recordId'])) {
    require_once 'Operation.php';
    Operation::removeRecord();
}

?>  