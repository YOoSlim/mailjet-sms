<?php

namespace YOo\MailJetForSMS\Helpers;

class MailJetForSMSRequest {

    public function ping() {
        $url = config('mailjetsms.urls.stats');
        $data = $this->curl($url);
        $data = json_decode($data, true);
        return array_key_exists('Data', $data);
    }

    public function send($to, $message, $from = null) {
        $url = config('mailjetsms.urls.send');

        $data = $this->curl($url, [
            'From' => $from == null ? config('mailjetsms.sender_id') : $from,
            'To' => $to,
            'Text' => $message
        ]);

        return new Response($data);
    }

    private function curl($url, $data) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_POSTFIELDS => json_encode($data, true),
            CURLOPT_CUSTOMREQUEST => "POST",
            "Content-Type: application/json",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . config('mailjetsms.bearer_api_token'),
                "Cache-Control: no-cache",
                "Content-Type: application/json",
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo 'error';
            //throw new \App\Exceptions\Exception($err);
            return $err;
        } else {
            return $response;
        }
    }

}