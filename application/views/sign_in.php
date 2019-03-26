<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>JobPortal</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/latest/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="<?= base_url(); ?>assets/latest/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="main-bg">
		<!-- title -->
		<h1></h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<img src="images/user.jpg" alt="" />
				</div>
				<?= form_open("welcome/sign_in");?>
					<p class="legend">Sign in Here<span class="fa fa-hand-o-down"></span></p>
					<div class="input">
                        <input type="text" class="form-control" placeholder="Nom" name="nom">
						<span class="fa fa-envelope"></span>
					</div>
					<div class="input">
                        <input type="text" class="form-control" placeholder="Prenom" name="prenom">
						<span class="fa fa-unlock"></span>
                    </div>
                    <div class="input">
                        <input type="text" class="form-control" placeholder="Titre" name="titre">
						<span class="fa fa-unlock"></span>
                    </div>
                    <div class="input">
                        <input type="text" class="form-control" placeholder="Adresse" name="adresse">
						<span class="fa fa-unlock"></span>
                    </div>
                    <div class="input">
                        <input type="text" class="form-control" placeholder="E-mail" name="email">
						<span class="fa fa-envelope"></span>
                    </div>
                    <div class="input">
                        <input type="text" class="form-control" placeholder="Telephone" name="telephone">
						<span class="fa fa-unlock"></span>
                    </div>
                    <div class="input">
                        <input type="text" class="form-control" placeholder="Genre" name="genre">
						<span class="fa fa-unlock"></span>
                    </div>
                    <div class="input">
                        <input type="date" class="form-control" placeholder="Date de naissance" name="datenaiss">
						<span class="fa fa-unlock"></span>
                    </div>
                    <div class="input">
                        <input type="text" class="form-control" placeholder="Nationalité" name="nationalite">
						<span class="fa fa-unlock"></span>
                    </div>
                    <div class="input">
                        <input type="text" class="form-control" placeholder="Etat Civil" name="etatcivil">
						<span class="fa fa-unlock"></span>
                    </div>
                    <div class="input">
                        <input type="text" class="form-control" placeholder="Pseudo" name="pseudo">
						<span class="fa fa-unlock"></span>
                    </div>
                    <div class="input">
                        <input type="password" class="form-control" placeholder="Mot de passe" name="pwd">
						<span class="fa fa-unlock"></span>
					</div>
					<button type="submit" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
				</form>
				<a href="welcome/V_login" class="bottom-text-w3ls">log in</a>
			</div>
		</div>
		<!-- //content -->
		<!-- copyright -->
		<div class="copyright">
			<h2>&copy; 2019 JobPortal. Design by Shidory.
				<a href="http://BeGreat.com" target="_blank">BeGreat</a>
			</h2>
		</div>
		<!-- //copyright -->
	</div>
</body>

</html>