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