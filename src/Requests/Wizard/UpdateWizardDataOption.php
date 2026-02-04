<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a wizard data option
 *
 * Updates a wizard data option
 */
class UpdateWizardDataOption extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/wizards/{$this->wizardKey}/data/{$this->optionId}";
	}


	/**
	 * @param int $wizardKey
	 * @param int $optionId
	 */
	public function __construct(
		protected int $wizardKey,
		protected int $optionId,
	) {
	}
}
