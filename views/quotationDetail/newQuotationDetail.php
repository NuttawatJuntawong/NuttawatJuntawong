<form method="get" action="">

<label>QuotationID <select name="QID">
<?php foreach($quotation_list as $quotation){
        echo "<option value = $quotation->Q_ID>
        $quotation->Q_ID</option>";}?>
</select></label><br>

<label>ProductID <select name="procID">
<?php foreach($product_list as $pro){
        echo "<option value = $pro->procID>
        $pro->proName $pro->color</option>";}?>
</select></label><br>
<label>QtyScreen<input type="text" name="QtyScr"/> </label><br>
<label>Unit<input type="text" name="Unit"/> </label><br>


<input type="hidden" name="controller" value="quotationDetail"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="addQuotationDetail"> Save</button>
</form>