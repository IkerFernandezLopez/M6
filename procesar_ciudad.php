<?php
if (isset($_POST['municipi'])) {
    $municipi = htmlspecialchars($_POST['municipi']);
    echo "<iframe src='https://es.wikipedia.org/wiki/" . urlencode($municipi) . "' height='500px' width='100%'></iframe>";
} else {
    echo "No se recibió ninguna ciudad";
}
?>