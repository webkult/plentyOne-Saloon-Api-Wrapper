<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Order extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $typeId = null,
		public int|float|null $statusId = null,
		public ?string $statusName = null,
		public ?int $ownerId = null,
		public int|float|null $referrerId = null,
		public ?string $createdAt = null,
		public ?string $updatedAt = null,
		public ?int $plentyId = null,
		public ?int $locationId = null,
		public ?bool $roundTotalsOnly = null,
		public ?int $numberOfDecimals = null,
		public ?string $lockStatus = null,
		public ?bool $isLocked = null,
		public ?bool $hasTaxRelevantDocuments = null,
		public ?bool $hasDeliveryOrders = null,
		public ?string $legacyOrderType = null,
		public ?int $contactSenderId = null,
		public ?int $contactReceiverId = null,
		public ?int $warehouseSenderId = null,
		public ?int $warehouseReceiverId = null,
	) {
	}
}
