<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a credential
 *
 * Gets a credential by given ID.
 */
class GetCredential extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/credentials/{$this->credentialsId}";
	}


	/**
	 * @param int $credentialsId
	 * @param int $id The ID of the credentials to be found.
	 */
	public function __construct(
		protected int $credentialsId,
		protected int $id,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id' => $this->id]);
	}
}
