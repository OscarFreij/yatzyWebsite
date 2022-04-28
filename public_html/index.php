<!DOCTYPE html>
<html lang="en">
<?php

    require "../private_html/modules/head.php";

?>
<body> 


<div class="wrapper">


<?php
include "../private_html/modules/navbar.php";

if(isset($_GET['page']))
{
    if (file_exists("../private_html/pages/".$_GET['page'].".php"))
    {
        include "../private_html/pages/".$_GET['page'].".php";
    }
    else
    {
        echo ("Page dose not exist : Error 404");
    }
}
else
{
    include "../private_html/pages/play.php";
}

?>

</div>

<script src="static/js/main.js"></script>
</body>
</html>