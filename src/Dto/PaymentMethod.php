<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class PaymentMethod extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?string $pluginKey = null,
		public ?string $paymentKey = null,
		public ?string $name = null,
		public ?bool $isDocumentBuilderActive = null,
	) {
	}
}
