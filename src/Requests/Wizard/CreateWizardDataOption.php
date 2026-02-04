<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a wizard data option
 *
 * Creates a wizard data option.
 */
class CreateWizardDataOption extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
