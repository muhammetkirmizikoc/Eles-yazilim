<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gonderen_email = $_POST["email"]; // Formdan gelen e-posta adresini alır
    $gonderen_isim = $_POST["name"]; // Formdan gelen ad bilgisini alır
    $mesaj = $_POST["message"]; // Formdan gelen mesajı alır
    
    $alici_email = "muhametkkoc@gmail.com"; // Alıcı e-posta adresi (Değiştirilmelidir)
    $alici_isim = "XYZ Şirketi"; // Alıcı adı (Değiştirilmelidir)

    $konu = "İletişim Formundan Yeni Mesaj: $gonderen_isim"; // E-posta konusunu oluşturur

    $headers = "From: $gonderen_isim <$gonderen_email>\r\n"; // Gönderen bilgilerini ekler
    $headers .= "Reply-To: $gonderen_isim <$gonderen_email>\r\n"; // Yanıt verme adresini ekler
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n"; // E-posta içeriğinin tipini ayarlar

    if (mail($alici_email, $konu, $mesaj, $headers)) {
        echo "E-posta başarıyla gönderildi."; // E-posta gönderimi başarılıysa bu mesajı görüntüler
    } else {
        echo "E-posta gönderilirken bir hata oluştu."; // E-posta gönderimi başarısızsa bu mesajı görüntüler
    }
}
?>
