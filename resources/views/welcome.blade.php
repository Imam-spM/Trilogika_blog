<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trilogika Edutama</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero-section {
            background-image: url('https://via.placeholder.com/1600x600');
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.5rem;
        }

        .alumni-section,
        .artikel-section {
            padding: 50px 0;
        }

        .alumni-section h2,
        .artikel-section h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Trilogika</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#alumni">Alumni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero-section"
        style="background-image: url('{{ asset('storage/' . $jumbotron->image) }}'); background-size: cover; background-position: center;">
        <div>
            <h1>{{ $jumbotron->title }}</h1>
            <p>{{ $jumbotron->content }}</p>
            <a href="#artikel" class="btn btn-primary btn-lg mt-3">Lihat Artikel</a>
        </div>
    </div>

    <!-- Daftar Alumni Section -->
    <section id="alumni" class="alumni-section">
        <div class="container">
            <h2>Daftar Alumni</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Alumni 1">
                        <div class="card-body">
                            <h5 class="card-title">Nama Alumni 1</h5>
                            <p class="card-text">Deskripsi singkat tentang alumni ini, prestasinya, dan kontribusinya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Alumni 2">
                        <div class="card-body">
                            <h5 class="card-title">Nama Alumni 2</h5>
                            <p class="card-text">Deskripsi singkat tentang alumni ini, prestasinya, dan kontribusinya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Alumni 3">
                        <div class="card-body">
                            <h5 class="card-title">Nama Alumni 3</h5>
                            <p class="card-text">Deskripsi singkat tentang alumni ini, prestasinya, dan kontribusinya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Artikel Section -->
    <section id="artikel" class="artikel-section bg-light">
        <div class="container">
            <h2>Artikel Terbaru</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Artikel 1">
                        <div class="card-body">
                            <h5 class="card-title">Judul Artikel 1</h5>
                            <p class="card-text">Deskripsi singkat tentang artikel ini yang menarik perhatian pembaca.
                            </p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Artikel 2">
                        <div class="card-body">
                            <h5 class="card-title">Judul Artikel 2</h5>
                            <p class="card-text">Deskripsi singkat tentang artikel ini yang menarik perhatian pembaca.
                            </p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Artikel 3">
                        <div class="card-body">
                            <h5 class="card-title">Judul Artikel 3</h5>
                            <p class="card-text">Deskripsi singkat tentang artikel ini yang menarik perhatian pembaca.
                            </p>
                            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-3 text-center">
        <div class="container">
            <p>&copy; 2024 Trilogika. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
