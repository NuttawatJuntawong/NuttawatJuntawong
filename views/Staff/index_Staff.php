<table border = 1>
new Staff <a href=?controller=quotationDetail&action=newQuotationDetail> click </a> <br>

<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="quotationDetail"/>
    <button type="submit" name="action" value="searchQuotationDetail">
Search</button>
</form><br>
<tr> <td>StaffID</td>
<td>FirstName</td>

<td>update</td><td>delete</td> </tr>
<?php foreach($staffList as $staff){
    echo "<tr> 
    <td>$$staff->S_ID</td>
    <td>$$staff->S_FName</td> 
 
    <td> <a href=?controller=quotationDetail&action=updateFormQuotationDetail&ID=$quotationDetail->QDid> update </a> </td>
    <td> <a href=?controller=quotationDetail&action=deleteConfirmQuotationDetail&ID=$quotationDetail->QDid> delete </a> </td>"; 
}
echo "</table>";
?>