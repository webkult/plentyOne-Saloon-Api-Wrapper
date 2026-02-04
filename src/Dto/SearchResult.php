<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SearchResult extends SpatieData
{
	public function __construct(
		public ?string $value = null,
		public ?string $label = null,
		public ?string $source = null,
	) {
	}
}
