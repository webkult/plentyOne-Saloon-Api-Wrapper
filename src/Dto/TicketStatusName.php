<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class TicketStatusName extends SpatieData
{
	public function __construct(
		public ?int $id = null,
		public ?int $statusId = null,
		public ?string $lang = null,
		public ?string $name = null,
	) {
	}
}
