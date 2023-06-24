<?php

$url = 'https://api.nylas.com/calendars/availability/consecutive';
$headers = [
    'Accept: application/json',
    'Authorization: Bearer <9mhb9vozlh96ny4icarr0rto9>',
    'Content-Type: application/json',
];

$data = [
    'duration_minutes' => 30,
    'start_time' => 1605794400,
    'end_time' => 1605826800,
    'interval_minutes' => 10,
    'emails' => [['swag@nylas.com']],
    'free_busy' => [
        [
            'email' => 'swag@nylas.com',
            'object' => 'free_busy',
            'time_slots' => [
                [
                    'start_time' => 1605819600,
                    'end_time' => 1605821400,
                    'object' => 'time_slot',
                    'status' => 'busy',
                ],
            ],
        ],
    ],
    'open_hours' => [
        [
            'emails' => ['swag@nylas.com'],
            'days' => [0, 1],
            'timezone' => 'America/Chicago',
            'start' => '10:00',
            'end' => '14:00',
            'object_type' => 'open_hours',
        ],
    ],
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if ($response === false) {
    $error = curl_error($ch);
    curl_close($ch);
    die('Error: ' . $error);
}

curl_close($ch);

$result = json_decode($response, true);
print_r($result);


   