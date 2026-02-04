<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Marketplace extends SpatieData
{
	public function __construct(
		public ?int $siteId = null,
		public ?string $marketplaceId = null,
		public ?int $marketId = null,
		public int|float|null $referrerId = null,
		public ?string $shortcut = null,
		public ?string $currency = null,
	) {
	}
}
