<?php

return [
    'appid' => 'appid',
    'secret' => 'secret',
    'mch_id' => 'mch_id',
    'serial_no' => 'serial_no',
    'aes_key' => 'aes_key',
    'diy_key' => 'diy_key',
    'sslCertAddr' => app()->getRootPath() . 'cert/apiclient_cert.pem',
    'privateKeyAddr' => app()->getRootPath() . 'cert/apiclient_key.pem'
];