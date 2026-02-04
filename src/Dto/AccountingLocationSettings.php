<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class AccountingLocationSettings extends SpatieData
{
	public function __construct(
		public ?int $locationId = null,
		#[MapName('isInvoiceEUNet')]
		public ?bool $isInvoiceEunet = null,
		public ?bool $isInvoiceExportNet = null,
		public ?bool $showShippingVat = null,
		public ?bool $isSmallBusiness = null,
		public ?int $numberOfDecimalPlaces = null,
		public ?bool $roundTotalsOnly = null,
		public ?bool $isReverseCharge = null,
	) {
	}
}
