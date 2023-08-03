<?php

/**
 * It is base class for all events
 */
class TPEvent {

    /**
     * @var array @unused
     */
    public static $dataTypes = array();

    const UNKNOWN = "unknown";
    const TEST = "test";
    const USER_PAYMENT_METHOD = "user_payment_method";
    const UNSUPPORTED = "unsupported";
    const PAYMENT_REFUND = "payment_refund";
    const ADDRESS_UPDATED = "address_updated";
    const TERM_CHANGE = "term_change";
    const CONTENT_ALGORITHM = "content_algorithm";
    const TERM_CHANGED = "term_changed";
    const SUBSCRIPTION_AUTO_RENEW_CHANGED = "subscription_auto_renew_changed";
    const USER_ADDRESS_UPDATED = "user_address_updated";
    const VOUCHER_REDEEMED = "voucher_redeemed";
    const VOUCHER_DELIVERED = "voucher_delivered";
    const VOUCHER_REVOKED = "voucher_revoked";
    const VOUCHER_PURCHASED = "voucher_purchased";
    const USER_UPDATED = "user_updated";
    const USER_EMAIL_CONFIRMED = "user_email_confirmed";
    const USER_CREATED = "user_created";
    const USER_DISABLED = "user_disabled";
    const CONTRACT_UPDATED = "contract_updated";
    const CONTRACT_CREATED = "contract_created";
    const CONTRACT_USER_CREATED = "contract_user_created";
    const LICENSEE_INVITE_TO_CONTRACT = "licensee_invite_to_contract";
    const CONTRACT_DELETED = "contract_deleted";
    const SUBSCRIPTION_RENEWAL = "subscription_renewal";
    const ACCESS_GRANTED = "access_granted";
    const ACCESS_REVOKED = "access_revoked";
    const ACCESS_MODIFIED = "access_modified";
    const LICENSEE_CREATED = "licensee_created";
    const LICENSEE_UPDATED = "licensee_updated";
    const TERM_CHANGE_FINISHED = "term_change_finished";
    const CONTRACT_USER_ACCESS_EXPIRED = "contract_user_access_expired";
    const CONTRACT_USER_ACCESS_REVOKED = "contract_user_access_revoked";
    const CONTRACT_REDEEMED = "contract_redeemed";
    const CONTRACT_RENEWED = "contract_renewed";
    const SHARED_SUBSCRIPTION_CHILD = "shared_subscription_child";

    public $version, $type, $event;

    /**
     * Version 1 or 2, version 1 is deprecated
     * @return int
     */
    public function getVersion() {
        return (null === $this->version) ? 1 : $this->version;
    }

    /**
    * @return string
    */
    public function getType() {
        return $this->type;
    }

    public function getEvent() {
        return $this->event;
    }

    public static function getClassName() {
        return get_called_class();
    }
}
