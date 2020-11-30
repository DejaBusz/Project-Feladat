<?php
require_once "config.php";
$optStr=$BlockId=$BlockNev=$TTB="";
$sql="SELECT Id,BlockNev from blockok";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $optStr.="<option value='{$row['Id']}'>{$row['BlockNev']}</option>";
}


//megjelenit
$selectedId=0;
if(isset($_POST['modosit'])){
    $BlockId=$_POST['BlockId'];
    $BlockNev=$_POST['BlockNev'];
    $TTB=$_POST['TTB'];
    $selectedId=$_POST['Bn'];
    $sql = 'UPDATE blockok SET blockID=:ertek1,BlockNev=:ertek2,TTB=:ertek3 WHERE Id=:ertek4';
    $sth = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute(array(':ertek1' => $BlockId, ':ertek2' => $BlockNev, ':ertek3' => $TTB ,':ertek4'=>$selectedId));
    header("Location:index.php");
}

//modositas



?>
<div>
    <form method="post">
        <div class="form-group">
        <label for="Bn">Válassz egy blockot</label>
            <select name="Bn" id="Bn" class="form-control">  
                
                <?=$optStr?>
            </select>
        </div>
        BlockId: <input type="number" name="BlockId" id="" class="form-control" value="<?=$BlockId?>" required>
        BlockNev: <input type="text" name="BlockNev" id="" class="form-control" value="<?=$BlockNev?>" required>
        TTB: <input type="number"step="0.01" name="TTB" id="" class="form-control" value="<?=$TTB?>" required>
        <input type="submit" value="Módosítás" name="modosit" class="btn btn-dark YeetGomb">
    </form>
</div>