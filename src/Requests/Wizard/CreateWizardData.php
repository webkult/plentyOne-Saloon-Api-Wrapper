<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a wizard data
 *
 * Creates wizard data for a specific wizard.
 */
class CreateWizardData extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
