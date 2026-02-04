<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OptionTemplate extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?array $listing = null,
		public ?array $listingMarket = null,
		public ?array $marketOptions = null,
	) {
	}
}
