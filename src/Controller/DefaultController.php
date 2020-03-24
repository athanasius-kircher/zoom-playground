<?php
declare(strict_types=1);


namespace Athanasius\ZoomPlayground\Controller;


use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
	public function indexAction(): Response
	{
		return new Response('go zoom');
	}
}