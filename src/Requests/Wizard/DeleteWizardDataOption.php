<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a wizard data's option
 *
 * Deletes a wizard data option
 */
class DeleteWizardDataOption extends Request
{
	protected Method $method = Method::DELETE;


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
