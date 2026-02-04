<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ManufacturerCommission extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $manufacturerId = null,
		public ?int $plentyId = null,
		public int|float|null $referrerId = null,
		public int|float|null $commission = null,
	) {
	}
}
