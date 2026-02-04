<?php

namespace PlentyOne\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

class TokenData extends SpatieData
{
	public function __construct(
		public ?string $accessToken = null,
		public ?string $tokenType = null,
		public ?int $expiresIn = null,
		public ?string $refreshToken = null,
	) {
	}
}
