<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PostingKeyConfiguration extends SpatieData
{
	public function __construct(
		public ?int $locationId = null,
	) {
	}
}
