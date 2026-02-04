<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AccountingLocation extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $countryId = null,
		public ?string $name = null,
		public ?int $clientId = null,
		public ?int $plentyId = null,
	) {
	}
}
