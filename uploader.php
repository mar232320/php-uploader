<?php
if (is_uploaded_file($_FILES['plik']['tmp_name'])) {
    echo 'Plik został pomyślnie przesłany na serwer.';
    echo '<br/>';
    move_uploaded_file($_FILES['plik']['tmp_name'],
    $_SERVER['DOCUMENT_ROOT'].'/zdjecia_upload/'.$_FILES['plik']['name']);
    // /zdjecia_upload/ to nazwa katalogu z przesłanymi plikami. Jezeli chcesz uzyc mojego skryptu na swojej stronie zmien ja na wlasna!
    }
else {
echo 'Błąd! Plik nie został przesłany! Sproboj ponownie!';
}

?>
