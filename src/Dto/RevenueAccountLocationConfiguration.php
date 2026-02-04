<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class RevenueAccountLocationConfiguration extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $locationId = null,
		public ?string $accountEu = null,
		public ?string $accountExport = null,
	) {
	}
}
