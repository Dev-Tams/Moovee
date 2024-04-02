<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>

<body style="font-family: Arial, sans-serif;">

    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <h2 style="text-align: center;">Email Verification</h2>
        <p>Hello,</p>
        <p>
            Thank you for registering. To complete your registration, please click the button below to verify your email address.
        </p>
        <p style="text-align: center;">
            <a href=" {{ route('email/verify') }}" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none;">Verify Email Address</a>
        </p>
        <p>
            If you did not create an account, no further action is required.
        </p>
        <div style="max-width: 600px; margin: 0 auto; padding: 20px;">

        
            <h2 style="text-align: center;">Resend Email Verification</h2>
            @if (session('message'))
            <div style="background-color: #4CAF50; color: white; padding: 10px; margin-bottom: 20px;">
                {{ session('message') }}
            </div>
            @endif
            <form action="{{ route('email/verification-notification') }}" method="POST">
                @csrf
                <p>
                    Click the button below to request a new verification email.
                </p>
                <p style="text-align: center;">
                    <button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; cursor: pointer;">Resend Verification Email</button>
                </p>
            </form>
        </div>

    </div>

</body>

</html>