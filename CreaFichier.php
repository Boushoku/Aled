<?php
    file_put_contents('coordonnees/coor.txt', $_POST['contFichier'], FILE_APPEND);
    file_put_contents('coordonnees/answers.txt', $_POST['contFichier2'], FILE_APPEND);
    echo '<SCRIPT>javascript:window.close()</SCRIPT>';

?>
