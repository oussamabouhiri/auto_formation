<!DOCTYPE html>
<html>
<head>
    <title>Friends Borrowed Money</title>
</head>
<body>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Amount</th>
    </tr>

<?php

$FriendsBorrowed = [
    ["name"=>"Ahemd","amount"=>23],
    ["name"=>"Hind","amount"=>120],
    ["name"=>"oussama","amount"=>90],
    ["name"=>"hicham","amount"=>45],
    ["name"=>"toria","amount"=>200]
];

$total = 0;

foreach($FriendsBorrowed as $friend){

    $total += $friend["amount"];

    echo "<tr>";

    echo "<td>".$friend["name"]."</td>";

    if($friend["amount"] >= 100){
        echo "<td><mark>".$friend["amount"]."</mark></td>";
    }else{
        echo "<td>".$friend["amount"]."</td>";
    }

    echo "</tr>";
}

?>

<tr>
    <td><b>Total</b></td>
    <td><?php echo $total; ?></td>
</tr>

</table>

</body>
</html>