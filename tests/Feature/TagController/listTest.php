<?php

namespace Tests\Feature\TagController;


use App\Laravue\JsonResponse;
use Tests\TestCase;

class listTest extends TestCase
{
    public function testlist()
    {
        $list = $this->json('get','api/tag/list', []);
        $response = response()->json(new JsonResponse(['items' => $list, 'total' => mt_rand(1000, 10000)]));
//        new JsonResponse(['items' => $list, 'total' => mt_rand(1000, 10000)]);

    }
}