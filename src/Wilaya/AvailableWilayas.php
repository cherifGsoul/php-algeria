<?php

namespace Cherif\Algeria\Wilaya;

interface AvailableWilayas
{
	/**
	 * @return AvailableWilaya[]
	 */
	public function findAll(): array;

	/**
	 * @return AvailableWilaya
	 */
	public function findByWilaya(Wilaya $wilaya): AvailabelWilaya;
}