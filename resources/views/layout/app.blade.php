@extends('layout.app')
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<div style="background:#333;color:white;padding:10px;">
    <a href="/marketing/tim" style="color:white;">Sample Order</a>
</div>

<div style="padding:20px;">
    @yield('content')
</div>

</body>
</html>
