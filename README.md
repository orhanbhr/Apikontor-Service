# Apikontor-Service
Apikontor.com PHP Service

<h3>Kullanımı</h3>

<span>Sayfaya Apikontor kütüphanesini dahil ediniz, kullandığınız framework'e göre değişebilir. Yada Apikontor::FUNCTION_NAME olarak dahil edebilirsiniz</span>

<b>Fiyatları Listeleme</b>

<br />

<code><?php
echo Apikontor::fiyatlar();
?></code>

<b>Talimat Gönderme</b>

<br />

<code><?php
echo Apikontor::talimat('sms','vodafone','79','5XXXXXXXXX','1234567');
?></code>
