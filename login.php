<?php
	@ob_start();
	session_start();
	if(isset($_POST['proses'])){
		require 'config.php';
			
		$user = strip_tags($_POST['user']);
		$pass = strip_tags($_POST['pass']);

		$sql = 'select member.*, login.user, login.pass
				from member inner join login on member.id_member = login.id_member
				where user =? and pass = md5(?)';
		$row = $config->prepare($sql);
		$row->execute(array($user, $pass));
        $jum = $row->rowCount();
        if($jum > 0){
            $hasil = $row->fetch();
            $_SESSION['admin'] = $hasil;
            echo '<script>alert("Login Sukses");window.location="index.php"</script>';
        } else {
            echo '<script>alert("Login Gagal");history.go(-1);</script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - POS</title>
    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            background: url('latar1.png') no-repeat center center fixed;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="h4 text-gray-900 mb-4"><b>Login POS </b></h4>
                            </div>
                            <form class="form-login" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="user"
                                        placeholder="Masukkan username admin" autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="pass"
                                        placeholder="Password">
                                </div>
                                <button class="btn btn-primary btn-block" name="proses" type="submit" style="background-color: #881337; color: white;">
                                    <i class="fa fa-lock"></i> Masuk
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="sb-admin/vendor/jquery/jquery.min.js"></script>
    <script src="sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="sb-admin/js/sb-admin-2.min.js"></script>
</body>
</html>
