<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ReturnStatus extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $status = null,
	) {
	}
}
