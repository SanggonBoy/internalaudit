<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pembuka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #f0f8ff;
        }

        .container {
            text-align: center;
            background: #fff;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .btn-enter {
            font-size: 1.25rem;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-enter:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Selamat Datang di Website Kami!</h1>
        <p>Tekan tombol di bawah untuk melanjutkan ke Landing Page.</p>
        <!-- Tombol yang mengarahkan ke landing page -->
        <a href="{{ route('landingpage') }}" class="btn-enter">Ke Landing Page</a>
    </div>

</body>

</html>
