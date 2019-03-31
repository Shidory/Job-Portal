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
                <li><a href="<?= base_url(); ?>welcome/V_login">Login</a></li>
                <li><a href="<?= base_url(); ?>welcome/V_sign_up">Sign up</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="row">
    <div class="col s12 m6 offset-m3">
        <div class="card">
            <div class="card-content black-text">
                <span class="card-title center blue-grey-text"><!--?php echo ucfirst($title);?--></span>
                <div class="divider"></div>
                <?= form_open('welcome/C_login','class =""'); ?>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mail_outline</i>
                            <input id="icon_prefix" type="email" class="validate" name="email" required>
                            <label for="icon_prefix">Email <span class="red-text">*<span></label>
                        </div>
                        <?php echo form_error('email') ?></span>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="icon_telephone" type="password" class="validate" name="pwd" required>
                            <label for="icon_telephone">Password <span class="red-text">*<span></label>
                        </div>
                        <!-- <span class="input-field col s12"><?php echo form_error('pwd') ?></span> -->
                        <div class="left">
                            <!-- Switch -->
                            <div class="switch">
                                Type :
                                <label>
                                    Personne
                                    <input type="checkbox" name="typePers" value="on">
                                    <span class="lever"></span>
                                </label>
                            </div>
                            <div class="switch">
                                <label>
                                    Entreprise
                                    <input type="checkbox" name="typeEnt" value="on">
                                    <span class="lever"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light center" type="submit" name="login" id="" value="SeConnecter">Se Connecter</button>
                </form>
                <span class="red-text">(*) <strong style="font-size :12px;">champs obligatoire</strong><span>
            </div>
        </div>
    </div>
</div>
</body>
</html>