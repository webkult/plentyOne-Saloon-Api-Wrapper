<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class CategoryClient extends SpatieData
{
	public function __construct(
		public ?int $plentyId = null,
	) {
	}
}
