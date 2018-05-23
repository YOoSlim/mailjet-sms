<?php

namespace YOo\MailJetForSMS\Helpers;

class Response {

    private $data = null;

    public function __construct($json_response) {
        $this->parseResponse($json_response);
    }

    private function parseResponse($json) {
        $this->data = json_decode($json, true);
    }

    /**
     * BASIC GETTERS
     */

    public function messageID() {
        return array_key_exists('MessageId', $this->data) ? $this->data['MessageId'] : null;
    }

    public function smsCount() {
        return array_key_exists('SmsCount', $this->data) ? $this->data['SmsCount'] : null;
    }

    public function from() {
        return array_key_exists('From', $this->data) ? $this->data['From'] : null;
    }

    public function to() {
        return array_key_exists('To', $this->data) ? $this->data['To'] : null;
    }

    public function text() {
        return array_key_exists('Text', $this->data) ? $this->data['Text'] : null;
    }

    public function creationTimeStamp() {
        return array_key_exists('CreationTS', $this->data) ? $this->data['CreationTS'] : null;
    }

    public function sentTimeStamp() {
        return array_key_exists('SentTS', $this->data) ? $this->data['SentTS'] : null;
    }

    public function costValue() {
        return array_key_exists('Cost', $this->data) ? $this->data['Cost']['Value'] : null;
    }

    public function costCurrency() {
        return array_key_exists('Cost', $this->data) ? $this->data['Cost']['Currency'] : null;
    }

    public function statusCode() {
        return array_key_exists('Status', $this->data) ? $this->data['Status']['Code'] : null;
    }

    public function statusName() {
        return array_key_exists('Status', $this->data) ? $this->data['Status']['Name'] : null;
    }

    public function statusDesc() {
        return array_key_exists('Status', $this->data) ? $this->data['Status']['Description'] : null;
    }

}