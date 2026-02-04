<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Vat extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $countryId = null,
		public ?string $taxIdNumber = null,
		public ?string $startedAt = null,
		public ?string $invalidFrom = null,
		public ?int $locationId = null,
		public ?string $marginScheme = null,
		public ?bool $isRestrictedToDigitalItems = null,
		public ?bool $isStandard = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?bool $isActive = null,
	) {
	}
}
