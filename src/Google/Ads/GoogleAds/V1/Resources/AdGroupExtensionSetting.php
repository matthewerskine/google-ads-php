<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/ad_group_extension_setting.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ad group extension setting.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.AdGroupExtensionSetting</code>
 */
class AdGroupExtensionSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ad group extension setting.
     * AdGroupExtensionSetting resource names have the form:
     * `customers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    private $resource_name = '';
    /**
     * The extension type of the ad group extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionTypeEnum.ExtensionType extension_type = 2;</code>
     */
    private $extension_type = 0;
    /**
     * The resource name of the ad group. The linked extension feed items will
     * serve under this ad group.
     * AdGroup resource names have the form:
     * `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     */
    private $ad_group = null;
    /**
     * The resource names of the extension feed items to serve under the ad group.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue extension_feed_items = 4;</code>
     */
    private $extension_feed_items;
    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 5;</code>
     */
    private $device = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the ad group extension setting.
     *           AdGroupExtensionSetting resource names have the form:
     *           `customers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}`
     *     @type int $extension_type
     *           The extension type of the ad group extension setting.
     *     @type \Google\Protobuf\StringValue $ad_group
     *           The resource name of the ad group. The linked extension feed items will
     *           serve under this ad group.
     *           AdGroup resource names have the form:
     *           `customers/{customer_id}/adGroups/{ad_group_id}`
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $extension_feed_items
     *           The resource names of the extension feed items to serve under the ad group.
     *           ExtensionFeedItem resource names have the form:
     *           `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *     @type int $device
     *           The device for which the extensions will serve. Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\AdGroupExtensionSetting::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ad group extension setting.
     * AdGroupExtensionSetting resource names have the form:
     * `customers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the ad group extension setting.
     * AdGroupExtensionSetting resource names have the form:
     * `customers/{customer_id}/adGroupExtensionSettings/{ad_group_id}~{extension_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The extension type of the ad group extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionTypeEnum.ExtensionType extension_type = 2;</code>
     * @return int
     */
    public function getExtensionType()
    {
        return $this->extension_type;
    }

    /**
     * The extension type of the ad group extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionTypeEnum.ExtensionType extension_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setExtensionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\ExtensionTypeEnum_ExtensionType::class);
        $this->extension_type = $var;

        return $this;
    }

    /**
     * The resource name of the ad group. The linked extension feed items will
     * serve under this ad group.
     * AdGroup resource names have the form:
     * `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * Returns the unboxed value from <code>getAdGroup()</code>

     * The resource name of the ad group. The linked extension feed items will
     * serve under this ad group.
     * AdGroup resource names have the form:
     * `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     * @return string|null
     */
    public function getAdGroupValue()
    {
        $wrapper = $this->getAdGroup();
        return is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * The resource name of the ad group. The linked extension feed items will
     * serve under this ad group.
     * AdGroup resource names have the form:
     * `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The resource name of the ad group. The linked extension feed items will
     * serve under this ad group.
     * AdGroup resource names have the form:
     * `customers/{customer_id}/adGroups/{ad_group_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupValue($var)
    {
        $wrappedVar = is_null($var) ? null : new \Google\Protobuf\StringValue(['value' => $var]);
        return $this->setAdGroup($wrappedVar);
    }

    /**
     * The resource names of the extension feed items to serve under the ad group.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue extension_feed_items = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtensionFeedItems()
    {
        return $this->extension_feed_items;
    }

    /**
     * The resource names of the extension feed items to serve under the ad group.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue extension_feed_items = 4;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtensionFeedItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->extension_feed_items = $arr;

        return $this;
    }

    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 5;</code>
     * @return int
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\ExtensionSettingDeviceEnum_ExtensionSettingDevice::class);
        $this->device = $var;

        return $this;
    }

}

