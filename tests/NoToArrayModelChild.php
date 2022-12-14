<?php

declare(strict_types=1);

namespace Porthorian\EntityOrm\Tests;

use Porthorian\EntityOrm\Model\Model;

class NoToArrayModelChild extends Model
{
	public string $test_world = 'world';
	protected string $test = 'hello';
	public string $unintilized_public;
	protected string $unintilized_protected;

	public function toArray() : array
	{
		return $this->toProtectedPropsArray() + $this->toPublicPropsArray();
	}

	public function toPublicArray() : array
	{
		return [];
	}

	public function setPrimaryKey(string|int $value) : void
	{
		return;
	}

	public function getPrimaryKey() : string|int
	{
		return 0;
	}

	public function getEntityPath() : string
	{
		return '\Porthorian\EntityOrm\Tests\EntityChild';
	}
}
