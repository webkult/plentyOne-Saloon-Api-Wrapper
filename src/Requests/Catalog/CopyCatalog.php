<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Copy Catalog
 *
 * Copies one or multiple Catalogs.
 */
class CopyCatalog extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs/copy";
	}


	public function __construct()
	{
	}
}
