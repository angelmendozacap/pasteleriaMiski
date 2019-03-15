<!doctype html>
<html lang="es-PE">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="../assets/img/logo/miski_logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Admin Miski</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: #F91762;">
        <a class="navbar-brand text-white text-weight-bold" href="./">Misk'i</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link text-white active" href="#form"><i class="fas fa-desktop"></i> Admin</a>
            </div>
        </div>
    </nav>
    <main class="mt-5 pt-2">
        <div class="container">
            <div class="row">
                <aside class="col-md-5 col-12">
                    <form enctype="multipart/form-data">
                        <div class="form-group">
                            <label style="color: #F91762;" for="file"><i class="far fa-images"></i> Subir Imagen</label>
                            <input type="file" name="imageFile" class="form-control-file" id="file" required>
                        </div>
                        <div class="form-group">
                            <label style="color: #F91762;" for="title"><i class="fas fa-font"></i> Título</label>
                            <input type="text" class="form-control" id="title" name="titleImage" required>
                        </div>
                        <button type="submit" class="btn text-white" style="background-color: #F91762;">Guardar</button>
                    </form>
                    <div id="aviso" class="mt-3"></div>
                </aside>
                <section class="col-md-7 col-12">
                    <div id="Cards" class="row">

                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./admin.js"></script>
</body>

</html> 