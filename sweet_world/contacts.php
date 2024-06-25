<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"]));
    

    // Email получателя
    $to = "kohmaks6@gmail.com"; // Замените на ваш реальный адрес
    $subject = "Новое сообщение с формы обратной связи";

    // Форматирование сообщения
    $email_content = "Имя: $name\n";
    $email_content .= "Электронная почта: $email\n\n";
    $email_content .= "Сообщение:\n$message\n";

    // Заголовки для почты
    $headers = "From: $email";

    // Попытка отправки email
    //mail($to, $subject, $email_content, $headers)

    if (mail($to, $subject, $email_content, $headers)) {
        header('Location: index.html');
    } else {
        header('Location: index.html');
    }
}
?>
