<?php echo "<br>ไม่สามารถเพิ่ม Staff Daily ได้<br><br>**เนื่องจากคุณ$S_FName $S_LName 
            <br>ได้ลงข้อมูลของจุดตรวจ  $Station_Name 
            <br>วันที่ $StationDate_Date
            <br>เวลา  $Station_StartTime น. ไปแล้ว<br><br>
            ";?>

<form method="get" action="">

<input type="hidden" name="controller" value="staffdaily"/>
<button type="submit" name="action" value="newStaffdaily"> Back</button>

</form>