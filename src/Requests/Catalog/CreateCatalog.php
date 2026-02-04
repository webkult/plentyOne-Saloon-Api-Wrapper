<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create Catalog
 *
 * Creates a Catalog
 */
class CreateCatalog extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs";
	}


	public function __construct()
	{
	}
}
