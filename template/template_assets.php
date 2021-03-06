<?php
    $default_js_dir     = "./assets/js/";
    $default_js_ver     = "1.0.000";
    $default_js         = [];
    $extra_js           = [];
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"jquery-1.11.1.min.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"underscore-min.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"json2.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"uuid.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"backbone-min.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"handlebars-v2.0.0.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"modernizr.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"moment.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"moment-timezone.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"jquery.cookie.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"jquery.colorbox-min.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"bootstrap.min.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir."flot/", "script_name"=>"jquery.flot.min.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir."datatables/", "script_name"=>"jquery.dataTables.min.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"global.functions.js", "script_ver"=>$default_js_ver, "script_remote_path"=>null, "if_else"=>null));

    $default_css_dir    = "./assets/css/";
    $default_css_ver    = "1.0.000";
    $default_css        = [];
    $extra_css          = [];
    array_push($default_css, array("script_path"=>$default_css_dir, "script_name"=>"bootstrap.min.css", "script_ver"=>$default_css_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_css, array("script_path"=>$default_css_dir, "script_name"=>"bootstrap-theme.min.css", "script_ver"=>$default_css_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_css, array("script_path"=>$default_css_dir, "script_name"=>"colorbox.css", "script_ver"=>$default_css_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_css, array("script_path"=>$default_css_dir."datatables/", "script_name"=>"jquery.dataTables.min.css", "script_ver"=>$default_css_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_css, array("script_path"=>$default_css_dir, "script_name"=>"font-awesome.min.css", "script_ver"=>$default_css_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_css, array("script_path"=>$default_css_dir, "script_name"=>"global.style.css", "script_ver"=>$default_css_ver, "script_remote_path"=>null, "if_else"=>null));
    array_push($default_css, array("script_path"=>null, "script_name"=>null, "script_ver"=>$default_css_ver, "script_remote_path"=>'http://html5shiv.googlecode.com/svn/trunk/html5.js', "if_else"=>"lt IE 9"));
?>