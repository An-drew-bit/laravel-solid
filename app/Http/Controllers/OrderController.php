<?php

namespace App\Http\Controllers;

use App\Actions\Orders\OrderNotificationsAction;
use App\Actions\Orders\OrderStoreActions;
use App\Http\Requests\OrderStoreRequest;
use Illuminate\Http\RedirectResponse;

class OrderController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    /**
     * @param OrderStoreRequest $request
     * @return RedirectResponse
     */
    public function store(
        OrderStoreRequest $request, OrderStoreActions $orderStoreActions, OrderNotificationsAction $orderNotificationsAction
    ): RedirectResponse
    {
        $order = $orderStoreActions->handle($request->validated());

        if ($order->exists) {
            $orderNotificationsAction->handle($order);
        }

        return to_route('orders.index');
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
