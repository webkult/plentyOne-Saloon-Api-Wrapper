<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get list of campaigns
 *
 * Get the list of campaigns paginated
 */
class GetListOfCampaigns extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/coupons/campaigns";
	}


	public function __construct()
	{
	}
}
