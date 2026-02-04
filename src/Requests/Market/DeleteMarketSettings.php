<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete market settings
 *
 * Deletes market settings. The market settings ID must be specified.
 */
class DeleteMarketSettings extends Request
{
	protected Method $method = Method::DELETE;


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
