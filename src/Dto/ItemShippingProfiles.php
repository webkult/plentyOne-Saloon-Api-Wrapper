<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ItemShippingProfiles extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $itemId = null,
		public ?int $profileId = null,
	) {
	}
}
