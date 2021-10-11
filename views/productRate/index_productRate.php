<table border = 1>

    new productRate<a href="?controller=productRate&action=newProductRate"> click </a><br>

    <form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="productRate"/>
        <button type="submit" name="action" value="search"> Search</button>
    </form>

    <tr>
    <td> P_ID </td>
    <td> P_Name </td>
    <td> QtyMorethan </td>
    <td> Price </td>
    <td> ScreenPrice </td>
    <td> update </td>
    <td> delete </td>
    </tr>
    <?php foreach( $productRate_list as $productRate ) {
        echo "<tr>
        <td> $productRate->P_ID </td>
        <td> $productRate->P_Name </td>
        <td> $productRate->QtyMorethan </td>
        <td> $productRate->Price </td> 
        <td> $productRate->ScreenPrice </td> 
        <td> <a href=?controller=productRate&action=updateForm&ID=$productRate->ID> update </a> </td>
        <td> <a href=?controller=productRate&action=deleteConfirm&ID=$productRate->ID> delete </a> </td> </tr>"; 
    }

    echo "</table>";
?>