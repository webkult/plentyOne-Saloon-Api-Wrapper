<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class Transaction extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderId = null,
		public ?string $market = null,
		public ?string $externalListingId = null,
		public ?string $credentialsId = null,
		public ?string $buyerUserId = null,
		public ?int $feedback = null,
		public ?string $transactionId = null,
		public ?string $endTime = null,
		public ?int $quantity = null,
		public ?string $title = null,
		public int|float|null $price = null,
		public ?string $shippingAddressCountry = null,
		public ?int $referrerId = null,
		public ?string $createdAt = null,
		public ?int $notification = null,
		public ?int $orderRowId = null,
		public ?string $sku = null,
		public ?int $lastUpdate = null,
		public ?string $externalOrderId = null,
		public ?string $externalReferenceNo = null,
		public ?string $cancelId = null,
		public ?string $isEbayPlus = null,
		public ?string $isClickAndCollect = null,
		public ?string $extendedOrderId = null,
		public ?string $importStatus = null,
	) {
	}
}
