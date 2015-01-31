<?php
class View
{  
    function show($template, $content, $data=NULL)
    {
		include './templates/'.$template.'.php';
    }
}
?>