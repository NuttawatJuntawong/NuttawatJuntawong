<?php echo "<br> Are you sure to delete this quotationDetail <br>
            <br> QID:$quotationDetail->Qid <br>$quotationDetail->Pname สี$quotationDetail->Pcolor <br>จำนวน:$quotationDetail->Unit <br>จำนวนที่Screen: $quotationDetail->QDScr <br>";?>

<form method="get" action="">

<input type="hidden" name="controller" value="quotationDetail"/>
<input type="hidden" name="ID" value="<?php echo $quotationDetail->QDid; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="deleteQuotationDetail"> Delete</button>

</form>