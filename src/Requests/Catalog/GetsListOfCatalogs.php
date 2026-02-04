<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Gets a list of Catalogs
 *
 * Gets a paginated list of the Catalogs.
 */
class GetsListOfCatalogs extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs";
	}


	public function __construct()
	{
	}
}
