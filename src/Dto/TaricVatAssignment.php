<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class TaricVatAssignment extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $taricCode = null,
		public ?int $countryId = null,
		public ?string $vatField = null,
	) {
	}
}
