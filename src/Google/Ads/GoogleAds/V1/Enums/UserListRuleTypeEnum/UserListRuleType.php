<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/user_list_rule_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\UserListRuleTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible user list rule types.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.UserListRuleTypeEnum.UserListRuleType</code>
 */
class UserListRuleType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Conjunctive normal form.
     *
     * Generated from protobuf enum <code>AND_OF_ORS = 2;</code>
     */
    const AND_OF_ORS = 2;
    /**
     * Disjunctive normal form.
     *
     * Generated from protobuf enum <code>OR_OF_ANDS = 3;</code>
     */
    const OR_OF_ANDS = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::AND_OF_ORS => 'AND_OF_ORS',
        self::OR_OF_ANDS => 'OR_OF_ANDS',
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
class_alias(UserListRuleType::class, \Google\Ads\GoogleAds\V1\Enums\UserListRuleTypeEnum_UserListRuleType::class);

