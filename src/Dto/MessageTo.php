<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class MessageTo extends SpatieData
{
	public function __construct(
		public ?array $user = null,
		public ?array $role = null,
		public ?array $email = null,
		public ?bool $allUsers = null,
		public ?array $contacts = null,
		public ?array $orders = null,
		public ?array $emails = null,
	) {
	}
}
