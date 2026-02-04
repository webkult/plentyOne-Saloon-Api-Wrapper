<?php

namespace PlentyOne\Api\Requests\Cloud;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Commit plugin changes
 *
 * Commits all plugin changes.
 */
class CommitPluginChanges extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/storage/plugins/inbox/commit";
	}


	public function __construct()
	{
	}
}
