<!DOCTYPE html>
<html>
<head>
    <title>Email Form</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <div class="page-wrapper">
        <div class="page-content page-content--narrow">
            <section class="card" data-task="Task 4">
                <h2>Email Validation</h2>
                <p class="card__summary">Enter your email address below and submit to validate it with Laravel.</p>
                <form action="/email-form" method="POST" class="form-stack">
                    @csrf
                    <label for="email-input">Email Address</label>
                    <input id="email-input" type="text" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                    <button type="submit">Validate Email</button>
                </form>

                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror

                @if (session('success'))
                    <p class="success-message">{{ session('success') }}</p>
                @endif
            </section>
        </div>
    </div>
</body>
</html>
