<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a role by ID
 *
 * Delete a role by ID
 */
class DeleteRoleById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/roles/{$this->id}";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
