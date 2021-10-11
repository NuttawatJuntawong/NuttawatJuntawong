<form method="get" action="">

<label>สินค้า <select name="P_ID">
<?php foreach($product_list as $product){
        echo "<option value = $product->ID";
        if($product->ID == $productRate->P_ID) {echo " selected='selected'";}
        echo">$product->Name</option>";}?>
</select></label><br>

<label>จำนวนมากกว่า <input type="text" name="QtyMoreThan" value="<?php echo $productRate->QtyMorethan; ?>"/> </label><br>
<label>ราคา <input type="text" name="Price" value="<?php echo $productRate->Price; ?>"/> </label><br>
<label>ราคาสกรีน <input type="text" name="ScreenPrice" value="<?php echo $productRate->ScreenPrice; ?>"/> </label><br>

<input type="hidden" name="controller" value="productRate"/>
<input type="hidden" name="ID" value="<?php echo $productRate->ID; ?>"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="update"> Save</button>

</form>