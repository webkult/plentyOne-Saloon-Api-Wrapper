<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ReturnReason extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $reason = null,
	) {
	}
}
