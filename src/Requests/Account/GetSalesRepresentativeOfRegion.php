<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get sales representative of region
 *
 * Gets the a sales representative of the region.
 */
class GetSalesRepresentativeOfRegion extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/sales_representative_regions";
	}


	public function __construct()
	{
	}
}
