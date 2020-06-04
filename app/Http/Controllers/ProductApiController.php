<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductApiRequest;
use Illuminate\Http\JsonResponse;

/**
 * Class ProductApiController
 * @package App\Http\Controllers
 */
class ProductApiController extends Controller
{

    public function index()
    {
        // TODO please create your API logic here

        return new JsonResponse(
            [
                'status' => 'success',
                'message' => 'Successfully retrieved products.',
                'data' => []
            ],
            200
        );
    }
}
