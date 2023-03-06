<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <style type="text/css">
    	.container{
    		width: 30%;
    		margin-top: 9%;
    		box-shadow: 0 3px 20px rgba(0,0,0,0.3);
    		padding: 40px;
    		background-color: white
    	}	
    	button{
    		width: 45%;
    	}

    </style>

    <title>Pengaduan Masyarakat</title>
</head>
<body>
    <div class="container">
        <h4 class="text-center">LOGIN</h4>
        <hr style="width: 70%;">
        <form action="proses-login.php" method="POST">

        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda!">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda!">
        </div>

        <button type="submit" class="btn btn-primary">LOGIN</button>
        <button type="reset" class="btn btn-danger">RESET</button>

        </form>
    </div>
</body>
</html>