<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Resets all saved raw data configurations with given data
 *
 * Reset all raw data configurations and their children with provided data from the Request
 */
class ResetsAllSavedRawDataConfigurationsWithGivenData extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/reports/raw-data/config";
	}


	/**
	 * @param array $configs Resets all saved raw data configurations with given configs
	 */
	public function __construct(
		protected array $configs,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['configs' => $this->configs]);
	}
}
