<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data as SpatieData;

class PackingUnit extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $unitId = null,
		#[MapName('unitNameEN')]
		public ?string $unitNameEn = null,
		#[MapName('unitNameDE')]
		public ?string $unitNameDe = null,
	) {
	}
}
