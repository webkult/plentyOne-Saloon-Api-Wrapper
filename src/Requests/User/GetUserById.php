<?php

namespace PlentyOne\Api\Requests\User;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get user by id
 *
 * Get a user specified by userId.
 */
class GetUserById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/backend/user/{$this->userId}";
	}


	/**
	 * @param int $userId The UserId
	 */
	public function __construct(
		protected int $userId,
	) {
	}
}
