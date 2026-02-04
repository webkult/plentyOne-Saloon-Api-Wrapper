<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VatRate extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public int|float|null $vatRate = null,
		public ?string $name = null,
		public ?string $revenueAccount = null,
	) {
	}
}
