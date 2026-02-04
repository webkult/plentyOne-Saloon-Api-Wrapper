<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get return policy
 *
 * Get return policy for given ID.
 */
class GetReturnPolicy extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/return_policies/{$this->id}";
	}


	/**
	 * @param int $id
	 * @param string $marketplaceId The ID of the marketplace for which to get the policy.
	 * @param int $credentialsId The ID of credentials for which to get the policy.
	 */
	public function __construct(
		protected int $id,
		protected string $marketplaceId,
		protected int $credentialsId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['marketplaceId' => $this->marketplaceId, 'credentialsId' => $this->credentialsId]);
	}
}
