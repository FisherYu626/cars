
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
    <link href="style\style.css" rel='stylesheet' type='text/css' />
    <!--webfonts-->
    <link href='http://fonts.useso.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <script src="http://ajax.useso.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>

<body>
    <!--<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.login-form').fadeOut('slow', function(c){
	  		$('.login-form').remove();
		});
	});	  
});
</script>-->
    <!--SIGN UP-->

    <h1 style="color:white">Fisher 626 的车辆管理系统</h1>

    <div class="login-form">
        <div class="close"> </div>
        <div class="head-info">
            <label class="lbl-1"> </label>
            <label class="lbl-2"> </label>
            <label class="lbl-3"> </label>
        </div>
        <div class="clear"> </div>
        <div class="avtar">
            <img src="images\avtar.png" />
        </div>
        <form method="POST" action="useraction.php?a=login">
            <input name="username" type="text" class="text" value="Admin" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Admin';}">
            <div class="key">
                <input name="pwd" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
            </div>
            <div class="signin">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
    <div class="copy-rights">
        <p>Fisher626的汽车管理系统</p>
    </div>

</body>

</html>