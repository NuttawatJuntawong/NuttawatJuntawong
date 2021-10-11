<?php echo "<br> Are you sure to delete this Quotation $quotation->Q_ID <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="quotation" />
    <input type="hidden" name="Q_ID" value="<?php echo $quotation->Q_ID; ?>" />
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="deleteQuotation">Delete</button>

</form>