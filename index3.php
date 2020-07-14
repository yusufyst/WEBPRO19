<?php
echo "<table class='table table-bordered'>";
echo "<tr class='info'>
        <td>Isi</td>
        <td>Sangat Baik</td>
        <td>Baik</td>
        <td>Sedang</td>
        <td>Buruk</td>";
$table=mysql_query("select * from polling order by nomor desc");
while($dbtable=mysql_fetch_assoc($table)){
    echo "<tr>
            <td>".$dbtable["isi"]."</td>
            <td>".$dbtable["sangat_baik"]."</td>
            <td>".$dbtable["baik"]."</td>
            <td>".$dbtable["sedang"]."</td>
            <td>".$dbtable["buruk"]."</td>";
    }
 
echo "</table>";
?>