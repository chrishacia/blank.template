<?php
    include_once $_SERVER["DOCUMENT_ROOT"].'/template/template_assets.php'; //multi-dimensional array of scripts/styles
    include_once $_SERVER["DOCUMENT_ROOT"].'/template/template_header.php'; //contains inital html markup (including meta tags and styles)
    include_once $_SERVER["DOCUMENT_ROOT"].'/template/template_body.php';   //contains everything within the body tag (except js references)
    include_once $_SERVER["DOCUMENT_ROOT"].'/template/template_footer.php'; //contains end inital html markup (including js references)
?>