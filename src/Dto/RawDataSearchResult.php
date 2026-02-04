<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class RawDataSearchResult extends SpatieData
{
	public function __construct(
		public ?string $after = null,
	) {
	}
}
