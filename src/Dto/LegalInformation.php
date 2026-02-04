<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class LegalInformation extends SpatieData
{
	public function __construct(
		public ?int $plentyId = null,
		public ?string $lang = null,
		public ?string $type = null,
		public ?string $plainText = null,
		public ?string $htmlText = null,
	) {
	}
}
