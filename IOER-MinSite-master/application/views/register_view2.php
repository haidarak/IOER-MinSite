<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        html, body {height: 100%;}
        *{margin: 0px;padding: 0;}
        .container{
            width: 1000px;
            margin-left: auto;
            margin-right: auto;
            clear: both;
        }
        #header{
            height: 40px;
            background: #658CBF;
        }
        #content{
          padding: 10px;min-height:80%;
      }
      .logo{padding: 3px 0px;font-size: 25px;color: #ffffff;}
      a{text-decoration: none;}
      input{
        padding:3px;
        color:#333333;
        border:1px solid #96A6C5;
        margin-top:2px;
        width:180px;
        font-size:11px;
    }
    input[type='radio']{
        width:30px;
    }
    #register_form input[type='submit']
    {
        margin-left: 108px;
    }
    #register_form{
        width: 400px;
        float: left;
    }
    #register_form label{
        font-weight: bold;
        float: left;
        width: 108px;
    }
    #login_form
    {   float: right;
        position: relative;
        margin-top: 8px !important;
    }
    .error{
        float:left;
        border: 1px solid #FF607D;
        padding: 10px;
    }
</style>
</head>

<body>
    <div id="header" >
        <div class="container">
            <a class="logo" style="float: left;" href="http://www.tutsmore.com">Tutsmore</a>
            <div id="login_form">
                <form action="<?php echo base_url().'index.php/users/login';?>" method="post">
                    <label for="email">Email</label>
                    <input type="text" name="l_email" value="<?=set_value('l_email') ?>" />
                    <label for="password">Password</label>
                    <input type="password" name="l_pass"/>
                    <input type="submit" value="Sign in" name="signin"/>
                </form>
            </div>
        </div>
    </div>
    <div id="content" class="container">
        <div id="register_form">
            <h1>Sign Up</h1>
            <form action="<?php echo base_url().'index.php/users/do_register';?>" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="<?=set_value('nama') ?>"/>
                <label for="email">Email</label>
                <input type="text" name="email" value="<?=set_value('email') ?>" />
                <label for="password">Password</label>
                <input type="password" name="password"/>
                <label for="phone">No Handphone</label>
                <input type="text" name="phone"/>
                <input type="submit" value="Daftar" name="register"/>
            </form>
        </div>
        <br />
        <div class="error">
            <?php echo validation_errors(); ?>
        </div>
    </div>
    <div id="footer" class="container">
        <hr />
    </div>
</body>
</html>