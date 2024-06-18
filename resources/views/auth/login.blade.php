<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .login-container {
            margin-top: 5%;
            width: 400px; /* Set a specific width */
            padding: 40px; /* Increase padding for larger container */
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-left: auto;
            margin-right: auto;
        }
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: bold;
            color: #333;
        }
        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            width: 100%;
            margin-top: 5px;
            margin-bottom: 20px;
        }
        .form-check-label {
            font-weight: normal;
        }
        .btn-primary {
            background-color: #d9534f; /* Red color */
            border-color: #d9534f;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #c9302c; /* Darker red for hover */
            border-color: #c9302c;
        }
        .login-title {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #d9534f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <div class="login-container">
                    <div class="logo">
                        <a href="#"><img src="images/logo.png" alt="Restaurant Logo" width="150"></a>
                    </div>
                    <h3 class="login-title">Restaurant Login</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
