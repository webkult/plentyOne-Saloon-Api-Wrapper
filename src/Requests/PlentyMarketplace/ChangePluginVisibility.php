<?php

namespace PlentyOne\Api\Requests\PlentyMarketplace;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Change plugin visibility
 *
 * Make a plugin visible or invisible on plentyMarketplace.
 */
class ChangePluginVisibility extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/partner-portal/partner-plugin/visibility";
	}


	/**
	 * @param string $plentyId Cookie from a successful login.
	 */
	public function __construct(
		protected string $plentyId,
	) {
	}


	public function defaultHeaders(): array
	{
		return array_filter(['plentyID' => $this->plentyId]);
	}
}
