<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wave to Earth - Rnb Band</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/sass/app.scss')
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Wave to Earth</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Album</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Concert</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="text-center mb-4"
             style="background-image: url('{{ Vite::asset('resources/images/header.png') }}'); background-size: cover; background-position: center; padding: 400px;">
        </div>
    </div>

        <div class="content text-center">
            <img src="{{Vite::asset('resources/images/logo w2e.png')}}" alt="Logo Wave to Earth" class="band-logo">
            <h1>Hi!</h1>
            <h1>We are</h1>
            <h1>Wave to Earth</h1>
            <p>Wave to Earth is a South Korean indie rock band. The band currently consists of lead vocalist and
                guitarist Kim Daniel, drummer Shin Donggyu, and bassist Cha Soonjong. Since their formation in 2019, the
                band has released 2 studio albums.</p>
            <h2>About Us</h2>
            <p>Wave to Earth was formed when Kim Daniel and Shin Dongkyu were in middle school. They said they formed a
                band with the ambition of "showing music that makes a new wave."They debuted with the single "wave" on
                23 August 2019 with a new member Cha Soonjong. While the three of them are the official members, the
                session members also include Jo Jung-geun (keyboard), Jeon-min (saxophone), and Hong Seung-gi, an
                artwork member. They released two EPs in January 2020: Wave 0.01 and Summer Flows 0.02. They signed with
                Wavy, the label where Colde is the owner, in 2021. They had a live performance with La Poem on Naver
                Onstage. In 2023, they released their first studio album, 0.1 Flaws and All. They were included in the
                lineup of South Korean rock festivals, including the Seoul Jazz Festival and Pentaport Rock Festival,
                and The Other Festival in Indonesia. Wave To Earth recently completed a sold-out North American tour in
                September 2023. On September 6, 2024, they released their latest studio album entitled Play with Earth!
                0.03.</p>
        </div>
    </div>
    <div class="container mt-4">
        <h3 class="text-center text-white mb-4">Recommended Songs</h3>
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card h-100">
                    <img src="{{Vite::asset('resources/images/light.png')}}" class="card-img-top" alt="Light">
                    <div class="card-body text-center">
                        <h5 class="card-title">Light</h5>
                        <p class="card-text">There is a light not far away from us, from us</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card h-100">
                    <img src="{{Vite::asset('resources/images/calla.png')}}" class="card-img-top" alt="Calla">
                    <div class="card-body text-center">
                        <h5 class="card-title">Calla</h5>
                        <p class="card-text">Calla, someone said that your time will be over soon</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card h-100">
                    <img src="{{Vite::asset('resources/images/nouvelle vague.png')}}" class="card-img-top" alt="Nouvelle Vague">
                    <div class="card-body text-center">
                        <h5 class="card-title">Nouvelle Vague</h5>
                        <p class="card-text">Oh don't fade away nouvelle vague, Cause we want to get close to you</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card h-100">
                    <img src="{{Vite::asset('resources/images/daisy.png')}}" class="card-img-top" alt="Daisy">
                    <div class="card-body text-center">
                        <h5 class="card-title">Daisy</h5>
                        <p class="card-text">Life always goes on and on, But, I'll live with you forever. So, be my
                            daisy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <footer class="footer mt-4">
        <p>&copy; 2024 Wave to Earth. Copyright </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
