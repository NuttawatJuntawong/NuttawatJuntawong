
<form method="get" action="">

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
<input type="hidden" name="ID" value="<?php echo $staffdaily->SD_ID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Update</button>
</form>