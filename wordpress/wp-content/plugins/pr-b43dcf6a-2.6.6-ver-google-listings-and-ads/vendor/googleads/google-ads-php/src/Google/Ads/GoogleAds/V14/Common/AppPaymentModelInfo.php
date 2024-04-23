<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/criteria.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An app payment model criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.AppPaymentModelInfo</code>
 */
class AppPaymentModelInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of the app payment model.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AppPaymentModelTypeEnum.AppPaymentModelType type = 1;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Type of the app payment model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of the app payment model.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AppPaymentModelTypeEnum.AppPaymentModelType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the app payment model.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.AppPaymentModelTypeEnum.AppPaymentModelType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\AppPaymentModelTypeEnum\AppPaymentModelType::class);
        $this->type = $var;

        return $this;
    }

}

