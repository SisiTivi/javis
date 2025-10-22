<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="card">
        <div class="card-title">
            <h2>Register</h2>
        </div>
        <form action="{{ route('register.process') }}" method="POST" class="form">
            @csrf
            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="emailInput" placeholder="Masukkan email" class="form-control" required>
            </div>
            @error('email')
            <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror

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
            @error('password')
            <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror

            <!-- Password confirmation -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <div class="input-group">
                    <input type="password" name="password_confirmation" id="passwordConfirmationInput" placeholder="Masukkan password" class="form-control" required>
                    <span class="input-group-text" id="passwordConfirmationInputIcon">
                        <i class="fa-solid fa-eye-slash"></i>
                    </span>
                </div>
            </div>

            <!-- Button -->
            <button type="submit" class="btn btn-primary">Daftar</button>

            <!-- Login link -->
            <div class="footer-link">
                Sudah punya akun? <a href="{{ route('login') }}">masuk disini</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Password toggle script -->
    <script>
        function togglePasswordVisibility(inputId, iconId) {
            // ambil element password
            const input = document.getElementById(inputId);
            const iconContainer = document.getElementById(iconId);
            const icon = iconContainer.querySelector("i");

            iconContainer.addEventListener("click", () => {
                if (input.type === "password") {
                    input.type = "text";
                    icon.classList.remove("fa-eye-slash");
                    icon.classList.add("fa-eye");
                } else {
                    input.type = "password";
                    icon.classList.remove("fa-eye");
                    icon.classList.add("fa-eye-slash");
                }
            });
        }
        togglePasswordVisibility("passwordInput", "passwordInputIcon")
        togglePasswordVisibility("passwordConfirmationInput", "passwordConfirmationInputIcon")
    </script>
</body>

</html>
