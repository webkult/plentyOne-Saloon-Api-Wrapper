<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderItem extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderId = null,
		public ?int $typeId = null,
		public int|float|null $referrerId = null,
		public ?int $itemVariationId = null,
		public int|float|null $quantity = null,
		public ?string $orderItemName = null,
		public ?string $attributeValues = null,
		public ?int $shippingProfileId = null,
		public ?int $countryVatId = null,
		public ?int $vatField = null,
		public int|float|null $vatRate = null,
		public ?int $position = null,
		public ?int $warehouseId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
