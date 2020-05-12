<?php
    file_put_contents('coordonnees/test_clavier_entry.txt', $_POST['contFichier'], FILE_APPEND);
    file_put_contents('coordonnees/test_clavier_coor.txt', $_POST['contFichier2'], FILE_APPEND);
    file_put_contents('coordonnees/test_clavier_input.txt', $_POST['contFichier3'], FILE_APPEND);
    echo '<SCRIPT>javascript:window.close()</SCRIPT>';

?>
