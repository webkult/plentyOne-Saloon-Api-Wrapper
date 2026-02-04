<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class SystemConfig extends SpatieData
{
	public function __construct(
		public ?bool $archiveActive = null,
	) {
	}
}
