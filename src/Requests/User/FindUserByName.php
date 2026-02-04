<?php

namespace PlentyOne\Api\Requests\User;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Find user by name
 *
 * Find all users having a name or username like the given one.
 */
class FindUserByName extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/backend/users/search_name/{$this->name}";
	}


	/**
	 * @param string $name The name to search for
	 */
	public function __construct(
		protected string $name,
	) {
	}
}
