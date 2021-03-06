<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/index.css" type="text/css" />
	<link rel="stylesheet" href="css/navigator.css" type="text/css" />
	<link rel="stylesheet" href="css/panel.css" type="text/css" />
	<title>Panel - CloudIDE</title>
</head>
<script>
	function changeToHome() {
		window.location.href="index.php";
	}	
</script>
<body>
<div class="container">
	<div class="navigator">
		<div class="navigator-button" OnClick="changeToHome()">
			Home
		</div>
		<div class="navigator-button">
			Admin_Home
		</div>
		<div class="navigator-button">
			Environment
		</div>
		<div class="navigator-button">
			Users&Groups
		</div>
	</div>
	<div class="window">
		<div class="list">
			<span class="menu">
				<span class="smalltag">
					Server Status
				</span>
				<span class="smalltag">
					Environment Options
				</span>
				<span class="smalltag">
					MySQL Configuration
				</span>
				<span class="smalltag">
					Stop/Start/Restart
				</span>
				<span class="smalltag">
					Plug-ins
				</span>
			</span>
		</div>
		<div class="admincontainer">
			<div class="content">
				<div class="tag">
					<div class="tagtitle">Server Status</div>
					<div class="tagcontent">
					</div>
				</div>
				<div class="tag">
					<div class="tagtitle">Environment Options</div>
					<div class="tagcontent">
					</div>
				</div>
				<div class="tag">
					<div class="tagtitle">MySQL Configuration</div>
					<div class="tagcontent">
					</div>
				</div>
				<div class="tag">
					<div class="tagtitle">Stop/Start/Restart</div>
					<div class="tagcontent">
					</div>
				</div>
				<div class="tag">
					<div class="tagtitle">Plug-ins</div>
					<div class="tagcontent">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
