<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class RawDataConfigs extends SpatieData
{
	public function __construct(
		public ?string $plentyIdHash = null,
	) {
	}
}
