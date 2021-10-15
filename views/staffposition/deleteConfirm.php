<?php echo "<br> Are you sure to delete this Staff Position<br>
            <br> Staff Position ID: $Staffposition->SP_ID <br>ตำแหน่ง: $Staffposition->SP_Name  <br>หน้าที่ : $Staffposition->SP_Duty<br>";?>

<form method="get" action="">

<input type="hidden" name="controller" value="staffposition"/>
<input type="hidden" name="ID" value="<?php echo $Staffposition->SP_ID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>

</form>