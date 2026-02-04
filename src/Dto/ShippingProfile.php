<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ShippingProfile extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $name = null,
		public ?int $credentialsId = null,
		public ?int $referrerId = null,
		public ?string $createdBy = null,
		public ?bool $isDefault = null,
		public ?array $extendedData = null,
	) {
	}
}
