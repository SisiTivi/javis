<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="card">
        <div class="card-title">
            <h2>Login</h2>
        </div>
        <form action="{{ route('login.process') }}" method="POST" class="form" id="loginForm">
            @csrf
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="emailInput" placeholder="Masukkan email" class="form-control" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" name="password" id="passwordInput" placeholder="Masukkan password" class="form-control" required>
                    <span class="input-group-text" id="passwordInputIcon">
                        <i class="fa-solid fa-eye-slash"></i>
                    </span>
                </div>
            </div>
            <!-- pesan error  -->
            @error('email')
            <div class="text-danger mt-1">{{ $message }}</div>
            @enderror

            <!-- Button -->
            <button id="loginbtn" type="submit" class="btn btn-primary">
                <span id="btnText">Masuk</span>
                <span id="spinner" class="spinner-border spinner-border-sm d-none"></span>
            </button>

            <!-- footer link -->
            <div class="footer-link">
                Belum punya akun? <a href="{{ route('register') }}">Daftar disini</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Password toggle script -->
    <script>
        // ambil element password
        const passwordInput = document.getElementById("passwordInput");
        const eyeIconContainer = document.getElementById("passwordInputIcon");
        const eyeIcon = eyeIconContainer.querySelector("i");

        eyeIcon.addEventListener("click", () => {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            }
        });
    </script>
    <!-- animasi loading -->
    <script>
        document.getElementById('loginForm').addEventListener('submit', () => {
            document.getElementById('btnText').textContent = 'Processing...';
            document.getElementById('spinner').classList.remove('d-none');
        });
    </script>
</body>

</html>
