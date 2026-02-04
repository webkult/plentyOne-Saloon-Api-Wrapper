<?php

namespace PlentyOne\Api\Requests\Blog;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a blog post
 *
 * Creates a new blog post.
 */
class CreateBlogPost extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/blogs/post";
	}


	public function __construct()
	{
	}
}
