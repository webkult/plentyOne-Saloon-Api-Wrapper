<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class ReturnPolicy extends SpatieData
{
	public function __construct(
		public ?string $returnPolicyId = null,
		public ?string $description = null,
		public ?bool $extendedHolidayReturnsOffered = null,
		public ?string $marketplaceId = null,
		public ?string $name = null,
		public ?string $refundMethod = null,
		public ?string $restockingFeePercentage = null,
		public ?string $returnInstruction = null,
		public ?string $returnInstructions = null,
		public ?string $returnMethod = null,
		public ?bool $returnsAccepted = null,
		public ?string $returnShippingCostPayer = null,
	) {
	}
}
