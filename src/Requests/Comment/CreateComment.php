<?php

namespace PlentyOne\Api\Requests\Comment;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a comment
 *
 * Creates a new comment.
 */
class CreateComment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/comments";
	}


	public function __construct()
	{
	}
}
