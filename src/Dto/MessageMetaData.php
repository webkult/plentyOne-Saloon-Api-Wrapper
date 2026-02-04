<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class MessageMetaData extends SpatieData
{
	public function __construct(
		public ?array $readBy = null,
		public ?int $plentyId = null,
	) {
	}
}
