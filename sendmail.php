<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // بيانات النموذج
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // إعداد البريد
    $to = "your-email@example.com"; // استبدل بهذا عنوان بريدك الإلكتروني
    $subject = "رسالة جديدة من نموذج الاتصال";
    $headers = "From: $email";

    // إرسال البريد
    $mailBody = "الاسم: $name\nالبريد الإلكتروني: $email\n\nالرسالة:\n$message";
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "<p>تم إرسال الرسالة بنجاح!</p>";
    } else {
        echo "<p>حدث خطأ أثناء إرسال الرسالة. يرجى المحاولة مرة أخرى.</p>";
    }
}
?>
