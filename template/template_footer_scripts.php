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