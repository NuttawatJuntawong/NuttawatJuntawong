<table border = 1>
new Staff Position <a href=?controller=staffposition&action=newStaffposition> click </a> <br>
สถานะ 0 = เต็ม , 1 = เปิดรับ , 2 = ไม่มี <br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="staffposition"/>
    <button type="submit" name="action" value="search">
Search</button>
</form><br>

<tr> <td>Position ID</td>
<td>ชื่อตำแหน่งงาน</td>
<td>รายได้ต่อวัน</td>
<td>หน้าที่</td>
<td>สถานะ</td>

<td>update</td><td>delete</td> </tr>
<?php foreach($staffposition_list as $position){
    echo "<tr> 
    <td>$position->SP_ID</td>
    <td>$position->SP_Name</td> 
    <td>$position->SP_Salary</td> 
    <td>$position->SP_Duty</td> 
    <td>$position->SP_Status</td> 

    <td> <a href=?controller=staffposition&action=updateForm&ID=$position->SP_ID> update </a> </td>
    <td> <a href=?controller=staffposition&action=deleteConfirm&ID=$position->SP_ID> delete </a> </td>"; 
}
echo "</table>";
?>