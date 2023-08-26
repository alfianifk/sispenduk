
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="../assets/css/main/app.css">
    <link rel="stylesheet" href="../assets/css/pages/auth.css">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/png">
</head>

<body>
    <div id="auth">
        
<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <h1 class="auth-title">Masuk</h1>
            <p class="auth-subtitle mb-5">Masuk menggunakan Username atau NIPD yang sudah terdaftar </p>

            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif

            <form action="{{ route('actionlogin') }}" method="POST" >
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" name="email" class="form-control form-control-xl" placeholder="Username / NIPD">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Masuk</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
            <div class="row p-5"></div>
            <div class="row p-5"></div>
             <div class="row p-5">
                <div class="col-12">
                    <h1 class="text-white text-center">Aplikasi</h2>
                    <h1 class="text-white text-center">Sistem Pendataan Kependudukan</h2>
                    <h1 class="text-white text-center text-lg">DESA SINGKIR</h2>
                </div>
             </div>
        </div>
    </div>
</div>

    </div>
</body>

</html>
