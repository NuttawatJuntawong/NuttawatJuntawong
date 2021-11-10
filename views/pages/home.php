<p> Welcome to our homepage </p>

<table border = 1>

<tr> <td>ชื่อจุดตรวจ</td>
<td>ที่อยู่จุดตรวจ</td>
<td>วันที่</td>
<td>เวลา</td>
<td>จำนวนพนักงาน</td>

<?php foreach($summary_list as $summary){
    echo "<tr> 
    <td>$summary->Station_Name</td>
    <td>$summary->Station_Address</td> 
    <td>$summary->StationDate_Date</td> 
    <td>$summary->Station_StartTime</td> 
    <td>$summary->count</td> 
    "; 
}
echo "</table>";
?>