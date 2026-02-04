<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class TicketOwner extends SpatieData
{
	public function __construct(
		public ?int $ticketId = null,
		public ?int $userId = null,
		public ?int $roleId = null,
	) {
	}
}
