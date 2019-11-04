<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" href="css/estilo.css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Antic+Slab&display=swap" rel="stylesheet">

    <title>Los Hellen</title>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-12">
                <header>
                    <?php include('includes/header.php'); ?>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="col-12 shadow-sm">
                <nav>
                    <?php include('includes/menu.php'); ?>
                </nav>
            </div>
        </div>

        <!---------------- CONTEÚDO --------------->
        <div class="row">
            <div class="col-12 m-2">
                <section>
                    <h5>Surrealismo</h5>

                    <img src="img/banner.jpg-1540x515.jpg" />
                    <p>Salvador Dali - "Sono" (1937)</p>
                </section>
            </div>
            <div class="row">

                <div class="col-3">
                    <figure>
                        <img src="img/interiores-holandeses-i-joan-miro.jpg" alt="">
                        <p> Joan Miró – “Interiores Holandeses” (1928)</p>
                    </figure>
                </div>
                <div class="col-6">
                    <p> O Surrealismo surgiu na década de 1920 em Paris, vindo a fazer parte das vanguardas modernistas. Esse movimento tinha como característica principal, enfatizar o papel do inconsciente na criação artística e criativa.

                        O grupo contava com artistas de diversos segmentos, bem como poetas, escritores e atores teatrais. O poeta André Breton foi o principal mentor deste movimento e autor do Manifesto Surrealista (1924), onde os princípios surrealistas são declarados, tais como a isenção da lógica e a adoção de uma realidade superior.

                        No caso da pintura, as obras incorporavam elementos desconexos, formas abstratas e ideias irreais, visando libertar-se da lógica e da razão. O mundo lúdico criado nas pinturas visava contrariar a arte racionalista e trazer a subversão para a criação.

                        Conheça um pouco sobre os mais importantes pintores desse movimento de grande importância para a história da arte – e do design – mundial. </p>

                </div>
                <div class="col-3">
                    <figure>
                        <img src="img/Rene-Magritte-The-Son-of-Man.jpg" alt="">
                        <p>René Magritte – “O Filho do Homem” (1964)</p>
                    </figure>
                </div>
            </div>
        </div>

        <!-------------------------------->
        <div class="row">
            <div class="col-12 fixed-bottom">
                <?php include('includes/footer.php'); ?>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
