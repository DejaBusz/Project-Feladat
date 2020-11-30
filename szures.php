<?php
require_once "config.php";
$strTable="";
if(isset($_POST['beir'])){
    

    $blockid;
    $nev=$_POST['nev'];
    $ttb;
    $sql = 'SELECT Id, blockID, BlockNev, TTB FROM blockok WHERE BlockNev like  \'%' . $nev . '%\'';
    $stmt=$db->query($sql);
    while($row=$stmt->fetch()){
        $strTable.="<tr><td>{$row['Id']}</td><td>{$row['blockID']}</td><td>{$row['BlockNev']}</td><td>{$row['TTB']}</td></tr>";
    
    }
    
}
?>
<div class="col-6">
    <form method="post"> 
        Block Név: <input type="text" name="nev" id="" class="form-control" required>
        <input type="submit" value="Keres" name="beir" class="btn btn-dark YeetGomb">
    </form>
    <div>
    <?=isset($_SESSION['msg'])?$_SESSION['msg']:""?>
</div>
<div class="table" style="height:500px;">
    
    <table class="table-sm table-stripped tile-bg">
        <thead>
            <th>Azonosító</th>
            <th>BlockId</th>
            <th>Név</th>
            <th>Time To Break</th>
        </thead>
        <tbody>
            <?=$strTable?>
        </tbody>
    </table>
</div>
</div>