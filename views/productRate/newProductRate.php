<form method="get" action="">

<label>สินค้า <select name="P_ID">
<?php foreach($product_list as $product){
        echo "<option value = $product->ID
        >$product->Name</option>";}?>
</select></label><br>

<label>จำนวนมากกว่า <input type="text" name="QtyMoreThan"/> </label><br>
<label>ราคา <input type="text" name="Price"/> </label><br>
<label>ราคาสกรีน <input type="text" name="ScreenPrice"/> </label><br>

<input type="hidden" name="controller" value="productRate"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="addProductRate"> Save</button>

</form>