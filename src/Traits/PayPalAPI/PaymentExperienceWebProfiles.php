<?php

namespace Srmklive\PayPal\Traits\PayPalAPI;

use Psr\Http\Message\StreamInterface;
use Throwable;

trait PaymentExperienceWebProfiles
{
    /**
     * List Web Experience Profiles.
     *
     * @throws Throwable
     *
     * @return array|StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/payment-experience/v1/#web-profiles_get-list
     */
    public function listWebExperienceProfiles(): StreamInterface|array|string
    {
        $this->apiEndPoint = 'v1/payment-experience/web-profiles';

        $this->verb = 'get';

        return $this->doPayPalRequest();
    }

    /**
     * Create a Web Experience Profile.
     *
     * @param array $data
     *
     * @throws Throwable
     *
     * @return array|StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/payment-experience/v1/#web-profile_create
     */
    public function createWebExperienceProfile(array $data): StreamInterface|array|string
    {
        $this->apiEndPoint = 'v1/payment-experience/web-profiles';

        $this->options['json'] = $data;

        $this->verb = 'post';

        return $this->doPayPalRequest();
    }

    /**
     * Delete a Web Experience Profile.
     *
     * @param string $profile_id
     *
     * @throws Throwable
     *
     * @return array|StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/payment-experience/v1/#web-profile_delete
     */
    public function deleteWebExperienceProfile(string $profile_id): StreamInterface|array|string
    {
        $this->apiEndPoint = "v1/payment-experience/web-profiles/{$profile_id}";

        $this->verb = 'delete';

        return $this->doPayPalRequest();
    }

    /**
     * Partially update a Web Experience Profile.
     *
     * @param string $profile_id
     * @param array  $data
     *
     * @throws Throwable
     *
     * @return array|StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/payment-experience/v1/#web-profile_partial-update
     */
    public function patchWebExperienceProfile(string $profile_id, array $data): StreamInterface|array|string
    {
        $this->apiEndPoint = "v1/payment-experience/web-profiles/{$profile_id}";

        $this->options['json'] = $data;

        $this->verb = 'patch';

        return $this->doPayPalRequest();
    }

    /**
     * Partially update a Web Experience Profile.
     *
     * @param string $profile_id
     * @param array  $data
     *
     * @throws Throwable
     *
     * @return array|StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/payment-experience/v1/#web-profile_update
     */
    public function updateWebExperienceProfile(string $profile_id, array $data): StreamInterface|array|string
    {
        $this->apiEndPoint = "v1/payment-experience/web-profiles/{$profile_id}";

        $this->options['json'] = $data;

        $this->verb = 'put';

        return $this->doPayPalRequest();
    }

    /**
     * Delete a Web Experience Profile.
     *
     * @param string $profile_id
     *
     * @throws Throwable
     *
     * @return array|StreamInterface|string
     *
     * @see https://developer.paypal.com/docs/api/payment-experience/v1/#web-profile_get
     */
    public function showWebExperienceProfileDetails(string $profile_id): StreamInterface|array|string
    {
        $this->apiEndPoint = "v1/payment-experience/web-profiles/{$profile_id}";

        $this->verb = 'get';

        return $this->doPayPalRequest();
    }
}
