<table border=1>
    <br>
    new quotation <a href="?controller=quotation&action=newQuotation">click</a><br>
    <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="quotation" />
        <button type="submit" name="action" value="searchQuotation"> Search </button>
    </form>
    <br>
    <br>
    <tr>
        <td>ID</td>
        <td>Date</td>
        <td>cusName</td>
        <td>cusAddress</td>
        <td>cusPhone</td>
        <td>empName</td>
        <td>update</td>
        <td>delete</td>
    </tr>
    <?php foreach ($quotation_list as $quotation) {
        echo "<tr> 
    <td>$quotation->Q_ID</td>
    <td>$quotation->Q_Date</td> 
    <td>$quotation->C_Name</td>
    <td>$quotation->C_Address</td>
    <td>$quotation->C_Phone</td> 
    <td>$quotation->E_Name</td> 
    <td> <a href=?controller=quotation&action=updateFormQuotation&Q_ID=$quotation->Q_ID> update </a> </td>
    <td> <a href=?controller=quotation&action=deleteConfirmQuotation&Q_ID=$quotation->Q_ID> delete </a> </td>
    </tr>";
    }
    echo "</table>";
    ?>