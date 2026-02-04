<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ShippingInformation extends SpatieData
{
	public function __construct(
		public ?int $orderId = null,
		public ?string $shippingServiceProvider = null,
		public ?string $transactionId = null,
		public ?string $shippingStatus = null,
		public int|float|null $shippingCosts = null,
		public ?string $additionalData = null,
		public ?int $registrationAt = null,
		public ?int $shipmentAt = null,
	) {
	}
}
