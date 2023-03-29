<?php  
    namespace Razorpay\Api;
   
    include '../../vendor/razorpay/razorpay/Razorpay.php';

    $api = new Api("rzp_test_ZRnhjkjRy355YS", "1xkRWUOZ12kwgsdZ8CdsiLLt");
    $currency = "INR";
    $amount = $FinalAmt;

    $orderData = [
        'amount'          => $amount,
        'currency'        => $currency
    ];

    $api->order->create($orderData);

    
    header('location: ../../payment_success.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Created</title>
</head>
<body>
    <h1>Order Created Successfully <?php echo $amount; ?></h1>
</body>
</html>