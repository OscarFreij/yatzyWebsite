<!DOCTYPE html>
<html lang="en">
<?php

    require "../private_html/modules/head.php";

?>
<body class="d-flex flex-column min-vh-100"> 
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

include "../private_html/modules/footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="static/js/main.js"></script>
</body>
</html>