<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> 

    <?php
    use App\Models\Transaccion;

    $donation = transaccion::where('transaction_id', $transaction_id)->get();
    

    echo "Gracias por tu donación de $".$donation[0]->amount ."!, " . $donation[0]->payer_name . "!";



    ;?>
</body>
</html>