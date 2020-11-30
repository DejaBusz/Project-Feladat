<?php
require_once "config.php";

$strTable="";

$sql="select * from blockok order by BlockId asc";
$stmt=$db->query($sql);
while($row=$stmt->fetch()){
    $strTable.="<tr><td>{$row['Id']}</td><td>{$row['blockID']}</td><td>{$row['BlockNev']}</td><td>{$row['TTB']}</td></tr>";
}
?>
<style>
    th{
        position:sticky;
        top:0;  
    }
</style>
<div>
    <?=isset($_SESSION['msg'])?$_SESSION['msg']:""?>
</div>
<div class="table" style="height:500px;">
    
    <table class="table-sm table-stripped tile-bg tabel shadow">
        <thead class="">
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