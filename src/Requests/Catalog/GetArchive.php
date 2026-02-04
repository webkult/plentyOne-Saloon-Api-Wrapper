<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get archive
 *
 * Gets the list of archived Catalogs. An archived Catalog is a deleted Catalog.
 */
class GetArchive extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs/archive";
	}


	public function __construct()
	{
	}
}
