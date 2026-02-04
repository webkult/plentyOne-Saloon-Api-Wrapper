<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Creates a new category
 *
 * Creates a new category
 */
class CreatesNewCategory extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/categories";
	}


	public function __construct()
	{
	}
}
