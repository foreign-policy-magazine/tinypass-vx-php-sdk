<?php

class TPWebhookEvents {

    const WEBHOOK_EVENTS = [
        TPEvent::UNKNOWN => TPUnknownEvent::class, 
        TPEvent::TEST => TPTestEvent::class, 
        TPEvent::USER_PAYMENT_METHOD => TPUserPaymentMethodEvent::class, 
        TPEvent::UNSUPPORTED => TPUnsupportedEvent::class, 
        TPEvent::PAYMENT_REFUND => TPPaymentRefundEvent::class, 
        TPEvent::ADDRESS_UPDATED => TPAddressUpdatedEvent::class, 
        TPEvent::TERM_CHANGE => TPTermChangeEvent::class, 
        TPEvent::CONTENT_ALGORITHM => TPKeyingEvent::class, 
        TPEvent::TERM_CHANGED => TPTermChangedEvent::class, 
        TPEvent::SUBSCRIPTION_AUTO_RENEW_CHANGED => TPSubscriptionAutoRenewChangedByEndUserEvent::class, 
        TPEvent::USER_ADDRESS_UPDATED => TPUserAddressUpdatedEvent::class, 
        TPEvent::VOUCHER_REDEEMED => TPVoucherRedeemedEvent::class, 
        TPEvent::VOUCHER_DELIVERED => TPVoucherDeliveredEvent::class, 
        TPEvent::VOUCHER_REVOKED => TPVoucherRevokedEvent::class, 
        TPEvent::VOUCHER_PURCHASED => TPVoucherPurchasedEvent::class, 
        TPEvent::USER_UPDATED => TPUserUpdatedEvent::class, 
        TPEvent::USER_EMAIL_CONFIRMED => TPUserEmailConfirmedEvent::class, 
        TPEvent::USER_CREATED => TPUserCreatedEvent::class, 
        TPEvent::USER_DISABLED => TPUserDisabledEvent::class, 
        TPEvent::CONTRACT_UPDATED => TPContractUpdatedEvent::class, 
        TPEvent::CONTRACT_CREATED => TPContractCreatedEvent::class, 
        TPEvent::CONTRACT_USER_CREATED => TPContractUserCreatedEvent::class, 
        TPEvent::LICENSEE_INVITE_TO_CONTRACT => TPContractUserInvitedEvent::class, 
        TPEvent::CONTRACT_DELETED => TPContractDeletedEvent::class, 
        TPEvent::SUBSCRIPTION_RENEWAL => TPSubscriptionRenewalEvent::class, 
        TPEvent::ACCESS_GRANTED => TPAccessGrantedEvent::class, 
        TPEvent::ACCESS_REVOKED => TPAccessRevokedEvent::class, 
        TPEvent::ACCESS_MODIFIED => TPAccessModifiedEvent::class, 
        TPEvent::LICENSEE_CREATED => TPLicenseeCreatedEvent::class, 
        TPEvent::LICENSEE_UPDATED => TPLicenseeUpdatedEvent::class, 
        TPEvent::TERM_CHANGE_FINISHED => TPTermChangeFinishedEvent::class, 
        TPEvent::CONTRACT_USER_ACCESS_EXPIRED => TPContractUserAccessExpiredEvent::class, 
        TPEvent::CONTRACT_USER_ACCESS_REVOKED => TPContractUserAccessRevokedEvent::class, 
        TPEvent::CONTRACT_REDEEMED => TPContractRedeemedEvent::class, 
        TPEvent::CONTRACT_RENEWED => TPContractRenewedEvent::class, 
        TPEvent::SHARED_SUBSCRIPTION_CHILD => TPSharedSubscriptionChildAccessGrantedEvent::class
    ];
}
