<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ListingMarketItemSpecific extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $listingMarketId = null,
		public ?string $name = null,
		public ?string $value = null,
	) {
	}
}
