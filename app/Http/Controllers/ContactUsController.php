<?php

namespace App\Http\Controllers;

# Models
use App\Models\QuickbooksQuery;

# Requests
use App\Http\Requests\StoreQueryRequest;
use App\Http\Requests\QuickbooksCallbackRequest;

# Responses
use Illuminate\Http\JsonResponse;

use App\Services\TelegramService;

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

    public function quickbooksCall(QuickbooksCallbackRequest $request): JsonRespose
    {
        $validated = $requ->validate([
            "name" => ["required", "text"],
            "email" => ["required", "email"],
            "issue" => ["required", "text"]
        ]);

        $name = $request->input("name");
        $email = $request->post("email");
        $phone = $request->post("phone");
        $issue = $request->post("issue");
        $ip = $request->ip();

        $text =
        "<b>QuickBooks Callback Request</b>" . PHP_EOL . PHP_EOL .
        "<b>Name:</b> {$name}". PHP_EOL .
        "<b>Email:</b> {$email}". PHP_EOL .
        "<b>Phone:</b> {$phone}". PHP_EOL .
        "<b>Issue:</b> {$issue}". PHP_EOL . PHP_EOL .
        "<b>IP Address:</b> {$ip}";

        $telegram->sendMessage($text);

        $inputArray = [
            "name" => $name,
            "email" => $email,
            "phone" => $phone,
            "issue" => $issue,
            "ip_address" => $ip
        ];

        QuickbooksQuery::create($inputArray);

        return response()->json("Callback request submitted! A support representative will call you now.");
    }
}
