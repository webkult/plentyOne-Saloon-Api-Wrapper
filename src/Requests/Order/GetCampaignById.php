<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get campaign by Id
 *
 * Get details for specific campaign by id
 */
class GetCampaignById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/coupons/campaigns/{$this->campaignId}";
	}


	/**
	 * @param int $campaignId
	 */
	public function __construct(
		protected int $campaignId,
	) {
	}
}
