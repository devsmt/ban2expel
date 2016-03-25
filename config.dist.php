<?php
$my_hosts = [
    'hostname'=> 'password'
]; 

// abstraction representing the configuration of this instance
class Config {
    // countries that will be banned
    public static function getBannedCountries(){
        return ['CN','VN','KR','IN','HK','TH','TW','SC','NP','HK','MY'];
    }
    // first 3 digits of IP classes that will be skipped
    public static function getIPWhiteList() {
        return [
        "91.",
        ];
    }
    public static function getIPWhiteListMessage() {
        $m = '';
        $m .= "# 91.* #will be skipped \n" ;
        return $m;
    }
}
