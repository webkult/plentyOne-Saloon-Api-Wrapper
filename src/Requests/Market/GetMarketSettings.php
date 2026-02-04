<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get market settings
 *
 * Gets market settings. The market settings ID must be specified.
 */
class GetMarketSettings extends Request
{
	protected Method $method = Method::GET;


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
