<?php
if (is_uploaded_file($_FILES['plik']['tmp_name'])) {
    echo 'Plik został pomyślnie przesłany na serwer.';
    echo '<br/>';
    move_uploaded_file($_FILES['plik']['tmp_name'],
    $_SERVER['DOCUMENT_ROOT'].'/zdjecia_upload/'.$_FILES['plik']['name']);
    }
else {
echo 'Błąd! Plik nie został przesłany! Sproboj ponownie!';
}

?>
