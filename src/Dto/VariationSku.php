<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationSku extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $variationId = null,
		public int|float|null $marketId = null,
		public ?int $accountId = null,
		public ?string $initialSku = null,
		public ?string $sku = null,
		public ?string $parentSku = null,
		public ?bool $isActive = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?string $exportedAt = null,
		public ?string $stockUpdatedAt = null,
		public ?string $deletedAt = null,
		public ?string $status = null,
		public ?string $additionalInformation = null,
	) {
	}
}
