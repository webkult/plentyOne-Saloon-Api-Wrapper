<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class AddressRelationType extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $position = null,
		public ?int $nonErasable = null,
	) {
	}
}
