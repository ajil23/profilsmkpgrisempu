<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <title>Login SMK PGRI Sempu</title>
</head>

<body>

    <div class="alert alert-warning" role="alert">
    </div>
    <div class="container">
        <div class="form-container sign-in">
            <form action="{{ route('login') }}" method="POST" class="login-username">
                @csrf
                <h1 style="color: green;">Login</h1>
                <br></br>
                <div class="input-group">
                <input type="email" id="email" placeholder="Username" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" id="password" placeholder="Password" name="password" required>
            </div>
                <div class="input-group">
                <button type="submit" class="btn">{{ __('Login') }}</button>
            </div>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1 >Hallo, Admin!</h1>
                    <p>Login Untuk Menggunakan Akses Lebih!
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>