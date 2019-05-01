<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/ad_group_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\AdGroupTypeEnum;

use UnexpectedValueException;

/**
 * Enum listing the possible types of an ad group.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.AdGroupTypeEnum.AdGroupType</code>
 */
class AdGroupType
{
    /**
     * The type has not been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The default ad group type for Search campaigns.
     *
     * Generated from protobuf enum <code>SEARCH_STANDARD = 2;</code>
     */
    const SEARCH_STANDARD = 2;
    /**
     * The default ad group type for Display campaigns.
     *
     * Generated from protobuf enum <code>DISPLAY_STANDARD = 3;</code>
     */
    const DISPLAY_STANDARD = 3;
    /**
     * The ad group type for Shopping campaigns serving standard product ads.
     *
     * Generated from protobuf enum <code>SHOPPING_PRODUCT_ADS = 4;</code>
     */
    const SHOPPING_PRODUCT_ADS = 4;
    /**
     * The default ad group type for Hotel campaigns.
     *
     * Generated from protobuf enum <code>HOTEL_ADS = 6;</code>
     */
    const HOTEL_ADS = 6;
    /**
     * The type for ad groups in Smart Shopping campaigns.
     *
     * Generated from protobuf enum <code>SHOPPING_SMART_ADS = 7;</code>
     */
    const SHOPPING_SMART_ADS = 7;
    /**
     * Short unskippable in-stream video ads.
     *
     * Generated from protobuf enum <code>VIDEO_BUMPER = 8;</code>
     */
    const VIDEO_BUMPER = 8;
    /**
     * TrueView (skippable) in-stream video ads.
     *
     * Generated from protobuf enum <code>VIDEO_TRUE_VIEW_IN_STREAM = 9;</code>
     */
    const VIDEO_TRUE_VIEW_IN_STREAM = 9;
    /**
     * TrueView in-display video ads.
     *
     * Generated from protobuf enum <code>VIDEO_TRUE_VIEW_IN_DISPLAY = 10;</code>
     */
    const VIDEO_TRUE_VIEW_IN_DISPLAY = 10;
    /**
     * Unskippable in-stream video ads.
     *
     * Generated from protobuf enum <code>VIDEO_NON_SKIPPABLE_IN_STREAM = 11;</code>
     */
    const VIDEO_NON_SKIPPABLE_IN_STREAM = 11;
    /**
     * Outstream video ads.
     *
     * Generated from protobuf enum <code>VIDEO_OUTSTREAM = 12;</code>
     */
    const VIDEO_OUTSTREAM = 12;
    /**
     * Ad group type for Dynamic Search Ads ad groups.
     *
     * Generated from protobuf enum <code>SEARCH_DYNAMIC_ADS = 13;</code>
     */
    const SEARCH_DYNAMIC_ADS = 13;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::SEARCH_STANDARD => 'SEARCH_STANDARD',
        self::DISPLAY_STANDARD => 'DISPLAY_STANDARD',
        self::SHOPPING_PRODUCT_ADS => 'SHOPPING_PRODUCT_ADS',
        self::HOTEL_ADS => 'HOTEL_ADS',
        self::SHOPPING_SMART_ADS => 'SHOPPING_SMART_ADS',
        self::VIDEO_BUMPER => 'VIDEO_BUMPER',
        self::VIDEO_TRUE_VIEW_IN_STREAM => 'VIDEO_TRUE_VIEW_IN_STREAM',
        self::VIDEO_TRUE_VIEW_IN_DISPLAY => 'VIDEO_TRUE_VIEW_IN_DISPLAY',
        self::VIDEO_NON_SKIPPABLE_IN_STREAM => 'VIDEO_NON_SKIPPABLE_IN_STREAM',
        self::VIDEO_OUTSTREAM => 'VIDEO_OUTSTREAM',
        self::SEARCH_DYNAMIC_ADS => 'SEARCH_DYNAMIC_ADS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdGroupType::class, \Google\Ads\GoogleAds\V1\Enums\AdGroupTypeEnum_AdGroupType::class);

