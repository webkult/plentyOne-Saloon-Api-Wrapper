<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ListingMarketText extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $listingMarketId = null,
		public ?string $lang = null,
		public ?string $title = null,
		public ?string $subtitle = null,
		public ?string $description = null,
	) {
	}
}
