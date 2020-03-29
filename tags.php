<?php ## Удаление HTML-тегов из строки.
  $st =<<<HTML
    <b>Жирный текст IT TV</b>
    <tt>Моноширинный текст</tt>
    <a href='https://www.youtube.com/channel/UCpzeKoDC1-50cuanrY_TXOQ'>Ссылка НА КАНАЛ</a>
    a<b && x>s
HTML;
  echo "Исходный текст: $st";
  echo "<hr>После удаления тэгов: ".strip_tags($st, "<tt><b>");
?>
