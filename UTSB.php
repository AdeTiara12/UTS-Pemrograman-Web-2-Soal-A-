<?php 
$Dicount = [
    [
        "tanggal" => "08 november 2023", 
        "product" => [
            "Pepsodent" => 300000,
            "Rinso" => 400000,
            "Downy" => 180000,
            "Dove" => 440000],
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount</title>
</head>
<body>
<div style="border: 1px solid #000;padding: 3px; width:fit-content">
<?php
foreach ($Dicount as $discountTotal) {
    $total = $discountTotal["product"]["Pepsodent"]+$discountTotal["product"]["Rinso"]+$discountTotal["product"]["Downy"]+$discountTotal["product"]["Dove"];

    if ($total >= 150000 ) {
        $discount=(($total*10)/100);
        $total_bayar=($total-$discount);
    }else if ($total >= 200000) {
        $discount=(($total*10)/100);
        $total_bayar=($total-$discount);
    }

    echo "<p>"."Tanggal Produksi    :".$discountTotal["tanggal"]."</p>";
    echo "<p>"."Product             :"."</p>";
    echo "<p>"."Pepsodent(2X10.000) :"."     Rp ".$discountTotal["product"]["Pepsodent"]."</p>";
    echo "<p>"."Rinso(3X20.000)     :"."     Rp ".$discountTotal["product"]["Rinso"]."</p>";
    echo "<p>"."Downy(2X12.000)     :"."     Rp ".$discountTotal["product"]["Downy"]."</p>";
    echo "<p>"."Dove(2X22.000)      :"."     Rp ".$discountTotal["product"]["Dove"]."</p>";
    echo "<p>"."Total               :"."     Rp ".$total."</p>";
    echo "<p>"."Discount            :"."     Rp ".$discount."</p>";
    echo "<p>"."Total Pembayaran    :"."     Rp ".$total_bayar."</p>";
}
?>
</div>
</div>
</body>
</html>