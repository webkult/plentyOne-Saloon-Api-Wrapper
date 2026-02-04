<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a list of Catalog statuses
 *
 * Gets a list of Catalog statuses
 */
class GetListOfCatalogStatuses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/statuses";
	}


	public function __construct()
	{
	}
}
