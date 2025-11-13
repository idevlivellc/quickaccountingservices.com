<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQueryRequest;
use App\Services\TelegramService;
use Illuminate\Http\JsonResponse;

class ContactUsController extends Controller
{
    /**
     * Store website visitor query into the databse
     * @param StoreQueryRequest contains name, email, phone number, service and query
     * @return JsonResponse
     */
    public function store(StoreQueryRequest $request, TelegramService $telegram): JsonResponse
    {
        $name = $request->post("name");
        $email = $request->post("email");
        $phone = $request->post("phone");
        $service = $request->post("service");
        $query = $request->post("query");
        $ip = $request->ip();

        $text =
        "<b>New Contact Submission</b>" . PHP_EOL . PHP_EOL .
        "<b>Name:</b> {$name}". PHP_EOL .
        "<b>Email:</b> {$email}". PHP_EOL .
        "<b>Phone:</b> {$phone}". PHP_EOL .
        "<b>Service:</b> {$service}". PHP_EOL .
        "<b>Query:</b> {$query}". PHP_EOL . PHP_EOL .
        "<b>IP Address:</b> {$ip}";

        $telegram->sendMessage($text);

        return response()->json("Query submitted! Someone from the team will call you.");
    }
}
