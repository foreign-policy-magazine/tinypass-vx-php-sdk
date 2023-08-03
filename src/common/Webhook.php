<?php

class Webhook {

    /**
     * @param $data
     * @param $privateKey
     * @return TPEvent
     */
    public static function parse($data, $privateKey) {
        $decryptedData = json_decode(TPSecurityUtils::decrypt($privateKey, $data));
        $eventClass = TPWebhookEvents::WEBHOOK_EVENTS[$decryptedData->type] ?? TPUnknownEvent::class;

        return TinypassClient::objectToInstance($decryptedData, $eventClass);
    }

}
