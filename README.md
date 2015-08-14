# Apikontor-Service
Apikontor.com PHP Service

<h3>Kullanımı</h3>

<span>Sayfaya Apikontor kütüphanesini dahil ediniz, kullandığınız framework'e göre değişebilir. Yada Apikontor::FUNCTION_NAME olarak dahil edebilirsiniz</span>

<span>Tüm dönüşler JSON formatında yapılmaktadır. json_decode() aracılığıyla dönüşleri rahatlıkla alabilirsiniz.</span>

<span>NOT: Apikontor.php tarafındaki kullanıcı adı ve şifreyi değiştirmeyi unutmayınız.</span>

<b>Fiyatları Listeleme</b>

<?php
echo Apikontor::fiyatlar();
?>

<b>Talimat Gönderme</b>

<?php
echo Apikontor::talimat('sms','vodafone','79','5XXXXXXXXX','1234567');
?>

<b>Talimat Durumu Sorgulama</b>

<?php
echo Apikontor::takip('1234567');
?>
