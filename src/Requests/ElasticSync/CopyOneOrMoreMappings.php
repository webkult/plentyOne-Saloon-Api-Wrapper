<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Copy one or more mappings.
 *
 * Copies one or multiple mappings. The mapping ID must be specified.
 */
class CopyOneOrMoreMappings extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/sync/mappings/copy";
	}


	public function __construct()
	{
	}
}
