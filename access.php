<?php


if(!isset($_SESSION)){
	session_start();
}

$password = '1234567890123';

$passlenght = strlen($password);


if (isset($_POST['u']) && $_POST['u'] == $password){
	$_SESSION['variable_sesion'] = $password;
}


if (isset($_POST['x'])){
	unset($_SESSION['variable_sesion']);
	session_destroy();
	
}




if (isset($_SESSION['variable_sesion']) && $_SESSION['variable_sesion'] == $password){
	
	echo '<!DOCTYPE html>
			<html>
			<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<title>OK</title>
			</head>
			<body>
			<h1>La sesión existe ...</h1>
			<form id=f method="POST">
	
			<a  href=ufull.php value="FULL">FULL</a>
			<input id=x type=submit name=x value="Salir">
			
			</form>
			</body>
			</html>';

}else{
	
	die('<!DOCTYPE html>
			<html>
			<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<title>Login</title>
				<style>
					* {
						margin: 0;
						padding: 0;
						outline: none;
					}
					#blackModal{
						position: fixed;
						top: 0;
						left: 0;
						right: 0;
						bottom: 0;
						background-color: rgba(0,0,0, 0.3);
					}
					#contentModal {
						position: fixed;
						top: 50%;
						left: 50%;
						transform: translate(-50%, -50%);
						width: calc(100% - 12px);
						max-width: 340px;
						min-height: 60px;
						overflow: hidden;
						border: 1px solid black;
						border-radius: 3px;
						box-shadow: 0 0 12px rgba(0,0,0, 0.5);
						background-color: white;
						box-sizing: border-box;
						-webkit-user-select: none;
						-moz-user-select: none;
						-ms-user-select: none;
						-o-user-select: none;
					}
					#headModal {
						border-bottom: 1px solid gray;
						background-color: black;
					}
					#headModal, #headModal * {
						color: white !important;
					}
					#bodyModal {
						position: relative;
						padding: 14px 8px;
					}
					#titleModal {
						padding: 0 8px;
						height: 32px;
						line-height: 32px;
						font-family: tahoma;
						font-size: 14px;
						color: black;
						
					}
					#sendModal, #closeModal {
						transition: all 0.3s;
						float: right;
						display: inline-block;
						margin: 0 4px;
						padding: 0 12px;
						min-width: 24px;
						height: 32px;
						line-height: 30px;
						font-family: monospace;
						font-size: 15px;
						color: white;
						border: 0px solid red;
						border-radius: 3px;
						box-sizing: border-box;
						cursor: pointer;
					}
					#sendModal:active, #closeModal:active {
						transform: translate(2px, 3px);
						box-shadow: 0 0 0 transparent;
					}
					
					/* Color normal */
					#sendModal {
						box-shadow: 2px 3px 1px #00aaf0;
						background-color: #00aef0;
					}
					#closeModal {
						box-shadow: 2px 3px 1px #a00f37;
						background-color: #da074b;
					}
					
					/* Color cuanto esta Activo. */
					#sendModal:active {
						background-color: #087cb1;
					}
					#closeModal:active {
						background-color: #b90845;
					}
					
					#passAlertModal {
						opacity: 0;
						transition: all 0.3s;
						position: absolute;
						top: 51px;
						left: 12px;
						width: 105px;
						border: 1px solid red;
						background-color: #de3333;
						height: 28px;
						line-height: 28px;
						padding: 0 12px;
						color: white;
						font-weight: 300;
						border-radius: 4px 4px 4px 4px;
						font-family: monospace;
					}
					#passAlertModal:before {
						content: "";
						position: absolute;
						left: 0;
						bottom: 100%;
						border-width: 6px 6px 6px 6px;
						border-style: solid;
						border-color: transparent transparent #de3333 transparent;
						transform: translate(5px, -1px);
					}
					
					#passModal {
						transition: all 0.3s;
						display: block;
						height: 32px;
						margin: 0 auto 12px;
						padding: 0 6px;
						width: calc(100% - 8px);
						border: 1px solid #00aaf0;
						border-radius: 3px;
						background-color: white;
						box-sizing: border-box;
					}
					
					.clear {
						clear: both;
					}
					
					
				</style>
			</head>
			<body>
				<div id=blackModal>
					<form id=contentModal method=post>
						<div id=headModal>
							<div id=titleModal>Login password.</div>
						</div>
						<div id=bodyModal>
							
							<input id=passModal type=password name=u placeholder="Password.">
							<div id=passAlertModal>LLave invalida</div>
							<div class=clear></div>
							<div id=closeModal>Salir</div>
							<div id=sendModal>Enviar</div>
							<div class=clear></div>
						</div>
					</form>
				</div>
				<script>
					(function(){
						var send = function(){
							if((passModal.value == null || passModal.value == "") || !(passModal.value.length == '. $passlenght . ')){
								passModal.focus();
								passModal.style = "border: 1px solid red;";
								passAlertModal.style = "opacity: 1;";
								return false;
								
							}
							passModal.removeAttribute("style");
							passAlertModal.removeAttribute("style");
							contentModal.submit(); 
							return false;
						};
						var close = function(){
							window.location="https://www.google.com"
						};
							passModal.onkeyup = e => e.keyCode == 13 ? send(): (function(){
							
							if(passModal.value.length == '. $passlenght . '){
								passModal.removeAttribute("style");
								passAlertModal.removeAttribute("style");
							}else{
								passModal.style = "border: 1px solid red;";
								passAlertModal.style = "opacity: 1;";
							}
							return true;
						})();
						sendModal.onclick = send;
						closeModal.onclick = close;
					})();
					
				</script>
				<!--
				<form id=f method="POST"><input id=u type=hidden name=u></form>
				<script>
					onload = async () => {
						setTimeout(()=>{
							u.value = prompt("Login Password!");
							f.submit();
						}, 1500);
						
					};
				</script>
				-->
			</body>
			</html>');
	
}






?>

