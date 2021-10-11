<?php echo "<br> Are you sure to delete this productRate <br>
            <br> $productRate->P_ID $productRate->P_Name ที่จำนวนมากกว่า $productRate->QtyMorethan <br>";?>

<form method="get" action="">

<input type="hidden" name="controller" value="productRate"/>
<input type="hidden" name="ID" value="<?php echo $productRate->ID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="delete"> Save</button>

</form>