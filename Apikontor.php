<?php
/**
 * Created by PhpStorm.
 * User: OrhanBHR
 * Website: www.orhanbhr.com
 * Mail: this@orhanbhr.com
 * Date: 14.08.2015
 * Time: 01:00
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apikontor {

    public static $bayikodu = 'KULLANICI ADI'; // apikontor.com Kullanıcı Adı
    public static $sifre = 'SIFRE'; // Apikontor.com Şifre

    /**
     * @return string
     */
    public static function fiyatlar()
    {
        $url = @file_get_contents('http://www.apikontor.com/services/api.php?bayikodu='.self::$bayikodu.'&sifre='.self::$sifre.'&islem=fiyatlar');
        $response = explode(' ',$url);

        if ($response[1] == 2) {
            $data = [
                'response' => false,
                'code' => (int)$response[1],
                'description' => 'Hatalı $bayikodu yada $sfire'
            ];
        } else {
            $lines = explode("\n",$url);
            $pricesArrg = [];
            foreach (@$lines as $key => $value) {
                $noktali_virgul_parcala = explode(";",$lines[$key]);
                preg_match_all('#(.*?)\((.*?)\)\[(.*?)\]#Ssie',$noktali_virgul_parcala[0],$credits);
                if (!empty(@trim($credits[1][0])))
                    $pricesArrg[] = [
                        'operator' => trim($credits[1][0]),
                        'type' => trim($credits[2][0]),
                        'price' => trim($credits[3][0]),
                        'cost' => trim($noktali_virgul_parcala[1])
                    ];
            }
            $data = [
                'response' => true,
                'code' => (int)$response[1],
                'description' => 'OK',
                'prices' => $pricesArrg
            ];
        }

        return json_encode($data);
    }

    /**
     * @param null $tip
     * @param null $operator
     * @param null $kontor
     * @param null $numara
     * @param null $takipno
     * @return string
     */
    public static function talimat($tip = null,$operator = null,$kontor = null,$numara = null,$takipno = null)
    {
        $url = @file_get_contents('http://www.apikontor.com/services/api.php?bayikodu='.self::$bayikodu.'&sifre='.self::$sifre.'&islem=talimat&tip='.$tip.'&operator='.$operator.'&kontor='.$kontor.'&numara='.$numara.'&takipno='.$takipno);
        $response = explode(' ',$url);

        if ($tip == null OR $operator == null OR $kontor == null OR $numara == null OR $takipno == null) {
            if ($tip == null) {
                $data = [
                    'response' => false,
                    'code' => (int)0,
                    'description' => 'Lütfen tip gönderimini kontrol ediniz.'
                ];
            } else if ($operator == null) {
                $data = [
                    'response' => false,
                    'code' => (int)0,
                    'description' => 'Lütfen operator gönderimini kontrol ediniz.'
                ];
            } else if ($kontor == null) {
                $data = [
                    'response' => false,
                    'code' => (int)0,
                    'description' => 'Lütfen kontor gönderimini kontrol ediniz.'
                ];
            } else if ($numara == null) {
                $data = [
                    'response' => false,
                    'code' => (int)0,
                    'description' => 'Lütfen numara gönderimini kontrol ediniz.'
                ];
            } else if ($takipno == null) {
                $data = [
                    'response' => false,
                    'code' => (int)0,
                    'description' => 'Lütfen takipno gönderimini kontrol ediniz.'
                ];
            } else {
                $data = [
                    'response' => false,
                    'code' => (int)0,
                    'description' => 'HATA: Bu hata ile ilgili olarak lütfen sistem yöneticisine başvurunuz. (x003)'
                ];
            }
        } else {
            if ($response[0] == 'OK') {
                $data = [
                    'response' => true,
                    'code' => (int)2,
                    'description' => 'Beklemede'
                ];
            } else if ($response[0] == 'ERR') {
                if ($response[1] == '01') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Eksik Parametre girilmiştir.'
                    ];
                } else if ($response[1] == '02') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Hatalı $bayikodu yada $sifre'
                    ];
                } else if ($response[1] == '03') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Geçersiz işlem parametresi.'
                    ];
                } else if ($response[1] == '04') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Geçersiz takip numarası.'
                    ];
                } else if ($response[1] == '05') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Geçersiz tip parametresi.'
                    ];
                } else if ($response[1] == '06') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Geçersiz operator parametresi.'
                    ];
                } else if ($response[1] == '07') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Geçersiz numara parametresi.'
                    ];
                } else if ($response[1] == '08') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Geçersiz takip no parametresi.'
                    ];
                } else if ($response[1] == '09') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'İstediğiniz kontör seçtiğiniz operatöre yüklenemez.'
                    ];
                } else if ($response[1] == '10') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Sistemde bakım çalışması var, lütfen daha sonra tekrar deneyiniz.'
                    ];
                } else if ($response[1] == '11') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Sistemde bulunan limitiniz yeterli değil.'
                    ];
                } else if ($response[1] == '12') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Bu operatöre günlük gönderim limitiniz dolmuştur.'
                    ];
                } else if ($response[1] == '13') {
                    $data = [
                        'response' => false,
                        'code' => (int)$response[1],
                        'description' => 'Bu ürüne şuan gönderim yapılamıyor, lütfen daha sonra tekrar deneyiniz.'
                    ];
                } else {
                    $data = [
                        'response' => false,
                        'code' => (int)0,
                        'description' => 'HATA: Bu hata ile ilgili olarak lütfen sistem yöneticisine başvurunuz. (x002)'
                    ];
                }
            } else {
                $data = [
                    'response' => false,
                    'code' => 0,
                    'description' => 'HATA: Bu hata ile ilgili olarak lütfen sistem yöneticisine başvurunuz. (x001)'
                ];
            }
        }

        return json_encode($data);
    }

    /**
     * @param null $takipno
     * @return string
     */
    public static function takip($takipno = null)
    {
        $url = @file_get_contents('http://www.apikontor.com/services/api.php?bayikodu='.self::$bayikodu.'&sifre='.self::$sifre.'&islem=takip&takipno='.$takipno);
        $response = explode(' ',$url);

        if ($takipno != null) {
            if ($response[1] == 1) {
                $data = [
                    'response' => true,
                    'code' => (int)$response[1],
                    'description' => 'Kontör Yüklendi'
                ];
            } else if ($response[1] == 2) {
                $data = [
                    'response' => true,
                    'code' => (int)$response[1],
                    'description' => 'Beklemede'
                ];
            } else if ($response[1] == 3) {
                $data = [
                    'response' => true,
                    'code' => (int)$response[1],
                    'description' => 'Abone Bulunamadı'
                ];
            } else {
                $data = [
                    'response' => false,
                    'code' => 0,
                    'description' => 'HATA: Bir sorun oluştu.'
                ];
            }
        } else {
            $data = [
                'response' => false,
                'code' => 0,
                'description' => 'HATA: Takip no belirtilmedi.'
            ];
        }

        return json_encode($data);
    }

}

?>
