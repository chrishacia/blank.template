<?php
	ini_set("display_errors", "1");
	error_reporting(E_ALL);
	include_once $_SERVER["DOCUMENT_ROOT"].'/assets/php/global_functions.php';
	include_once $_SERVER["DOCUMENT_ROOT"].'/assets/php/short_url_function.php';
	include_once $_SERVER["DOCUMENT_ROOT"].'/assets/php/session_management.php';
    include_once $_SERVER["DOCUMENT_ROOT"].'/assets/php/global_configuration.php';	
	$sess = new Session_management;
	$sessDetails = $sess->sessionDetails();
	$func = new Genfunc;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Simple Web Site</title>
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Something or Another">
        <meta name="author" content="Christopher Hacia">

<?php
    //include javascript librairies
    //defaults or globals across all page views
    if(count($default_css) > 0)
    {
        foreach($default_css as $cssD)
        {
            echo $func->gen_tags("css",$cssD);
        }
    }
    //additional javascript on a view to view basis
    if(count($extra_css) > 0)
    {
        foreach($extra_css as $cssE)
        {
            echo $func->gen_tags("css",$cssE);
        }
    }
?> 
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js?ver=1.0.000"></script>
        <![endif]-->
    </head>
    <body>
        <!-- bootstrap header -->
            <div class="navbar navbar-default">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AZUFO</a>
              </div>
              <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav" style="display:none;">
                  <li class="active"><a href="#">Active</a></li>
                  <li><a href="#">Link</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header">Dropdown header</li>
                      <li><a href="#">Separated link</a></li>
                      <li><a href="#">One more separated link</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-form navbar-left" style="display:none;">
                  <input type="text" class="form-control col-lg-8" placeholder="Search">
                </form>
                <ul class="nav navbar-nav navbar-right">
<?php
	if($sessDetails == false)
	{
?>
				  <li><a href="#">Register</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                    <div class="dropdown-menu" style="padding: 15px;">
						<form action="javascript:void(0);" method="post" accept-charset="UTF-8" id="user_login">
						  <input id="user_username" style="margin-bottom: 15px;" type="text" name="user[username]" size="30" />
						  <input id="user_password" style="margin-bottom: 15px;" type="password" name="user[password]" size="30" /><br>
						  <input id="user_remember_me" style="float: left; margin-right: 10px;" type="checkbox" name="user[remember_me]" value="1" />
						  <label class="string optional" for="user_remember_me"> Remember me</label>
						  <input class="btn btn-primary" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In" />
						</form>
                    </div>
                  </li>
<?php
	}
	else
	{
?>
		<li><a href="#">Logout</a></li>
<?php
	}
?>
                </ul>
              </div>
            </div>
        <!-- /boostrap header -->
		<div class="container theme-showcase" role="main">
			stuff
		</div>

<?php
    //include javascript librairies
    //defaults or globals across all page views
    if(count($default_js) > 0)
    {
        foreach($default_js as $jsD)
        {
            echo $func->gen_tags("js",$jsD);
        }
    }
    //additional javascript on a view to view basis
    if(count($extra_js) > 0)
    {
        foreach($extra_js as $jsE)
        {
            echo $func->gen_tags("js",$jsE);
        }
    }
?>    
    </body>
</html>