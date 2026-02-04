<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CouponCodeContact extends SpatieData
{
	public function __construct(
		public ?string $code = null,
		public ?int $contactId = null,
		public int|float|null $openAmount = null,
		public ?int $redeemCount = null,
		public ?string $updatedAt = null,
		public ?int $campaignId = null,
		public ?int $externalTransactionId = null,
	) {
	}
}
