<?php

namespace App\Http\Controllers;

use App\Models\ModalPopup;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ModalPopupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = [
            "popups" => ModalPopup::query()->get()
        ];

        return view("dashboard.popups.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $modal = ModalPopup::query()->where(["id" => $id])->first();
        $modal = [
            "page" => $modal->page,
            "popup" => $modal->popup
        ];

        return response()->json($modal);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            "resource" => ModalPopup::find($id)
        ];
        return view("dashboard.popups.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $popup = match ($request->popup) {
            "on" => 1,
            default => 0,
        };
        ModalPopup::query()->where(["id" => $id])->update(["popup" => $popup]);
        return redirect("/dashboard/popups");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
