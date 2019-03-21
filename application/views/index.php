<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url() ?>static/css/materialise.css">
    <link rel="stylesheet" href="<?= base_url() ?>static/css/fonts/font.css">
    <script src="../../static/js/materialize.js"></script>
    <link rel="stylesheet" href="../../static/css/style.css">
    <title>Job Portal</title>
</head>
<body>
    <div class="row">
        <nav class="blue-grey">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><i class="material-icons large left" id="title-icon">work</i> Job-Portal</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li class="active"><a href="#"><i class="material-icons large left" id="">home</i></a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="inscription.html">Inscription</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col s8 offset-s2">
            <form action="" class="col s12">
                <div class="input-field col s10">
                    <i class="material-icons prefix">search</i>
                    <input id="icon_search" type="search" class="search">
                    <label for="icon_search">Chercher</label>
                </div>
                <div class="input-field col s2">
                    <input id="icon_btn" type="submit" class="btn waves-light search" value="Chercher">
                </div>
            </form>
        </div>
    </div>
    <div class="divider"></div>
    <div class="row">
        <div class="col s3">
            <div class="card sticky-action" style=" width: 250px;">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="assets/img.png" style="height: 250px;">
                </div>
                <div class="card-content">
                    <span class="card-title activator blue-grey-text text-darken-4">P-Breakers<i class="material-icons right">more_vert</i></span>
                    <p><a href="#">www.pbreakers.org</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title blue-grey-text text-darken-4">Offre d'Emploi<i class="material-icons right">close</i></span>
                    <p><strong class="blue-grey-text">Poste</strong> : Comptable.</p>
                    <p><strong class="blue-grey-text">Depuis</strong> : 13/03/2019.</p>
                    <p><strong class="blue-grey-text">Expire</strong> : 13/04/2019.</p>
                    <div class="card-action">
                        <a class="waves-effect waves-light btn" href=""><i class="material-icons right">directions_run</i>Postuler</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>