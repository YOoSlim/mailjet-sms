<?php

return [
    'bearer_api_token' => env('MAILJET_BEARER_API_TOKEN', null),

    'version' => 'v4',

    'sender_id' => env('MAILJET_SENDER_ID', null),

    'urls' => [
        'send' => 'https://api.mailjet.com/v4/sms-send',
        'stats' => 'https://api.mailjet.com/v4/sms',
        'count' => 'https://api.mailjet.com/v4/sms/count',
        'export' => 'https://api.mailjet.com/v4/sms/export',
        'download' => 'https://api.mailjet.com/v4/sms/export/', // WITH ID IN THE END
    ],

    /*'status' => [
        'send' => [
            'sms-0001' => 'Insufficient funds',
            'sms-0002' => 'Insufficient funds',
            'sms-0003' => 'Insufficient funds',
            'sms-0004' => 'Insufficient funds',
            'mj-0002' => 'The API user has sent a JSON with an invalid syntax',
            'mj-0003' => 'A mandatory property is missing or with null value. The functional specification defines mandatory properties',
            'mj-0004' => 'The value type for the respective property is incorrect',
            'mj-0006' => 'The string contains more than the maximum allowed characters',
            'mj-0011' => 'The payload size is over the limit',
            'mj-0015' => 'The user did not provide valid authorization credentials',
            'mj-0020' => 'The string contains less than the minimum allowed characters',
            'mj-0021' => 'The AKID does not have access to the resource',
        ],
        'exports' => [
            1 => 'PENDING',
            2 => 'IN_PROGRESS',
            3 => 'COMPLETED',
            4 => 'ERROR',
        ]
    ]
    */
];