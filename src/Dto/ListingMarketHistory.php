<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ListingMarketHistory extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $listingMarketId = null,
		public ?int $referrerId = null,
		public ?string $externalId = null,
		public ?int $statusId = null,
		public ?int $quantity = null,
		public ?int $quantitySold = null,
		public ?int $quantitySoldDelta = null,
		public ?int $quantityRemain = null,
		public int|float|null $price = null,
		public ?string $currency = null,
		public ?string $sku = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?bool $hasStockReservationForEbay = null,
	) {
	}
}
