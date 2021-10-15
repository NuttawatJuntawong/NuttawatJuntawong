<table border = 1>
new Staff Daily <a href=?controller=staffdaily&action=newStaffdaily> click </a> <br>

<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="staff"/>
    <button type="submit" name="action" value="search">
Search</button>
</form><br>

<tr> <td>Staff Daily ID</td>
<td>ชื่อจริง</td>
<td>นามสกุล</td>
<td>ตำแหน่งงาน</td>
<td>รายได้ต่อวัน</td>
<td>ชื่อจุดตรวจ</td>
<td>เวลาเริ่ม</td>
<td>วันที่</td>


<td>update</td><td>delete</td> </tr>
<?php foreach($staffdaily_list as $staffdaily){
    echo "<tr> 
    <td>$staffdaily->SD_ID</td>
    <td>$staffdaily->S_FName</td> 
    <td>$staffdaily->S_LName</td> 
    <td>$staffdaily->SP_Name</td>
    <td>$staffdaily->SP_Salary</td> 
    <td>$staffdaily->Station_Name</td> 
    <td>$staffdaily->Station_StartTime</td>  
    <td>$staffdaily->StationDate_Date</td> 

    <td> <a href=?controller=staffdaily&action=updateForm&ID=$staffdaily->SD_ID> update </a> </td>
    <td> <a href=?controller=staffdaily&action=deleteConfirm&ID=$staffdaily->SD_ID> delete </a> </td>"; 
}
echo "</table>";
?>