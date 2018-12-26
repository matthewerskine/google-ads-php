<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/services/google_ads_service.proto

namespace Google\Ads\GoogleAds\V0\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [GoogleAdsService.Mutate][google.ads.googleads.v0.services.GoogleAdsService.Mutate].
 *
 * Generated from protobuf message <code>google.ads.googleads.v0.services.MutateGoogleAdsRequest</code>
 */
class MutateGoogleAdsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the customer whose resources are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    private $customer_id = '';
    /**
     * The list of operations to perform on individual resources.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.MutateOperation mutate_operations = 2;</code>
     */
    private $mutate_operations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           The ID of the customer whose resources are being modified.
     *     @type \Google\Ads\GoogleAds\V0\Services\MutateOperation[]|\Google\Protobuf\Internal\RepeatedField $mutate_operations
     *           The list of operations to perform on individual resources.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V0\Services\GoogleAdsService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the customer whose resources are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The ID of the customer whose resources are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The list of operations to perform on individual resources.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.MutateOperation mutate_operations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutateOperations()
    {
        return $this->mutate_operations;
    }

    /**
     * The list of operations to perform on individual resources.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v0.services.MutateOperation mutate_operations = 2;</code>
     * @param \Google\Ads\GoogleAds\V0\Services\MutateOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMutateOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V0\Services\MutateOperation::class);
        $this->mutate_operations = $arr;

        return $this;
    }

}
