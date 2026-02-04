<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a credential
 *
 * Update a credential with the given data and ID.
 */
class UpdateCredential extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/credentials/{$this->credentialsId}";
	}


	/**
	 * @param int $credentialsId
	 */
	public function __construct(
		protected int $credentialsId,
	) {
	}
}
