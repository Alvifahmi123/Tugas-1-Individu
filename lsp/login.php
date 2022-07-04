<?php
	include("config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body{
	font-family: sans-serif;
	background: #2F4F4F;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: #fff ;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 30px 20px;
	box-shadow: 0px 0px 100px 4px #d6d6d6;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #2F4F4F;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 20pt;
}
 
.alert{
	background: #e44e4e;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #b32929;
}
.alertt{
	background: #54906B ;
	color: white;
	padding: 10px;
	text-align: center;
	border:1px solid #54906B ;
}
	</style>
</head>
<body>
 
	<div class="kotak_login">
		<a class="link" href="index.php">Silahkan login</a>
 
		<form action="" method="post"><br>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<input type="password" name="pass" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" name="login" value="LOGIN">
 
			<br/>
			<br/>
			<br/>
				
		</form>
	</div>
	<?php
        if(isset($_POST["login"])) {
            $username = $_POST['username'];
            $pass = $_POST['pass'];
    
    
            $ambil = $db->query("SELECT * FROM user WHERE username = '$username' AND pass = '$pass'");
            $akun_cocok = $ambil->num_rows;
    
            //cek username
            if($akun_cocok == 1){
                $akun = $ambil->fetch_assoc();
    
                $_SESSION["login"] = true;
                $_SESSION["user"] = $akun;
                echo "<div class='alertt alert-success text-center'>Login Berhasil</div>";
                echo "<meta http-equiv='refresh' content='1;url=beranda.php'>";
    
            }else{
                echo "<div class='alert alert-danger text-center'>Login Gagal</div>";
                echo "<meta http-equiv='refresh' content='1;url=login.php'>";
            }
            
        }
    ?>
 
 
</body>
</html>