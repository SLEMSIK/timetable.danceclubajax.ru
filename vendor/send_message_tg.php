<?php

define('TELEGRAM_TOKEN', '6601602614:AAG7pvVEO-ePwZniidGxZnu17TNZ6S3YlCU');

// сюда нужно вписать ваш внутренний айдишник
define('TELEGRAM_CHATID', '-1002133729316');

message_to_telegram("Привет!\n\nкак дела?");

function message_to_telegram($text)
{
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => TELEGRAM_CHATID,
                'text' => $text,
            ),
        )
    );
    curl_exec($ch);
}


