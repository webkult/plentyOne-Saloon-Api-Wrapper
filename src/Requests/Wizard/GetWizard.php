<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a wizard
 *
 * Gets a specific wizard by wizard key.
 */
class GetWizard extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/wizards/{$this->wizardKey}";
	}


	/**
	 * @param int $wizardKey
	 */
	public function __construct(
		protected int $wizardKey,
	) {
	}
}
