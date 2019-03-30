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
                <li><a href="<?= base_url(); ?>welcome/V_login">Login</a></li>
                <li><a href="<?= base_url(); ?>welcom/V_sign_up">Sign up</a></li>
            </ul>
        </div>
    </nav>
</div>
<h4 class="center blue-grey-text"><!--?php echo ucfirst($title);?--></h4>
<div class="row">
    <div class="col s12 m5 offset-m1">
        <div class="card">
            <div class="card-content black-text">
                <span class="card-title center">Entreprise</span>
                <div class="divider"></div>
                <?= form_open_multipart('welcome/C_sign_up','class =""'); ?>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">business</i>
                            <input id="icon_name" type="text" class="validate" name="nomEmployeur" required>
                            <label for="icon_name">Nom Entreprise <span class="red-text">*<span></label>
                            <span><?php echo form_error('nomEmployeur') ?></span> 
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">location_on</i>
                            <input id="icon_adresse" type="text" class="validate" name="adresseEmployeur" required>
                            <label for="icon_adresse">Adresse <span class="red-text">*<span></label>
                            <?php echo form_error('adresseEmployeur') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">mail_outline</i>
                            <input id="icon_email" type="email" class="validate" name="emailEmployeur" required>
                            <label for="icon_email">Email <span class="red-text">*<span></label>
                            <?php echo form_error('emailEmployeur') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_telephone" type="tel" class="validate" name="telephoneEmployeur" required>
                            <label for="icon_telephone">Telephone <span class="red-text">*<span></label>
                            <?php echo form_error('telephoneEmployeur') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">public</i>
                            <input id="icon_site" type="text" class="validate" name="siteEmployeur">
                            <label for="icon_site">Site</label>
                            <?php echo form_error('siteEmployeur') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_post_office</i>
                            <input id="icon_postal" type="text" class="validate" name="codePostal">
                            <label for="icon_postal">Code-Postal</label>
                            <?php echo form_error('codePostal') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">attach_file</i>
                            <input id="icon_fax" type="text" class="validate" name="fax">
                            <label for="icon_fax">Fax</label>
                            <?php echo form_error('fax') ?>
                        </div>
                        <div class="file-field input-field col s6">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" name="logo">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Image de Profile">
                            </div>
                            <?php echo form_error('logo') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="icon_pseudo" type="text" class="validate" name="pseudo">
                            <label for="icon_pseudo">Pseudo</label>
                            <?php echo form_error('pseudo') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input id="icon_pwd" type="password" class="validate" name="pwd" required>
                            <label for="icon_pwd">Password <span class="red-text">*<span></label>
                            <?php echo form_error('pwd') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input id="icon_pwdconf" type="password" class="validate" name="pwdconf" required>
                            <label for="icon_pwdconf">Password-Confirm <span class="red-text">*<span></label>
                            <?php echo form_error('pwdconf') ?>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light center pulse" type="submit" name="logup" id="" value="S'inscrire">Sign up</button>
                </form>
                <span class="red-text">(*) <strong style="font-size :12px;">champs obligatoire</strong><span>
            </div>
        </div>
    </div>
    <div class="col s12 m5">
        <div class="card">
            <div class="card-content black-text">
                <span class="card-title center">Personne</span>
                <div class="divider"></div>
                <?= form_open_multipart('welcome/C_sign_up','class =""'); ?>
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="material-icons prefix">person</i>
                            <input id="icon_nom" type="text" class="validate" name="nomDemandeur" required>
                            <label for="icon_nom">Nom <span class="red-text">*<span></label>
                            <?php echo form_error('nomDemandeur') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">person</i>
                            <input id="icon_prenom" type="text" class="validate" name="prenomDemandeur" required>
                            <label for="icon_prenom">Prenom <span class="red-text">*<span></label>
                            <?php echo form_error('prenomDemandeur') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">school</i>
                            <input id="icon_titre" type="text" class="validate" name="titre" required>
                            <label for="icon_titre">Titre <span class="red-text">*<span></label>
                            <?php echo form_error('titre') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">location_on</i>
                            <input id="icon_adress" type="text" class="validate" name="adresseDemandeur" required>
                            <label for="icon_adress">Adresse <span class="red-text">*<span></label>
                            <?php echo form_error('adresseDemandeur') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">mail_outline</i>
                            <input id="icon_mail" type="email" class="validate" name="emailDemandeur" required>
                            <label for="icon_mail">Email <span class="red-text">*<span></label>
                            <?php echo form_error('emailDemandeur') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">phone</i>
                            <input id="icon_phone" type="tel" class="validate" name="telephoneDemandeur" required>
                            <label for="icon_phone">Telephone <span class="red-text">*<span></label>
                            <?php echo form_error('telephoneDemandeur') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">face</i>
                            <select name="genre" required>
                                <option value="f">Feminin</option>
                                <option value="m">Masculin</option>
                            </select>
                            <label>Genre <span class="red-text">*<span></label>
                            <?php echo form_error('genre') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">cake</i>
                            <input type="text" class="datepicker" placeholder="Date de Naissance" id="dateNaissance" name="dateNaissance" required>
                            <label for="dateNaissance">Date Naissance <span class="red-text">*<span></label>
                            <?php echo form_error('dateNaissance') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">public</i>
                            <input id="icon_nation" type="text" class="validate" name="nationalite" required>
                            <label for="icon_nation">Nationalite <span class="red-text">*<span></label>
                            <?php echo form_error('nationalite') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">local_post_office</i>
                            <input id="icon_civil" type="text" class="validate" name="etatCivil" required>
                            <label for="icon_civil">Etat Civil <span class="red-text">*<span></label>
                            <?php echo form_error('etatCivil') ?>
                        </div>
                        <div class="file-field input-field col s6">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" name="imageProfile">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" name="imageProfile" type="text" placeholder="Image de Profile">
                            </div>
                            <?php echo form_error('imageProfile') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">perm_identity</i>
                            <input id="icon_pseud" type="text" class="validate" name="pseudo">
                            <label for="icon_pseud">Pseudo</label>
                            <?php echo form_error('pseudo') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input id="icon_passwd" type="password" class="validate" name="pwd" required>
                            <label for="icon_passwd">Password <span class="red-text">*<span></label>
                            <?php echo form_error('pwd') ?>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">lock</i>
                            <input id="icon_passwdconf" type="password" class="validate" name="pwdconf" required>
                            <label for="icon_passwdconf">Password-Confirm <span class="red-text">*<span></label>
                            <?php echo form_error('pwdconf') ?>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light center pulse" type="submit" name="logup" id="" value="Sign up">Sign up</button>
                </form>
                <span class="red-text">(*) <strong style="font-size :12px;">champs obligatoire</strong><span>
            </div>
        </div>
    </div>
</div>>
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