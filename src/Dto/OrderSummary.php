<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class OrderSummary extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $addressId = null,
		public ?int $contactId = null,
		public ?int $unpaidOrdersCount = null,
		public int|float|null $unpaidOrderTotalAmount = null,
		public ?int $orderCount = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
	) {
	}
}
