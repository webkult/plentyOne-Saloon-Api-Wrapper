<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class DebtorAccountConfiguration extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $locationId = null,
		public ?string $mode = null,
		public ?string $sequence = null,
		public ?string $standard = null,
		public ?bool $save = null,
	) {
	}
}
