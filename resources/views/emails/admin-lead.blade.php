<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Lead</title>
</head>

<body style="font-family: Arial, sans-serif; background:#f6f6f6; padding:20px;">
    <div style="background:#fff; padding:20px; border-radius:8px; max-width:600px; margin:auto;">
        <h2 style="color:#333;">New Contact Enquiry</h2>

        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Mobile:</strong> {{ $data['country_code'] }} {{ $data['number'] }}</p>

        @if (!empty($data['message']))
            <p><strong>Message:</strong><br>{{ $data['message'] }}</p>
        @endif

        <hr>
        <p style="font-size:12px; color:#777;">
            This enquiry was submitted from the website.
        </p>
    </div>
</body>

</html>
