<?php  
    namespace Razorpay\Api;

    include '../../vendor/razorpay/razorpay/Razorpay.php';

    $api = new Api("rzp_test_TrmtN5S7FTrSpH", "Vi9DlT4zXo0FkExlckgJk0UA");


    $orderData = [
        'amount'          => 119900,
        'currency'        => 'INR'
    ];

    $api->order->create($orderData);

?>