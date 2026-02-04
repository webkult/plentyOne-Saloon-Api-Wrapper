<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class VariationSupplier extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $variationId = null,
		public ?int $supplierId = null,
		public int|float|null $purchasePrice = null,
		public ?int $minimumPurchase = null,
		public ?string $itemNumber = null,
		public ?string $lastPriceQuery = null,
		public ?int $deliveryTimeInDays = null,
		public int|float|null $discount = null,
		public ?string $isDiscountable = null,
		public int|float|null $packagingUnit = null,
		public ?string $lastUpdateTimestamp = null,
		public ?string $createdAt = null,
		public int|float|null $currencyPurchasePrice = null,
		public ?string $itemDescription = null,
	) {
	}
}
