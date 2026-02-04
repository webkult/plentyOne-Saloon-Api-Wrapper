<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a Set
 *
 * Creates a new plugin set with the given name. If a 'copyPluginSetId' is given, all set entries from
 * that set will be copied into the new set
 */
class CreateSet extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets";
	}


	/**
	 * @param null|int $copyPluginSetId The ID of the plugin set of which to copy the set entries from into the
	 *      * new set
	 */
	public function __construct(
		protected ?int $copyPluginSetId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['copyPluginSetId' => $this->copyPluginSetId]);
	}
}
