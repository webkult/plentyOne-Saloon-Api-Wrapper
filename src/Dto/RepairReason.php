<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class RepairReason extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $reason = null,
	) {
	}
}
