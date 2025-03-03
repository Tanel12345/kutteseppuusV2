<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <!-- Display error message for too many attempts -->
    <!-- Display error message -->
    @error('message')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <!-- Display validation errors for email or password -->
    @if ($errors->has('email'))
        <div class="alert alert-danger">
            {{ $errors->first('email') }}
        </div>
    @endif
    @if (session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
@endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
