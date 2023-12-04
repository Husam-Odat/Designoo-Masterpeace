<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Message</title>
</head>
<body>
    {{-- Embed the image --}}
    <?php $imagePath = public_path('images/logoo.png'); ?>
    <img src="{{ $message->embed($imagePath) }}" alt="Designoo Logo" style="width: 100px; height: 100px;">
    <p>designoo</p>
    <h1>Contact Message</h1>
    <p>Thank you for contact designoo we will contact you with in 24 working hours</p>
    <p>your massege was as below</p>
    <p>Name: {{ isset($details['name']) ? $details['name'] : '' }}</p>
    <p>Email : {{ $details ['email'] }}</p>
    <p>Message: {{ isset($details ['msg']) ? $details ['msg'] : '' }}</p>
    <p>thank you to contact designoo website www.designoo.net</p>
    
</body>
</html>