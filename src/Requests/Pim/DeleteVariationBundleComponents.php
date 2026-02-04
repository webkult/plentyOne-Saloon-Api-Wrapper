<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete variation bundle components
 *
 * Deletes a list of variation bundle components.
 */
class DeleteVariationBundleComponents extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/variations/bundle_components";
	}


	public function __construct()
	{
	}
}
