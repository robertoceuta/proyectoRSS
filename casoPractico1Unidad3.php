<?php
$cardinal=1;
$index=0;
$ordinal=['primero', 'segundo', 'tercero', 'cuarto', 'quinto', 'sexto', 'séptimo','octavo', 'noveno','décimo'];
$fondo='fondoclaro';

?>
<head>
    <style>
        table{
            border: 3px solid white;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }
        th{
            background:  rgba(65, 62, 255,0.582);
        }
        tr{
            height: 3vh;
        }
        td{
            width: 5vw;
        }
        .fondoclaro{
            background-color: #90CAF9;
        }
    </style>
</head>

<table>
    <tr>
        <th>cardinal</td>
        <th>ordinal</td>        
    </tr>
    <?php
        while($cardinal<=10){
    ?>
    <tr class=<?php
            if($cardinal%2==0){
                echo("$fondo");
            }
        ?>>
        <td ><?php echo ("$cardinal");?></td>
        <td ><?php echo ("$ordinal[$index]");?></td>
    </tr>
    <?php
        $index++;
        $cardinal++;
        }       
    ?>


</table>



<?php

$cardinalSwitch=1;
$indexSwitch=0;
?>


<table>
    <tr>
        <th>cardinalSwitch</th>
        <th>OrdinalSwitch</th>
    </tr>
<?php
while($cardinalSwitch<=10){
switch ($indexSwitch) {
    case 0:
        echo "<tr>
        <td class='fondoclaro'>$cardinalSwitch</td>
        <td>$ordinal[$indexSwitch]</td>
        </tr>";
        break;
    case 1:
        echo "<tr>
        <td>$cardinalSwitch</td>
        <td class='fondoclaro'>$ordinal[$indexSwitch]</td>
        </tr>";
        break;
    case 2:
        echo "<tr>
        <td class='fondoclaro'>$cardinalSwitch</td>
        <td>$ordinal[$indexSwitch]</td>
        </tr>";
        break;
    case 3:
        echo "<tr>
        <td>$cardinalSwitch</td>
        <td class='fondoclaro'>$ordinal[$indexSwitch]</td>
        </tr>";
        break;
    case 4:
        echo "<tr>
        <td class='fondoclaro'>$cardinalSwitch</td>
        <td>$ordinal[$indexSwitch]</td>
        </tr>";
        break;
    case 5:
        echo "<tr>
        <td>$cardinalSwitch</td>
        <td class='fondoclaro'>$ordinal[$indexSwitch]</td>
        </tr>";
        break;
    case 6:
        echo "<tr>
        <td class='fondoclaro'>$cardinalSwitch</td>
        <td>$ordinal[$indexSwitch]</td>
        </tr>";
        break;
    case 7:
        echo "<tr>
        <td>$cardinalSwitch</td>
        <td class='fondoclaro'>$ordinal[$indexSwitch]</td>
        </tr>";
        break;
    case 8:
        echo "<tr>
        <td class='fondoclaro'>$cardinalSwitch</td>
        <td>$ordinal[$indexSwitch]</td>
        </tr>";
        break;
    case 9:
        echo "<tr>
        <td>$cardinalSwitch</td>
        <td class='fondoclaro'>$ordinal[$indexSwitch]</td>
        </tr>";
        break;
  
    default:
       echo "No deberías leerme macho.";
}
$cardinalSwitch++;
$indexSwitch++;
}
?>

</table>
