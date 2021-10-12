<form method="get" action="">

<label>StaffID<input type="text" name="S_ID"/> </label><br>
<label>FirstName<input type="text" name="S_FName"/> </label><br>
<label>LastName<input type="text" name="S_LName"/> </label><br>
<label>DoB<input type="date" name="S_DoB"/> </label><br>


<input type="hidden" name="controller" value="staff"/>
<button type="submit" name="action" value="index"> Back</button>
<button type="submit" name="action" value="addStaff"> Save</button>
</form>