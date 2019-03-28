<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php base_url(); ?>assets/materialise.css">
    <link rel="stylesheet" href="<?php base_url(); ?>assets/font.css">
    <script src="<?php base_url(); ?>assets/materialize.js"></script>
    <script src="<?php base_url(); ?>assets/cropper.js"></script>
    <link rel="stylesheet" href="<?php base_url(); ?>assets/cropper.css">
    <link rel="stylesheet" href="<?php base_url(); ?>assets/style.css">
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
<h4 class="center blue-grey-text">Inscription</h4>
<div class="row">
    <div class="col s12 m5 offset-m1">
        <div class="card">
            <div class="card-content black-text">
                <span class="card-title center">Entreprise</span>
                <div class="divider"></div>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <input id="icon_name" type="text" class="validate">
                            <label name="nomEnt" for="icon_name">Nom Entreprise</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">location_on</i>
                            <input id="icon_adresse" type="text" class="validate">
                            <label for="icon_adresse">Adresse</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">mail_outline</i>
                            <input id="icon_email" type="email" class="validate">
                            <label for="icon_email">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Telephone</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">public</i>
                            <input id="icon_site" type="text" class="validate">
                            <label for="icon_site">Site</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_post_office</i>
                            <input id="icon_postal" type="text" class="validate">
                            <label for="icon_postal">Code-Postal</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">attach_file</i>
                            <input id="icon_fax" type="text" class="validate">
                            <label for="icon_fax">Fax</label>
                        </div>
                        <div class="file-field input-field col s6">
                            <!--<div class="btn">-->
                                <!--<span>File</span>-->
                                <!--<input type="file">-->
                            <!--</div>-->
                            <!--<div class="file-path-wrapper">-->
                                <!--<input class="file-path validate" type="text" placeholder="Image de Profile">-->
                            <!--</div>-->
                            <a class="modal-trigger btn-floating blue darken-1 right" href="#modalphoto"><i class="material-icons">add</i></a>
                            <label for="icon_pseudo">Upload Image de Profile</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="icon_pseudo" type="text" class="validate">
                            <label for="icon_pseudo">Pseudo</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input id="icon_pwd" type="password" class="validate">
                            <label for="icon_pwd">Password</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input id="icon_pwdconf" type="password" class="validate">
                            <label for="icon_pwdconf">Password-Confirm</label>
                        </div>
                    </div>
                </form>
                <a class="waves-effect waves-light btn center pulse">S'inscrire</a>
            </div>
        </div>
    </div>
    <div class="col s12 m5">
        <div class="card">
            <div class="card-content black-text">
                <span class="card-title center">Personne</span>
                <div class="divider"></div>
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">person</i>
                            <input name="nom" id="icon_nom" type="text" class="validate">
                            <label for="icon_nom">Nom </label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">person</i>
                            <input name="prenom" id="icon_prenom" type="text" class="validate">
                            <label for="icon_prenom">Prenom </label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">school</i>
                            <input name="titre" id="icon_titre" type="text" class="validate">
                            <label for="icon_titre">Titre </label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">location_on</i>
                            <input name="adresse" id="icon_adress" type="text" class="validate">
                            <label for="icon_adress">Adresse</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">mail_outline</i>
                            <input name="email" id="icon_mail" type="email" class="validate">
                            <label for="icon_mail">Email</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input name="telephone" id="icon_phone" type="tel" class="validate">
                            <label for="icon_phone">Telephone</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">face</i>
                            <select name="genre">
                                <option value="f">Feminin</option>
                                <option value="m">Masculin</option>
                            </select>
                            <label>Genre</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">cake</i>
                            <input name="dateNaiss" type="text" class="datepicker" placeholder="Date de Naissance" id="dateNaissance">
                            <label for="dateNaissance">Date Naissance</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">public</i>
                            <input name="nationalite" id="icon_nation" type="text" class="validate">
                            <label for="icon_nation">Nationalite</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_post_office</i>
                            <input name="etatCivil" id="icon_civil" type="text" class="validate">
                            <label for="icon_civil">Etat Civil</label>
                        </div>
                        <div class="file-field input-field col s6">
                            <div class="btn">
                                <span>File</span>
                                <input name="file" type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Image de Profile">
                            </div>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input name="pseudo" id="icon_pseud" type="text" class="validate">
                            <label for="icon_pseud">Pseudo</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input name="pwd" id="icon_passwd" type="password" class="validate">
                            <label for="icon_passwd">Password</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input name="pwdConf" id="icon_passwdconf" type="password" class="validate">
                            <label for="icon_passwdconf">Password-Confirm</label>
                        </div>
                    </div>
                </form>
                <a class="waves-effect waves-light btn center pulse">S'inscrire</a>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer blue-grey">
    <div class="footer-copyright center">
        <div class="container">
            © 2014 Designed By
            <a class="grey-text text-lighten-4" href="https://github.com/robenkr">Roben</a>
        </div>
    </div>
</footer>
<!-- Upload photo modal-->
<div id="modalphoto" class="modal">
    <div class="modal-content">
        <h4>Upload Photo</h4>
        <p>
        <form action="">
            <div class="file-field input-field col s6">
                <div class="btn">
                    <span>File</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Image de Profile">
                </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" value="Ajouter">Ajouter
                <i class="material-icons right">add</i>
            </button>
        </form>
        </p>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems);

        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems);;

        var elems = document.querySelectorAll('.datepicker');
        var options = {
            format: "yyyy-mm-dd"
        };
        var instances = M.Datepicker.init(elems, options);
    });
</script>
</body>
</html>