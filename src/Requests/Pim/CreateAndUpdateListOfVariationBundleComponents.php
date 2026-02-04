<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Create and update a list of variation bundle components
 *
 * Creates and updates a list of variation bundle components.
 */
class CreateAndUpdateListOfVariationBundleComponents extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/bundle_components";
	}


	public function __construct()
	{
	}
}
