<table border = 1>
new Staff <a href=?controller=staff&action=newStaff> click </a> <br>

<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="staff"/>
    <button type="submit" name="action" value="search">
Search</button>
</form><br>

<tr> <td>StaffID</td>
<td>ชื่อจริง</td>
<td>นามสกุล</td>
<td>วันเกิด</td>

<td>update</td><td>delete</td> </tr>
<?php foreach($staff_list as $staff){
    echo "<tr> 
    <td>$staff->S_ID</td>
    <td>$staff->S_FName</td> 
    <td>$staff->S_LName</td> 
    <td>$staff->S_DoB</td> 

    <td> <a href=?controller=staff&action=updateForm&ID=$staff->S_ID> update </a> </td>
    <td> <a href=?controller=staff&action=deleteConfirm&ID=$staff->S_ID> delete </a> </td>"; 
}
echo "</table>";
?>