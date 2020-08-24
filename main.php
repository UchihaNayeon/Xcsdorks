<?php
require_once __DIR__ . "/vendor/autoload.php";

$Color = new \Colors\Color();
$ZDork = new \Xcs\Main;
$ZDork->cls();

$Zeeb = '

███████████████████
█▄─▀─▄█─▄▄▄─█─▄▄▄▄█
██▀─▀██─███▀█▄▄▄▄─█
▀▄▄█▄▄▀▄▄▄▄▄▀▄▄▄▄▄▀

echo str_replace('$', "\e[1;36m$\e[0m", $Itachi) . PHP_EOL;

echo $Color("𝙓𝑡𝑟𝑒𝑚𝑒 𝘾𝑎𝑟𝑑𝑒𝑟𝑠")->bg_light_red()->white()->italic()->center() . PHP_EOL;
echo $Color("𝙎𝑜𝑐𝑖𝑒𝑡𝑦")->bg_light_red()->white()->italic()->center() . PHP_EOL . PHP_EOL;


echo "   " . $Color("[^] Input Dork        : ")->bg_black()->bold()->green();
$Dork = trim(fgets(STDIN, 1024));
echo "   " . $Color("[^] Save Result [y/n] : ")->bg_black()->bold()->green();
$Save = trim(fgets(STDIN, 1024));

if (strtolower($Save) == "y") {
    echo "   " . $Color("[^] Save as           : ")->bg_black()->bold()->green();
    $SaveAs = trim(fgets(STDIN, 1024));
}

$start = 0;
$queue = 1;
$tempFile = hash("sha256", rand(000, 999)) . ".txt";

$xcsDork->setDork( $Dork );

echo PHP_EOL;

while(1){
    if ($ZDork->search($start)) {
        $start = $start+10;
        foreach ($XcsDork->parseOutput() as $key => $value) {

            /*
            echo "       " . $Color("URL     : " . $value["url"])->bg_black()->bold()->green() . PHP_EOL;
            echo "       " . $Color("TITLE   : " . $value["title"])->bg_black()->bold()->green() . PHP_EOL;
            echo "       " . $Color("CONTENT : ")->bg_black()->bold()->green() . $value["content"] . PHP_EOL;
            */

            echo "     [" . $queue++ . "] " . $Color($value["url"])->bg_black()->bold()->green().PHP_EOL;
            if (isset($SaveAs)) {
                if (empty($SaveAs)) {
                    $ZDork->write( $tempFile, $value["url"].PHP_EOL );
                } else {
                    $ZDork->write( $SaveAs, $value["url"].PHP_EOL );
                }
            }
        }
    } else {
        break;
    }
}

if ($start === 0) {
    $ZDork->cls();
    echo "
    Penelusuran Anda - {$Dork} - tidak cocok dengan dokumen apa pun.

    Saran:
    
    Pastikan semua kata dieja dengan benar.
    Coba kata kunci yang lain.
    Coba kata kunci yang lebih umum." . PHP_EOL;
}