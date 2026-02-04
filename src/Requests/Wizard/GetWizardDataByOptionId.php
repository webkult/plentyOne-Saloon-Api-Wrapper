<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a wizard data by optionId
 *
 * Gets a wizard data by optionId
 */
class GetWizardDataByOptionId extends Request
{
	protected Method $method = Method::GET;


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
