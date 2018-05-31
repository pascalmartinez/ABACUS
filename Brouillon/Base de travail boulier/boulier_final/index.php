<?php session_start();
if($_POST["deconnexion"]==1){
	$_SESSION["connected"] = 0;
	$_SESSION["nom"] = 0;
}
function randomer($car){
	$string = "";
	$chaine = "abcdefghijklmnpqrstuvwxy0123456789";
	srand((double)microtime()*1000000);
	for($i=0; $i<$car; $i++) {
		$string .= $chaine[rand()%strlen($chaine)];
	}
	return $string;
}

if($_GET["forgot"]==1 && !isset($_POST["emailsender"]) && isset($_SESSION["from"]) && $_SESSION["connected"]!=1){	
	$domain=$_SERVER['SERVER_NAME'];
	$SERVER_PROTOCOL=$_SERVER['HTTPS'];
	if($SERVER_PROTOCOL=="on"){$domain="https://$domain";}else{$domain="http://$domain";}
	?>
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head><title>Boulier didactique</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="Boulier didactique">
	<meta name="keywords" content="Boulier didactique">
	<meta name="robots" content="index,follow">
	<!--<link rel="shortcut icon" href="/img/favicon.ico">-->
	<link href="css/cfdv.css?<?php echo time();?>" rel="stylesheet" type="text/css">
	<link href="css/cfdv_responsive.css?<?php echo time();?>" rel="stylesheet" type="text/css">
	</head>
	<body class="insc">
		<div class="row">
			<div class="container">
				<h1>Boulier didactique</h1>				
				<span class="col-lg-6 clearbothcenter">
					<h2>Mot de passe oublié</h2>
					<form action="<?php echo $domain.strtok($_SERVER["REQUEST_URI"],'?');?>" method="post">
						<input type="text" name="emailsender" placeholder="Mon email"/>
						<input type="hidden" name="forgot" value="1" />
						<input type="hidden" name="fromsender" value="<?php echo $_SESSION['from'];?>" />
						<input type="submit" value="Changer mon mot de passe" />
					</form>
				</span>
			</div>
		</div>
	</body>
	</html>
	<?php
	exit;
}


if($_POST["forgot"]==1 && $_POST["emailsender"]!="" && $_SESSION["from"]==$_POST["fromsender"]){
	
	$dbname='bbb_bv_users';
	$mytable ="users";
	$chemin=realpath($dbname);
	chmod("$chemin",0775);
	$base=new SQLite3($dbname);	
	//liste		
	$selectquery = "SELECT email FROM $mytable WHERE email='".$_POST["emailsender"]."'";
	$initresult=$base->query($selectquery);
	$row = $initresult->fetchArray();
	if(count($row)>0){
		$i++;
		$domain=$_SERVER['SERVER_NAME'];
		$replymail  = "contact@$domain";
		$from = "contact@$domain";
		$reply  = "Reply-to: $replymail \n";			
		$headers  = "MIME-Version: 1.0 \n";
		$headers .= "Content-type: text/html; charset=iso-8859-1 \n";
		$headers .= "From: '$domain' <$from>  \n";
		$headers .= "Disposition-Notification-To: $from  \n";
		$headers .= $reply;	
		$headers .= "X-Priority: 1  \n";
		$headers .= "X-MSMail-Priority: High \n";
		$CR_Mail = TRUE;
		$pass=randomer(20);
		$updatequery = "UPDATE $mytable SET pass='".md5($pass)."' WHERE email='".$_POST["emailsender"]."'";
		$updateresult = $base->exec($updatequery);
		$fulldomain=$_SERVER['SERVER_NAME'];
		$SERVER_PROTOCOL=$_SERVER['HTTPS'];
		if($SERVER_PROTOCOL=="on"){$fulldomain="https://$fulldomain";}else{$fulldomain="http://$fulldomain";}
		if($updateresult){
			$mail_subject="Boulier didactique - changement de mot de passe";
			$email_body="<p>Bonjour !<br><br>Voici votre nouveau mot de passe : <br></p>";
			$email_body.="<p>Nouveau mot de passe : $pass<br><br></p>";
			$email_body.="<p>Gardez-le précieusement !<br><br></p>";
			$email_body.="<p><a href='$fulldomain".strtok($_SERVER["REQUEST_URI"],'?')."'>Retour au site</a><br></p>";
			
			$CR_Mail = @mail ($_POST["emailsender"], $mail_subject, $email_body, $headers);
			
			if($CR_Mail===FALSE){
				$phrase = "<p style='color:#2196F3'>OUPS ! Une erreur s'est produite pendant l'envoi de votre mot de passe...merci de renouveler l'opération.</p>";
				?>
				<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
				<head><title>Boulier didactique</title>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<meta name="description" content="Boulier didactique">
				<meta name="keywords" content="Boulier didactique">
				<meta name="robots" content="index,follow">
				<!--<link rel="shortcut icon" href="/img/favicon.ico">-->
				<link href="css/cfdv.css?<?php echo time();?>" rel="stylesheet" type="text/css">
				<link href="css/cfdv_responsive.css?<?php echo time();?>" rel="stylesheet" type="text/css">
				</head>
				<body class="insc">
					<div class="row">
						<div class="container">
							<h1>Boulier didactique</h1>	
							<?php echo $phrase;?>
							<p style="color:#2196F3"><a class='btn tac clearbothcenter' href="<?php echo $fulldomain.strtok($_SERVER["REQUEST_URI"],'?');?>">Retour</a></p>
						</div>
					</div>
				</body>
				</html>
				<?php
				sleep(4);
				//header("Location:index.php");
			}else{
				$phrase = "<p style='color:#2196F3'>Merci ! <br><br>Votre nouveau mot de passe vous a été envoyé à l'adresse email renseignée.<br><br>Consultez votre boite de réception.";
				?>
				<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
				<head><title>Boulier didactique</title>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<meta name="description" content="Boulier didactique">
				<meta name="keywords" content="Boulier didactique">
				<meta name="robots" content="index,follow">
				<!--<link rel="shortcut icon" href="/img/favicon.ico">-->
				<link href="css/cfdv.css?<?php echo time();?>" rel="stylesheet" type="text/css">
				<link href="css/cfdv_responsive.css?<?php echo time();?>" rel="stylesheet" type="text/css">
				</head>
				<body class="insc">
					<div class="row">
						<div class="container">
							<h1>Boulier didactique</h1>	
							<?php echo $phrase;?>
							<p style="color:#2196F3"><a class='btn tac clearbothcenter' href="<?php echo $fulldomain.strtok($_SERVER["REQUEST_URI"],'?');?>">Retour</a></p>
						</div>
					</div>
				</body>
				</html>
				<?php
				sleep(4);
				//header("Location:index.php");
			}
		}else{
			$phrase = "<p style='color:#2196F3'>OUPS ! Une erreur s'est produite pendant la mise à jour de votre mot de passe...merci de renouveler l'opération.</p>";
			?>
			<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
			<head><title>Boulier didactique</title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta name="description" content="Boulier didactique">
			<meta name="keywords" content="Boulier didactique">
			<meta name="robots" content="index,follow">
			<!--<link rel="shortcut icon" href="/img/favicon.ico">-->
			<link href="css/cfdv.css?<?php echo time();?>" rel="stylesheet" type="text/css">
			<link href="css/cfdv_responsive.css?<?php echo time();?>" rel="stylesheet" type="text/css">
			</head>
			<body class="insc">
				<div class="row">
					<div class="container">
						<h1>Boulier didactique</h1>	
						<?php echo $phrase;?>
						<p><a class='btn tac clearbothcenter' href="<?php echo $fulldomain.strtok($_SERVER["REQUEST_URI"],'?');?>">Retour</a></p>						
					</div>
				</div>
			</body>
			</html>
			<?php
			sleep(4);
			//header("Location:index.php");
		}
		exit;
	}
}
if(isset($_POST) && isset($_POST["from_site"]) && $_POST["from_site"]==$_SESSION["from"] && $_SESSION["connected"]!=1){	
	$dbname='bbb_bv_users';
	$mytable ="users";
	$chemin=realpath($dbname);
	chmod("$chemin",0775);
	$base=new SQLite3($dbname);
	//create
	$query = "CREATE TABLE IF NOT EXISTS $mytable(            
				email longtext,
				pass longtext,
				nom longtext,
				post_date datetime
				)";
				
	$results = $base->exec($query);
	//insert
	$post_date = strftime("%b %d %Y %H:%M", time());
	//liste	
	if($_POST["bb"]!=1){		
		$query = "SELECT email,nom FROM $mytable WHERE email='".$_POST["email"]."' AND pass='".md5($_POST["pass"])."'";
	}else{
		$query = "SELECT email FROM $mytable WHERE email='".$_POST["email"]."'";
	}	
	$results = $base->query($query);
	$emails = array();
	$i = 0;
	$exists=0;
	$phrase="";
	$_SESSION["connected"] = 0;	
	while($datas = $results->fetchArray(SQLITE3_ASSOC)){		
		$i++;		
		if($_POST["bb"]==0){			
			$_SESSION["connected"] = 1;
			$_SESSION["nom"] = $datas["nom"];
		}
		$exists=1;
	}
	if($_POST["bb"]==1){
		if($exists==1){
			$phrase = "<p>Un compte existe déjà pour cet utilisateur !</p>";
			//$phrase .= "<br><br><p>Mot de passe oublié ? <a href=''>Cliquez ici</a></p>";
		}else{
			$email=$_POST["email"];
			$nom=$_POST["nom"];
			$pass=md5($_POST["pass"]);
			$query = "INSERT INTO $mytable(email, nom, pass, post_date) VALUES ('$email', '$nom','$pass','$post_date')";
			$results = $base->exec($query);
			$phrase = "<h3>Félicitations ! Votre compte a été créé !</h3><br><br><p>Vous allez être redirigé vers le boulier virtuel dans 5 secondes.</p>";
			$phrase .= "";
			chmod("$chemin",0604);
			sleep(3);
			header("Location:boulier.php");
		}
		chmod("$chemin",0604);
	}else{
		if($exists==1){
			chmod("$chemin",0604);
			$phrase = "<p>Welcome !</p>";
			header("Location:boulier.php");
		}else{
			$phrase = "<p class='wrong'>Mauvais utilisateur ou mauvais mot de passe !</p>";
			$phrase .= "<br><p class='wrong'>Mot de passe oublié ?</p><p><a class='btn tac clearbothcenter' href='?forgot=1'>Cliquez ici</a></p>";
		}
	}
	$_SESSION["from"]=randomer(20);
	?>
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head><title>Boulier didactique</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="Boulier didactique">
	<meta name="keywords" content="Boulier didactique">
	<meta name="robots" content="index,follow">
	<!--<link rel="shortcut icon" href="/img/favicon.ico">-->
	<link href="css/cfdv.css?<?php echo time();?>" rel="stylesheet" type="text/css">
	<link href="css/cfdv_responsive.css?<?php echo time();?>" rel="stylesheet" type="text/css">
	</head>
	<body class="insc">
		<div class="row">
			<div class="container">
				<h1>Boulier didactique</h1>	
				<?php if($phrase!=""){?>
				<div class="col-lg-12">
					<?php echo $phrase;?>
					<?php echo $existor;?>
				</div>
				<?php }; ?>
				<span class="col-lg-6">
					<h2>Créer un compte</h2>
					<form action="" method="post">
						<input type="text" name="nom" placeholder="Votre nom"/>
						<input type="text" name="email" placeholder="Votre email" />
						<input type="password" name="pass" placeholder="Choisissez un mot de passe" />
						<input type="password" name="confpassword" placeholder="Confirmez votre mot de passe" />
						<input type="hidden" name="bb" value="1" />
						<input type="hidden" name="from_site" value="<?php echo $_SESSION['from'];?>" />
						<input type="submit" value="Créer mon compte" />
					</form>
				</span>	
				<span class="col-lg-6">
					<h2>Se connecter</h2>
					<form action="" method="post">
						<input type="text" name="email" placeholder="Votre email"/>
						<input type="password" name="pass" placeholder="Votre mot de passe"/>
						<input type="hidden" name="bb" value="0" />
						<input type="hidden" name="from_site" value="<?php echo $_SESSION['from'];?>" />
						<input type="submit" value="Connexion" />
					</form>
				</span>
			</div>
		</div>
	</body>
	</html>
	<?php
}else{
	if($_SESSION["connected"] == 1){
		header("Location:boulier.php");
	}else{
		$_SESSION["from"]=randomer(20);
		$_SESSION["connected"] = 0;
		$_SESSION["nom"] = 0;
	}
	
	?>
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head><title>Boulier didactique</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="Boulier didactique">
	<meta name="keywords" content="Boulier didactique">
	<meta name="robots" content="index,follow">
	<!--<link rel="shortcut icon" href="/img/favicon.ico">-->
	<link href="css/cfdv.css?<?php echo time();?>" rel="stylesheet" type="text/css">
	<link href="css/cfdv_responsive.css?<?php echo time();?>" rel="stylesheet" type="text/css">
	</head>
	<body class="insc">
		<div class="row">
			<div class="container">
				<h1>Boulier didactique</h1>				
				<span class="col-lg-6">
					<h2>Créer un compte</h2>
					<form action="" method="post">
						<input type="text" name="nom" placeholder="Votre nom"/>
						<input type="text" name="email" placeholder="Votre email" />
						<input type="password" name="pass" placeholder="Choisissez un mot de passe" />
						<input type="password" name="confpassword" placeholder="Confirmez votre mot de passe" />
						<input type="hidden" name="bb" value="1" />
						<input type="hidden" name="from_site" value="<?php echo $_SESSION['from'];?>" />
						<input type="submit" value="Créer mon compte" />
					</form>
				</span>	
				<span class="col-lg-6">
					<h2>Se connecter</h2>
					<form action="" method="post">
						<input type="text" name="email" placeholder="Votre email"/>
						<input type="text" name="pass" placeholder="Votre mot de passe"/>
						<input type="hidden" name="bb" value="0" />
						<input type="hidden" name="from_site" value="<?php echo $_SESSION['from'];?>" />
						<input type="submit" value="Connexion" />
					</form>
				</span>
			</div>
		</div>
	</body>
	</html>
	<?php
}
?>