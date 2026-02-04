<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CouponCodeValidation extends SpatieData
{
	public function __construct(
		public ?int $campaignId = null,
		public ?string $validationType = null,
		public ?int $contactId = null,
		public ?string $couponCode = null,
		public ?string $currency = null,
		public int|float|null $exchangeRate = null,
		public int|float|null $referrer = null,
		public int|float|null $salesDiscount = null,
		public int|float|null $salesDiscountNet = null,
		public int|float|null $itemDiscount = null,
		public int|float|null $itemDiscountNet = null,
		public int|float|null $shippingDiscount = null,
		public int|float|null $shippingDiscountNet = null,
		public ?array $usedVatFields = null,
		public int|float|null $restCouponAmount = null,
		public ?array $checkedItems = null,
		public ?array $validateParams = null,
		public ?string $couponCampaignType = null,
	) {
	}
}
