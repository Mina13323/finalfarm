<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer_transactions;

class ProductSelectionController extends Controller
{

    public function select(Request $request)
    {
        $selectedProducts = $request->input('products', []);
        $userId = auth()->user()->id;

        foreach ($selectedProducts as $productId) {
            // Create a new customer transaction for each selected product
            customer_transactions::create([
                'customer_id' => $userId,
                'product_id' => $productId,
                'quantity' => 1, // Assuming quantity is always 1 for each product
                'order_date' => now(),
            ]);
        }
        return redirect()->route('customer.dashboard')->with('success', 'تمت عملية الشراء بنجاح');
    }
}
