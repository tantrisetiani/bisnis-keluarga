<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <title>DAFTAR</title>
    <style>
        body {
            background-image: url(orange.png);
            background-repeat: no-repeat;
        }

        #card {
            background: #fbfbfb;
            border-radius: 8px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            height: 630px;
            margin: 6rem auto 8.1rem auto;
            width: 329px;
            padding : 20px;
        }

        #card-content {
            padding: 12px 44px;
        }

        #card-title {
            font-family: "Raleway Thin", sans-serif;
            letter-spacing: 4px;
            padding-bottom: 23px;
            padding-top: 13px;
            text-align: center;
        }

        .underline-title {
            background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
            height: 2px;
            margin: -1.1rem auto 0 auto;
            width: 89px;
        }

        a {
            text-decoration: none;
        }

        label {
            font-family: "Raleway", sans-serif;
            font-size: 11pt;
        }

        #forgot-pass {
            color: #2dbd6e;
            font-family: "Raleway", sans-serif;
            font-size: 10pt;
            margin-top: 3px;
            text-align: right;
        }

        .form {
            align-items: left;
            display: flex;
            flex-direction: column;
        }

        .form-border {
            background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
            height: 1px;
            width: 100%;
        }

        .form-content {
            background: #fbfbfb;
            border: none;
            outline: none;
            padding-top: 14px;
        }

        #signup {
            color: #2dbd6e;
            font-family: "Raleway", sans-serif;
            font-size: 10pt;
            margin-top: 16px;
            text-align: center;
        }

        #submit-btn {
            background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
            border: none;
            border-radius: 21px;
            box-shadow: 0px 1px 8px #24c64f;
            cursor: pointer;
            color: white;
            font-family: "Raleway SemiBold", sans-serif;
            height: 42.3px;
            margin: 0 auto;
            margin-top: 50px;
            transition: 0.25s;
            width: 153px;
        }

        #submit-btn:hover {
            box-shadow: 0px 1px 18px #24c64f;
        }
        
    </style>
</head>
<body>

<div id="card">
        <div id="card-title">
            <h2>DAFTAR</h2>
            <div class="underline-title"></div>
        </div>

        <form method="post" class="form">
            <label for="username" style="padding-top:13px">&nbsp;Username</label>
            <input id="username" class="form-content" type="username" name="username" autocomplete="on" required />
            <div class="form-border"></div>
            <label for="telepon" style="padding-top:22px">&nbsp;No.Telp</label>
            <input id="telepon" class="form-content" type="telepon" name="telepon" required />
            <div class="form-border"></div>
            <label for="email" style="padding-top:22px">&nbsp;Email</label>
            <input id="email" class="form-content" type="email" name="email" required />
            <div class="form-border"></div>
            <label for="address" style="padding-top:22px">&nbsp;Address</label>
            <input id="address" class="form-content" type="address" name="address" required />
            <div class="form-border"></div>
            <label for="password" style="padding-top:22px">&nbsp;Password</label>
            <input id="password" class="form-content" type="password" name="password" required />
            <div class="form-border"></div>
            <a href="#">
                <legend id="forgot-pass">Forgot password?</legend>
            </a>
            <input id="submit-btn" type="submit" name="submit" value="DAFTAR" /><a href="" id="signup">Do you have account?</a>
        </form>
    </div>
    <?php
        if (isset($_POST['submit'])) {
            session_start();
            include 'db.php';
            $user_telp = $_POST["user_telp"];
            $user_email = $_POST["user_email"];
            $user_address = $_POST["user_address"];

            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);

            $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '" . $username . "' AND password = '" .MD5($password). "'");
            if(mysqli_num_rows($result) > 0){
                $id = mysqli_fetch_object($result);
                $_SESSION['status_login'] = true;
                $_SESSION['a_global'] = $id;
                $_SESSION['id'] = $d->user_id;
                echo '<script>window.location="beranda.php"</script>';
            }else{
                echo '<script>alert("Username atau password Anda salah!")</script>';
            }
        }
        ?>
    </div>
    
</body>
</html>