<html>
	<head>
		<title>Mon réseau socia|Log in</title>
	</head>

	<style>

		#bar{
			height:100px; /*c'est la taille de la barre bleu*/
			background-color: rgb(59,89,152);
			color: #d9dfeb;
			padding: 4px;
	
		}

		#signup_button{
			background-color: #42b72a;
			width: 80px;
			text-align: center;
			padding: 5px;
			border-radius: 5px;
			float: right;
		}


		#bar2{
			background-color: white;
			width:800px; 
			margin: auto;
			margin-top: 50px;
			padding: 10px;
			padding-top: 50px;
			text-align: center;
			font-weight: bold;

		}

		#text{
			height: 40px;
			width: 300px;
			border-radius: 4px;
			border: solid 1px #ccc;
			padding: 4px;
			font-size: 14px;

		}

		#button{
			width: 300px;
			height: 40px;
			border-radius: 4px;
			font-weight: bold;
			border: none;
			background-color: rgb(59,89,152);
			color: white;
		}

    </style>

	<body style="font-family: tahoma;background-color: #e9ebee;">

		<div id="bar">
			
			<div style="font-size: 40px;">Facebook</div>
			<a href="signup.php" style="color: white;"><div id="Signup_button">S'inscrire</div></a>

		</div>

		<div id="bar2">
			
			Se connecter sur Facebook <br><br>

			<input type="text" id="text" placeholder="Adresse Email"><br><br>
			<input type="password" id="text" placeholder="Mot de passe"><br><br>

			<input type="submit" id="button" value="Se connecter">
			<br><br>
		</div>

	</body>


</html>