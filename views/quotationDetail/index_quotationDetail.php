<table border = 1>
new QuotationDetail <a href=?controller=quotationDetail&action=newQuotationDetail> click </a> <br>

<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="quotationDetail"/>
    <button type="submit" name="action" value="searchQuotationDetail">
Search</button>
</form><br>
<tr> <td>Quotation ID</td>
<td>Product ID</td>
<td>Product Name</td>
<td>Product Color</td>
<td>Unit</td>
<td>QtyScreen</td>
<td>Unit Price</td>
<td>Amount</td>


<td>update</td><td>delete</td> </tr>
<?php foreach($quotationDetail_list as $quotationDetail){
    echo "<tr> 
    <td>$quotationDetail->Qid</td>
    <td>$quotationDetail->Pid</td> 
    <td>$quotationDetail->Pname</td> 
    <td>$quotationDetail->Pcolor</td> 
    <td>$quotationDetail->Unit</td> 
    <td>$quotationDetail->QDScr</td> 
    <td>$quotationDetail->UnitPrice</td> 
    <td>$quotationDetail->Total</td> 
    <td> <a href=?controller=quotationDetail&action=updateFormQuotationDetail&ID=$quotationDetail->QDid> update </a> </td>
    <td> <a href=?controller=quotationDetail&action=deleteConfirmQuotationDetail&ID=$quotationDetail->QDid> delete </a> </td>"; 
}
echo "</table>";
?>