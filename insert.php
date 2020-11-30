<?php
require_once "config.php";

if(isset($_POST['beir'])){
  
    $blockid=$_POST['blockid'];
    $nev=$_POST['nev'];
    $ttb=$_POST['ttb'];
    $sql = 'INSERT INTO blockok (blockID,BlockNev,TTB) VALUES (:ertek1,:ertek2,:ertek3)';
    $sth = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(':ertek1' => $blockid, ':ertek2' => $nev, ':ertek3' => $ttb));
    header("Location:index.php");
    
}
?>
<div class="col-6">
    <form method="post">
        Block Id: <input type="number" name="blockid" id="" class="form-control" required>
        Block Név: <input type="text" name="nev" id="" class="form-control" required>
        Time To Break: <input type="number"step="0.01" name="ttb" id="" class="form-control" required>
        <input type="submit" value="Beír" name="beir" class="btn btn-dark YeetGomb">
    </form>
</div>