<?php
    $default_js_dir     = "./assets/js/";
    $default_js_ver     = "1.0.000";
    $default_js         = [];
    $extra_js           = [];
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"jquery-1.11.1.min.js", "script_ver"=>$default_js_ver));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"moment.js", "script_ver"=>$default_js_ver));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"moment-timezone.js", "script_ver"=>$default_js_ver));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"jquery.cookie.js", "script_ver"=>$default_js_ver));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"jquery.colorbox-min.js", "script_ver"=>$default_js_ver));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"bootstrap.min.js", "script_ver"=>$default_js_ver));
    array_push($default_js, array("script_path"=>$default_js_dir."datatables/", "script_name"=>"jquery.dataTables.min.js", "script_ver"=>$default_js_ver));
    array_push($default_js, array("script_path"=>$default_js_dir, "script_name"=>"global.functions.js", "script_ver"=>$default_js_ver));

    $default_css_dir    = "./assets/css/";
    $default_css_ver    = "1.0.000";
    $default_css        = [];
    $extra_css          = [];
    array_push($default_css, array("script_path"=>$default_css_dir, "script_name"=>"bootstrap.min.css", "script_ver"=>$default_css_ver));
    array_push($default_css, array("script_path"=>$default_css_dir, "script_name"=>"bootstrap-theme.min.css", "script_ver"=>$default_css_ver));
    array_push($default_css, array("script_path"=>$default_css_dir, "script_name"=>"colorbox.css", "script_ver"=>$default_css_ver));
    array_push($default_css, array("script_path"=>$default_css_dir."datatables/", "script_name"=>"jquery.dataTables.min.css", "script_ver"=>$default_css_ver));
    array_push($default_css, array("script_path"=>$default_css_dir, "script_name"=>"font-awesome.min.css", "script_ver"=>$default_css_ver));
    array_push($default_css, array("script_path"=>$default_css_dir, "script_name"=>"global.style.css", "script_ver"=>$default_css_ver));
?>