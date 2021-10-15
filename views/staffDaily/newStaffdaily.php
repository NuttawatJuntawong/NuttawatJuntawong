<form method="get" action="">

<label>ชื่อ นามสกุล<select name="S_ID">
<?php foreach($staff_list as $staff){
        echo "<option value = $staff->S_ID>
        $staff->S_FName $staff->S_LName</option>";}?>
</select></label><br>

<label>ตำแหน่งงาน <select name="SP_ID">
<?php foreach($staffposition_list as $position){
        echo "<option value = $position->SP_ID>
        $position->SP_Name ,รายได้ต่อวัน $position->SP_Salary บาท</option>";}?>
</select></label><br>

<label>จุดตรวจเชิงรุก <select name="StationDate_ID">
<?php foreach($stationdate_list as $stationdate){
        echo "<option value = $stationdate->StationDate_ID>
        $stationdate->StationDate_Date $stationdate->Station_Name ตั้งแต่เวลา $stationdate->Station_StartTime น. </option>";}?>
</select></label><br>



<input type="hidden" name="controller" value="staffdaily"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="addStaffdaily"> Save</button>
</form>