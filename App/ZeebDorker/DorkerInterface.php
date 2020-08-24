<?php
namespace 𝙓𝑡𝑟𝑒𝑚𝑒 𝘾𝑎𝑟𝑑𝑒𝑟𝑠 𝙎𝑜𝑐𝑖𝑒𝑡𝑦;

interface DorkerInterface{
    public function setDork(string $dork);
    public function getInfo();
    public function parseData();
    public function search();
    public function parseOutput();
    public function write(String $name, String $source);
}
?>