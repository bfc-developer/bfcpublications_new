<!DOCTYPE html>
<html>

<head>
    <title>Contact Us Email</title>
</head>

<body>
    {{-- <h2>Contact Us Email</h2> --}}
    <p><strong>Name:</strong> {{ $formdata['name'] }}</p>
    <p><strong>Email:</strong> {{ $formdata['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $formdata['phone'] }}</p>
    <p><strong>Subject:</strong> {{ $formdata1['subject'] }}</p>
    <p><strong>Message:</strong> {{ $formdata1['message'] }}</p>
</body>

</html>
