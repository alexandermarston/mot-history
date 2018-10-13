<?php

class mot_history {
    protected $api_key;

    public function __construct ($api_key) {
        if (isset($api_key)) {
            $this->api_key = $api_key;
        } else {
            echo "Please specify an API key" . PHP_EOL;
            die();
        }
    }

    public function getMotHistory($vehicle_registration) {
        $curl = curl_init();

        curl_setopt_array(
            $curl, array(
            CURLOPT_URL => "https://beta.check-mot.service.gov.uk/trade/vehicles/mot-tests?registration=$vehicle_registration",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json+v2",
                "x-api-key: $this->api_key"
                ),
            )
        );

        $response = json_decode(curl_exec($curl), true);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err . PHP_EOL;
            return false;
        } else {
            return $response[0]['motTests'];
        }
    }
}

?>
