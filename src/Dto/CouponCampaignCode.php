<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CouponCampaignCode extends SpatieData
{
	public function __construct(
		public ?string $code = null,
		public ?int $campaignId = null,
		public ?int $disable = null,
		public ?int $consumed = null,
		public ?int $usedCount = null,
		public int|float|null $usedAmount = null,
		public int|float|null $value = null,
	) {
	}
}
