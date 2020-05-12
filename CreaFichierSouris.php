<?php
    file_put_contents('coordonnees/test_souris.txt', $_POST['contFichier'], FILE_APPEND);
    echo '<SCRIPT>javascript:window.close()</SCRIPT>';

?>
