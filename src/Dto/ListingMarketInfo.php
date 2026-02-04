<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ListingMarketInfo extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $listingMarketId = null,
		public ?string $type = null,
		public ?int $code = null,
		public ?string $message = null,
		public ?string $createdAt = null,
	) {
	}
}
