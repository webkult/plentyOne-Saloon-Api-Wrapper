<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete fulfillment policy
 *
 * Delete fulfillment policy by given ID.
 */
class DeleteFulfillmentPolicy extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/fulfillment_policies/{$this->id}";
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
