<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a wizard data
 *
 * Updates a wizard data
 */
class UpdateWizardData extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/wizards/{$this->wizardKey}/data";
	}


	/**
	 * @param int $wizardKey
	 */
	public function __construct(
		protected int $wizardKey,
	) {
	}
}
