<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= site_url(); ?>assets/materialise.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/font.css">
    <script src="<?= base_url(); ?>assets/materialize.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/style.css">
    <title>Job Portal</title>
</head>
<body>
<div class="row">
    <nav class="blue-grey">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo"><i class="material-icons large left" id="title-icon">work</i> Job-Portal</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li class="active"><a href="#"><i class="material-icons large left" id="">home</i></a></li>
                <li><a href="">Login</a></li>
                <li><a href="inscription.html">Sign up</a></li>
            </ul>
        </div>
    </nav>
</div>

    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content black-text">
                    <span class="card-title center">Login</span>
                    <div class="divider"></div>
                    <?= form_open('welcome/C_login','class="col s12'); ?>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mail_outline</i>
                                <input name="email" id="icon_prefix" type="email" class="validate">
                                <label for="icon_prefix">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input name="pwd" id="icon_telephone" type="password" class="validate">
                                <label for="icon_telephone">Password</label>
                            </div>
                            <div class="left">
                                <!-- Switch -->
                                <div class="switch">
                                    Type :
                                    <label>
                                        Personne
                                        <input type="checkbox" name="type">
                                        <span class="lever"></span> Entreprise
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="waves-effect waves-light btn center">Login</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>