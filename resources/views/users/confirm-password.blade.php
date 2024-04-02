<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Password</title>
    <!-- Add your CSS stylesheets and other necessary assets here -->
</head>

<body>
    <div class="container">
        <h1>Confirm Password</h1>
        <p>Please confirm your password before continuing.</p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit">Confirm Password</button>
            </div>
        </form>
    </div>
</body>

</html>