<!DOCTYPE html>
<html>
<head>
    <title>Order Created</title>
</head>
<body>
    <h1>Order Created</h1>
    <p>Order ID: {{ $order->id }}</p>
    <p>FIO: {{ $order->fio }}</p>
    <p>Company Name: {{ $order->company_name }}</p>
    <p>Email: {{ $order->email }}</p>
    <p>Phone: {{ $order->phone }}</p>
    <p>Contact: {{ $order->contact }}</p>
    <p>STIR: {{ $order->stir }}</p>
    <p>Status: {{ $order->status }}</p>
</body>
</html>
