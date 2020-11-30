<?php
require_once "config.php";

if(isset($_POST['beir'])){
  
    $nev=$_POST['nev'];
    
    $sql = 'DELETE FROM `blockok` WHERE BlockNev=:ertek1';
    $sth = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(':ertek1' => $nev));
    header("Location:index.php");
    
}
?>
<div class="col-6">
    <form method="post" onsubmit="return confirm('Biztos törölni akarod ezt a Blockot?');">
        Block Név: <input type="text" name="nev" id="" class="form-control" required>
        <input type="submit" value="Töröl" name="beir" class="btn btn-danger YeetGomb">
    </form>
</div>