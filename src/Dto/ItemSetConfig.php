<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ItemSetConfig extends SpatieData
{
	public function __construct(
		public ?int $setId = null,
		public int|float|null $rebate = null,
	) {
	}
}
