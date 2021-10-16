<?php echo "<br> Are you sure to delete this StaffDaily <br>
            <br> StaffDaily ID: $Staffdaily->SD_ID <br>ชื่อ - นามสกุล: $Staffdaily->S_FName $Staffdaily->S_LName <br>ตำแหน่งงาน: $Staffdaily->SP_Name <br> 
            จุดตรวจ: $Staffdaily->Station_Name <br>วันที่: $Staffdaily->StationDate_Date เวลา: $Staffdaily->Station_StartTime น.<br> <br>";?>

<form method="get" action="">

<input type="hidden" name="controller" value="staffdaily"/>
<input type="hidden" name="ID" value="<?php echo $Staffdaily->SD_ID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Delete</button>

</form>