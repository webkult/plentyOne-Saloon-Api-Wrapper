<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ListingMarket extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $listingId = null,
		public ?int $variationId = null,
		public ?int $referrerId = null,
		public ?int $credentialsId = null,
		public ?int $directoryId = null,
		public ?bool $enabled = null,
		public ?string $duration = null,
		public ?string $verified = null,
		public ?int $quantity = null,
		public ?bool $allVariations = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
