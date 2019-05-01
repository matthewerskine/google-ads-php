<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/customer_manager_link_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\CustomerManagerLinkErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible CustomerManagerLink errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.CustomerManagerLinkErrorEnum.CustomerManagerLinkError</code>
 */
class CustomerManagerLinkError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * No pending invitation.
     *
     * Generated from protobuf enum <code>NO_PENDING_INVITE = 2;</code>
     */
    const NO_PENDING_INVITE = 2;
    /**
     * Attempt to operate on the same client more than once in the same call.
     *
     * Generated from protobuf enum <code>SAME_CLIENT_MORE_THAN_ONCE_PER_CALL = 3;</code>
     */
    const SAME_CLIENT_MORE_THAN_ONCE_PER_CALL = 3;
    /**
     * Manager account has the maximum number of linked accounts.
     *
     * Generated from protobuf enum <code>MANAGER_HAS_MAX_NUMBER_OF_LINKED_ACCOUNTS = 4;</code>
     */
    const MANAGER_HAS_MAX_NUMBER_OF_LINKED_ACCOUNTS = 4;
    /**
     * If no active user on account it cannot be unlinked from its manager.
     *
     * Generated from protobuf enum <code>CANNOT_UNLINK_ACCOUNT_WITHOUT_ACTIVE_USER = 5;</code>
     */
    const CANNOT_UNLINK_ACCOUNT_WITHOUT_ACTIVE_USER = 5;
    /**
     * Account should have at least one active owner on it before being
     * unlinked.
     *
     * Generated from protobuf enum <code>CANNOT_REMOVE_LAST_CLIENT_ACCOUNT_OWNER = 6;</code>
     */
    const CANNOT_REMOVE_LAST_CLIENT_ACCOUNT_OWNER = 6;
    /**
     * Only account owners may change their permission role.
     *
     * Generated from protobuf enum <code>CANNOT_CHANGE_ROLE_BY_NON_ACCOUNT_OWNER = 7;</code>
     */
    const CANNOT_CHANGE_ROLE_BY_NON_ACCOUNT_OWNER = 7;
    /**
     * When a client's link to its manager is not active, the link role cannot
     * be changed.
     *
     * Generated from protobuf enum <code>CANNOT_CHANGE_ROLE_FOR_NON_ACTIVE_LINK_ACCOUNT = 8;</code>
     */
    const CANNOT_CHANGE_ROLE_FOR_NON_ACTIVE_LINK_ACCOUNT = 8;
    /**
     * Attempt to link a child to a parent that contains or will contain
     * duplicate children.
     *
     * Generated from protobuf enum <code>DUPLICATE_CHILD_FOUND = 9;</code>
     */
    const DUPLICATE_CHILD_FOUND = 9;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NO_PENDING_INVITE => 'NO_PENDING_INVITE',
        self::SAME_CLIENT_MORE_THAN_ONCE_PER_CALL => 'SAME_CLIENT_MORE_THAN_ONCE_PER_CALL',
        self::MANAGER_HAS_MAX_NUMBER_OF_LINKED_ACCOUNTS => 'MANAGER_HAS_MAX_NUMBER_OF_LINKED_ACCOUNTS',
        self::CANNOT_UNLINK_ACCOUNT_WITHOUT_ACTIVE_USER => 'CANNOT_UNLINK_ACCOUNT_WITHOUT_ACTIVE_USER',
        self::CANNOT_REMOVE_LAST_CLIENT_ACCOUNT_OWNER => 'CANNOT_REMOVE_LAST_CLIENT_ACCOUNT_OWNER',
        self::CANNOT_CHANGE_ROLE_BY_NON_ACCOUNT_OWNER => 'CANNOT_CHANGE_ROLE_BY_NON_ACCOUNT_OWNER',
        self::CANNOT_CHANGE_ROLE_FOR_NON_ACTIVE_LINK_ACCOUNT => 'CANNOT_CHANGE_ROLE_FOR_NON_ACTIVE_LINK_ACCOUNT',
        self::DUPLICATE_CHILD_FOUND => 'DUPLICATE_CHILD_FOUND',
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
class_alias(CustomerManagerLinkError::class, \Google\Ads\GoogleAds\V1\Errors\CustomerManagerLinkErrorEnum_CustomerManagerLinkError::class);

