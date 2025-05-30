<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Mail</title>
</head>

<body style="font-family: Arial, Helvetica, sans-serif; font: size 16px;">

    <p>Name: {{ $mailData['name'] }}</p>
    <p>Email: {{ $mailData['email'] }}</p>
    <p>Phone: {{ $mailData['phone'] }}</p>
    <p>Message: {{ $mailData['message'] }}</p>
    
</body>

</html>
