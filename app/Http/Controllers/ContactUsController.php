<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQueryRequest;
use Illuminate\Http\JsonResponse;

class ContactUsController extends Controller
{
    /**
     * Store website visitor query into the databse
     * @param StoreQueryRequest contains name, email, phone number, service and query
     * @return JsonResponse
     */
    public function store(StoreQueryRequest $request): JsonResponse
    {
        return response()->json($request->post("query"));
    }
}
