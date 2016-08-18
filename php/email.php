<?php
/**
 * Отправка Email сообщений
 * @category Вспомогательные
 * @param string $toEmail        кому( Пример: test@test.com )
 * @param string $letterSubject   тема письма
 * @param string $message   телописьма HTML
 * @param string $from_user откого
 * @return bool
 */

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $title = $_POST['form'];

    echo sendMail($name, $phone, $title);
    exit;
}




function sendMail($name, $phone, $title){
    $toEmail = 'info@robotx.ru';
    $toTitle = 'Письмо с лендинга';
    $toInfo = 'Заголовок формы запроса = "'.$title.'" Имя = "'.$name.'"" Телефон = "'.$phone.'""';

    return mail(
        $toEmail,
        $toTitle,
        $toInfo

    );
 };

?>
