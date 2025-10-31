<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Register- MovieVerse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4" style="width: 400px; background-color: #1e1e1e;">
            <h3 class="text-danger text-center mb-3">Register</h3>

            @if($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('register.submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label text-white">Username</label>
                    <input type="text" name="username" id="username" class="form-control bg-secondary text-white"
                        required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label text-white ">Email</label>
                    <input type="email" name="email" id="email" class="form-control bg-secondary text-white" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-white ">Password</label>
                    <input type="password" name="password" id="password" class="form-control bg-secondary text-white"
                        required>
                </div>

                <button type="submit" class="btn btn-danger w-100">Register</button>
            </form>

            <p class="text-center mt-3">
                <a href="{{ route('register') }}" class="text-decoration-none text-white">For New Admins? Register</a>
            </p>
        </div>
    </div>
</body>

</html>