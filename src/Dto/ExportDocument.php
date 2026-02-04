<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class ExportDocument extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $orderId = null,
		public ?int $packageNumber = null,
		#[MapName('base64Content')]
		public ?int $base64content = null,
	) {
	}
}
