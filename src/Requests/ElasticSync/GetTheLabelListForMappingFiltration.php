<?php

namespace PlentyOne\Api\Requests\ElasticSync;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the label list for mapping filtration.
 *
 * Gets the label list for mapping filtration.
 */
class GetTheLabelListForMappingFiltration extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/elastic-sync/mapping/filter/labels";
	}


	public function __construct()
	{
	}
}
