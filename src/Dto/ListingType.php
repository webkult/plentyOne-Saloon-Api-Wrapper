<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ListingType extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $isErasable = null,
		public ?int $position = null,
	) {
	}
}
