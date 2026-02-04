<?php

namespace PlentyOne\Api\Requests\Catalog;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Migrate Catalogs
 *
 * Migrates Catalogs from Dynamo DB to S3
 */
class MigrateCatalogs extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/catalogs/catalogs/migrate";
	}


	public function __construct()
	{
	}
}
