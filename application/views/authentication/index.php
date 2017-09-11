
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ingia JATU</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity=" sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);
        @import url(https://fonts.googleapis.com/css?family=Raleway);
        header {
            font-family: Raleway;
            font-size: 60px;
            color: white;
            text-align: center;
            font-weight: 400;
            -webkit-animation: head 2.0s;
            -webkit-animation-iteration-count: 1;
            animation: head 2.0s;
            animation-iteration-count: 1;
        }
        @-webkit-keyframes head {
            from{margin-top: -200px;}
            to{margin-top: 0px;}
        }
        #desc{
            font-family: Roboto;
            color: white;
            text-align: center;
            -webkit-animation: desc 3.0s;
            -webkit-animation-iteration-count: 1;
            animation: desc 3.0s;
            animation-iteration-count: 1;
        }
        @-webkit-keyframes desc {
            from{margin-left: 0;}
            to{margin-left: 45%;}
        }
        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }
        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        }
        @media (max-width: @screen-xs-max) {
            .form{
                max-width: 80%;
                min-width: 70%;
                min-height: 50%;
                margin: auto;
            }
        }
        @media (min-width: @screen-sm-min) and (max-width: @screen-sm-max) {
            .form{
                max-width: 80%;
                min-width: 70%;
                margin: auto;
            }
        }
        @media (min-width: @screen-md-min) and (max-width: @screen-md-max) {
            .form{
                max-width: 90%;
                min-width: 70%;
                margin: auto;
            }
        }
        @media (min-width: @screen-lg-min) {

        }
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f0f0f0;
            width: 100%;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #06617d;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
            /*background: #43A047;*/
            background: #067370;
        }
        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }
        .form .message a {
            color: #06617d;
            text-decoration: none;
        }
        .form .register-form {
            display: none;
        }
        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }
        .container:before, .container:after {
            content: "";
            display: block;
            clear: both;
        }
        .container .info {
            margin: 50px auto;
            text-align: center;
        }
        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }
        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }
        .container .info span a {
            color: #000000;
            text-decoration: none;
        }
        .container .info span .fa {
            color: #EF3B3A;
        }
        body {
            width: 100%;
            height: 100%;
            background: linear-gradient(270deg, #003366, #b27000, #06617d, #067370);
            background-size: 800% 800%;
            -webkit-animation: colors 30s ease infinite;
            -moz-animation: colors 30s ease infinite;
            animation: colors 30s ease infinite;
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        @-webkit-keyframes colors {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        @-moz-keyframes colors {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }
        @keyframes colors {
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }

        .btn-success {
            background-color: transparent;
            background-image: none;
            padding: 8px 50px;
            border-radius: 0;
            border: 2px solid #93a5ab;
            box-shadow: inset 0 0 0 0 #7692A7;
            -webkit-transition: all ease 0.8s;
            -moz-transition: all ease 0.8s;
            transition: all ease 0.8s;
        }

        .btn-success:focus,
        .btn-success:hover,
        .btn-success.active,
        .btn-success:active {
            background-color: transparent;
            border-color: #fff;
            box-shadow: inset 0 0 100px 0 #7692A7;
            color: #FFF;
        }
    </style>
</head>
<body>
<header>JATU</header>
<!--<div id="desc">Version 1.0| jatu.co.tz</div>-->
<div class="login-page">
    <div class="form">
        <form class="login-form" action="<?php echo base_url().'index.php/profile/index'; ?>" method="post">
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input class="form-control" type="text" name='username' id="username" placeholder="Namba ya Uanachama"/>
            </div>
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input class="form-control" type="password" id="pwd" name='password' placeholder="Neno la siri"/>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Ingia</button>
            <div style="margin-top: 4%;">
                <?php if ($requst_link === true){ ?>
                <a href="<?php echo base_url().'index.php/authentication/forgot'; ?>">
                    Umesahau taarifa zako
                </a>
                <?php } ?>
            </div>
        </form>
        <div id="msg">
            <h4><?php echo $message; ?></h4>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

<script type="text/javascript">

</script>
</body>
</html>