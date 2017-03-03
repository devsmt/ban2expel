<?php

function ip2country($ip){
    $ip = safe_IP($ip);
    // - scorrere tutti gli ip di una rete e popolare un db sqlite con ip_inizio, ip_fine, country code
    // - saltare gli ip che appartengono a una sottorete
    // dato un db country=>ip list, genereare file host.deny data una lista di country
    $output = `whois $ip  -H | grep country | awk \'{print $2}\''`;
}
