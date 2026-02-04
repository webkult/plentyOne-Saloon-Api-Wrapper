<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Update payment policy
 *
 * Update payment policy for given ID.
 */
class UpdatePaymentPolicy extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/payment_policies/{$this->id}";
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
