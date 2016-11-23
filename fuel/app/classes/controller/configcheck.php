<?php

/**
 * config.phpの設定確認 
 */

class Controller_Configcheck extends Controller
{
    public function action_index()
    {
        echo '<pre>';
        echo 'FuelPHP version: ' . Fuel::VERSION . "\n";
        echo '         locale: ' . setlocale(LC_ALL, '0') . "\n";
        echo '           date: ' . Date::forge()->format('mysql') . "\n";
        echo 'default_charset: ' . ini_get('default_charset') . "\n";
        echo '</pre>';
    }
}
