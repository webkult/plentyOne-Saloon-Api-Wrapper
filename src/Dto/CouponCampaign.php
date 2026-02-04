<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CouponCampaign extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $externalId = null,
		public ?string $name = null,
		public ?int $variable = null,
		public ?bool $isPermittedForExternalReferrers = null,
		public ?bool $includeShipping = null,
		public ?int $unusedCodesCount = null,
		public ?int $usedCodesCount = null,
		public ?string $endsAt = null,
		public ?string $startsAt = null,
		public int|float|null $minOrderValue = null,
		public ?int $codeDurationWeeks = null,
		public ?string $codeAssignment = null,
		public ?string $codeLength = null,
		public ?string $usage = null,
		public ?string $concept = null,
		public ?string $redeemType = null,
		public ?string $discountType = null,
		public ?int $itemDiscountToPay = null,
		public ?int $itemDiscountToBuy = null,
		public ?string $campaignType = null,
		public ?string $couponType = null,
		public ?string $description = null,
		public int|float|null $value = null,
	) {
	}
}
