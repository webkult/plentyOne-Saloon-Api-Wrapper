<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update market settings
 *
 * Updates market settings. The market settings ID must be specified.
 */
class UpdateMarketSettings extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/settings/{$this->settingId}";
	}


	/**
	 * @param int $settingId
	 */
	public function __construct(
		protected int $settingId,
	) {
	}
}
