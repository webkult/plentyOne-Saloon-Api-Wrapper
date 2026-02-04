<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a wizard data
 *
 * Deletes a wizard data
 */
class DeleteWizardData extends Request
{
	protected Method $method = Method::DELETE;


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
