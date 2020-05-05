<?php
    file_put_contents('coordonnees/coor.txt', $_POST['contFichier'], FILE_APPEND);
    echo '<SCRIPT>javascript:window.close()</SCRIPT>';

?>
