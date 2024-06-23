<?php

namespace Srmklive\PayPal\Traits\PayPalAPI;

use Psr\Http\Message\StreamInterface;
use Throwable;

trait ReferencedPayouts
{
    /**
     * Create a referenced Batch Payout.
     *
     * @param array $data
     *
     * @throws Throwable
     *
     * @return array|StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/referenced-payouts/v1/#referenced-payouts_create_batch
     */
    public function createReferencedBatchPayout(array $data): StreamInterface|array|string
    {
        $this->apiEndPoint = 'v1/payments/referenced-payouts';

        $this->options['json'] = $data;

        $this->verb = 'post';

        return $this->doPayPalRequest();
    }

    /**
     * Show Batch Payout details by ID.
     *
     * @param string $batch_payout_id
     *
     * @throws Throwable
     *
     * @return array|StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/referenced-payouts/v1/#referenced-payouts_get_batch_details
     */
    public function listItemsReferencedInBatchPayout(string $batch_payout_id): StreamInterface|array|string
    {
        $this->apiEndPoint = "v1/payments/referenced-payouts/{$batch_payout_id}";

        $this->verb = 'get';

        return $this->doPayPalRequest();
    }

    /**
     * Create a referenced Batch Payout Item.
     *
     * @param array $data
     *
     * @throws Throwable
     *
     * @return array|StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/referenced-payouts/v1/#referenced-payouts-items_create
     */
    public function createReferencedBatchPayoutItem(array $data): StreamInterface|array|string
    {
        $this->apiEndPoint = 'v1/payments/referenced-payouts-items';

        $this->options['json'] = $data;

        $this->verb = 'post';

        return $this->doPayPalRequest();
    }

    /**
     * Show Payout Item details by ID.
     *
     * @param string $payout_item_id
     *
     * @throws Throwable
     *
     * @return array|StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/referenced-payouts/v1/#referenced-payouts-items_get
     */
    public function showReferencedPayoutItemDetails(string $payout_item_id): StreamInterface|array|string
    {
        $this->apiEndPoint = "v1/payments/referenced-payouts-items/{$payout_item_id}";

        $this->verb = 'get';

        return $this->doPayPalRequest();
    }
}
