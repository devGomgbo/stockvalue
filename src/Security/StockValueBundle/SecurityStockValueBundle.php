<?php

namespace Security\StockValueBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SecurityStockValueBundle extends Bundle
{
	public function getParent()
	{
		return "OroUserBundle";
	}
}
