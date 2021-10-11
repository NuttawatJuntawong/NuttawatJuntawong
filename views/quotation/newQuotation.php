<br>
<form method="get" action="">
    <label>เลขใบเสนอราคา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Q_ID" /></label><br>
    <label>วันที่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" name="Q_Date" /></label><br>
    <label>ลูกค้า&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="C_ID">
            <?php
            foreach ($customer_list as $customer) {
                echo "<option value=$customer->C_ID>$customer->C_Name</option>";
            } ?> </select></label><br>
    <label>พนักงาน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="E_ID">
            <?php
            foreach ($employee_list as $employee) {
                echo "<option value=$employee->E_ID>$employee->E_Name</option>";
            } ?></select></label><br><br>

    <input type="hidden" name="controller" value="quotation" />
    <button type="submit" name="action" value="index"> Back</button>
    <button type="submit" name="action" value="addQuotation"> Save</button>
</form>