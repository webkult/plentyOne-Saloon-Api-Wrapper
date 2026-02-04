<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class FulfillmentPolicy extends SpatieData
{
	public function __construct(
		public ?string $fulfillmentPolicyId = null,
		public ?string $description = null,
		public ?bool $freightShipping = null,
		public ?bool $globalShipping = null,
		public ?bool $localPickup = null,
		public ?string $marketplaceId = null,
		public ?string $name = null,
		public ?bool $pickupDropOff = null,
	) {
	}
}
