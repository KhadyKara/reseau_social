<!DOCTYPE html>
<html>
<head>
	<title>Mon réseau social | TimeLine</title>
</head>

<style>
	#blue_bar{
		height: 50px;
		background-color: #405d9b;
		color: #d9dfeb;
	}

	#search_box{
		width: 400px;
		height: 20px;
		border-radius: 5px;
		border: none;
		padding: 4px;
		font-size: 14px;
	}

	#profile_pic{
		width: 150px;
		border-radius: 80px;
		border: solid 2px white;

	}

	#menu_buttons{
		width: 100px;
		display: inline-block;
		margin: 2px;
	}

	#friends_img{
		width: 50px;
		float: left;
		margin: 6px;
	}

	#friends_bar{
		min-height: 400px;
		padding: 8px;
		text-align: center;
		font-size: 20px;
		color: #405d9b;

	}

	#friends{
		clear: both;
		font-size: 12px;
		font-weight: bold;
		color: #405d9b;
	}

	textarea{
		width: 100%;
		border: none;
		font-family: tahoma;
		font-size: 14px;
		height: 60px;
	}

	#post_button{
		float: right;
		background-color: #405d9b;
		border: none;
		color: white;
		padding: 4px;
		font-size: 14px;
		border-radius: 2px;
		width: 50px;
	}
	#post_bar{
		margin-top: 20px;
		background-color: white;
		padding: 10px;
	}
	#post{
		padding: 4px;
		font-size: 13px;
		display: flex;
		margin-bottom: 20px;

	}


</style>

<body style="font-family: tahoma; background-color: #d0d8e4;">

	<br>
	<!-- top bar -->
	<div id="blue_bar">
		<div style="width: 800px;margin: auto;font-size: 30px;">
			Facebook &nbsp; &nbsp;<input type="" id="search_box" placeholder="Recherche amis">
			<img src="picture.jpg" style="width: 55px; float: right;">
		</div>
	</div>

	<!-- cover area -->
	<div style="width: 700px;margin: auto;min-height: 400px;">
		

		<!-- bellow cover area -->
		<div style="display: flex;">

			<!-- friends area -->
			<div style="min-height: 400px;flex: 1;">

				<div id="friends_bar">

					<img src="picture.jpg" id="profile_pic"><br>
					Dija Kara
				</div>
				
			</div>

			<!-- posts area -->
			<div style="min-height: 400px;flex: 2.5;padding: 20px;padding-right: 0px;">

				<div style="border: solid thin #aaa; padding: 10px;background-color: white;">

					<textarea placeholder="whats on your mind?"></textarea>
					<input id="post_button" type="submit" value="post">
					<br>
				</div>

				<!-- posts -->
				<div id="post_bar">
					
					<!-- posts 1 -->
					<div id="post">
						<div>
							<img src="user1.jpg" style="width: 75px;margin-right: 4px;">
						</div>
						<div>
							<div style="font-weight: bold;color: #405d9b;">Khady kara</div>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<br><br>
							<a href="">Aimer</a> . <a href="">Commenter</a> . <span style="color: #999;">09 juillet 2023</span> 

						</div>
					</div><!-- posts 2 -->
					<div id="post">
						<div>
							<img src="mya.jpg" style="width: 75px;margin-right: 4px;">
						</div>
						<div>
							<div style="font-weight: bold;color: #405d9b;">Mya Sow</div>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							<br><br>
							<a href="">Aimer</a> . <a href="">Commenter</a> . <span style="color: #999;">09 juillet 2023</span> 

						</div>
					</div>


				</div>

			</div>
		</div>

	</div>

</body>
</html>