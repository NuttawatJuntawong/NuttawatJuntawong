<form method="get" action="">

<label>QuotationID <select name="QID">
<?php foreach($quotation_list as $quotation){
          echo "<option value = $quotation->Q_ID";
          if($quotation->Q_ID==$quotationDetail->Qid){echo " selected='selected'";}
          echo ">$quotation->Q_ID</option>";
        }?>
</select></label><br>

<label>ProductID <select name="procID">
<?php foreach($product_list as $pro){
        echo "<option value = $pro->procID";
        if($pro->procID==$quotationDetail->PCid){echo " selected='selected'";}
        echo ">$pro->proName $pro->color</option>";
        }?>
</select></label><br>

<label>QtyScreen<input type="text" name="QtyScr"/> </label><br>
<label>Unit<input type="text" name="Unit"/> </label><br>

<input type="hidden" name="controller" value="quotationDetail"/>
<input type="hidden" name="ID" value="<?php echo $quotationDetail->QDid; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="updateQuotationDetail"> Update</button>
</form>