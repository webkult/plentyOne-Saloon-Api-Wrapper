<?php

namespace PlentyOne\Api\Requests\Wizard;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Rebuild wizard cache
 *
 * Rebuilds cache of a given wizardKey and retuns the new cached data
 */
class RebuildWizardCache extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/wizards/{$this->wizardKey}/rebuildCache";
	}


	/**
	 * @param int $wizardKey
	 */
	public function __construct(
		protected int $wizardKey,
	) {
	}
}
