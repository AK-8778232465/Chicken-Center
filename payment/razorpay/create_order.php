<?php  
    namespace Razorpay\Api;

    include '../../vendor/razorpay/razorpay/Razorpay.php';

    $api = new Api("rzp_test_TrmtN5S7FTrSpH", "Vi9DlT4zXo0FkExlckgJk0UA");
    $currency = "INR";
    $amount = $FinalAmt;

    $orderData = [
        'amount'          => $amount,
        'currency'        => $currency
    ];

    $api->order->create($orderData);

    unset($_SESSION['cart_p_current_price']);
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
    <h1>Order Created Successfully</h1>
</body>
</html>