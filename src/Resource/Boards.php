<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Boards\CopyBoard;
use PlentyOne\Api\Requests\Boards\CreateNewBoard;
use PlentyOne\Api\Requests\Boards\DeleteBoard;
use PlentyOne\Api\Requests\Boards\GetBoardById;
use PlentyOne\Api\Requests\Boards\ListAllBoards;
use PlentyOne\Api\Requests\Boards\UpdateBoard;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Boards extends BaseResource
{
	public function listAllBoards(): Response
	{
		return $this->connector->send(new ListAllBoards());
	}


	public function createNewBoard(): Response
	{
		return $this->connector->send(new CreateNewBoard());
	}


	/**
	 * @param string $boardId The ID of the board
	 * @param int $tasksPerPage Maximum number of tasks to list per column
	 */
	public function getBoardById(string $boardId, ?int $tasksPerPage = null): Response
	{
		return $this->connector->send(new GetBoardById($boardId, $tasksPerPage));
	}


	/**
	 * @param string $boardId The ID of the board
	 */
	public function updateBoard(string $boardId): Response
	{
		return $this->connector->send(new UpdateBoard($boardId));
	}


	/**
	 * @param string $boardId The ID of the board
	 */
	public function copyBoard(string $boardId): Response
	{
		return $this->connector->send(new CopyBoard($boardId));
	}


	/**
	 * @param string $boardId The ID of the board
	 */
	public function deleteBoard(string $boardId): Response
	{
		return $this->connector->send(new DeleteBoard($boardId));
	}
}
