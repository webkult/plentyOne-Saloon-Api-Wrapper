<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Todo\CreateListOfTodos;
use PlentyOne\Api\Requests\Todo\DeleteListOfTodos;
use PlentyOne\Api\Requests\Todo\SearchForTodos;
use PlentyOne\Api\Requests\Todo\UpdateListOfTasks;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Todo extends BaseResource
{
	/**
	 * @param int $page The page of results to search for.
	 */
	public function searchForTodos(?int $page = null): Response
	{
		return $this->connector->send(new SearchForTodos($page));
	}


	public function updateListOfTasks(): Response
	{
		return $this->connector->send(new UpdateListOfTasks());
	}


	public function createListOfTodos(): Response
	{
		return $this->connector->send(new CreateListOfTodos());
	}


	public function deleteListOfTodos(): Response
	{
		return $this->connector->send(new DeleteListOfTodos());
	}
}
