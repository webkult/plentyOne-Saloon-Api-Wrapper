<?php

namespace PlentyOne\Api\Requests\Blog;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List blog posts
 *
 * Gets a paginated list of blog posts.
 */
class ListBlogPosts extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/blogs/posts";
	}


	public function __construct()
	{
	}
}
