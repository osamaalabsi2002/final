<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // Team page or another relevant view to show employees and products
    public function team()
    {
        // Fetch employees with pagination (4 per page)
        $employees = Employee::paginate(4);

        // Return the view and pass the paginated employees
        return view('allTeam', compact('employees'));
    }

    // Display individual employee details
    public function showAllStylers()
    {
        // Fetch all employees (or paginate them if needed)
        $employees = Employee::paginate(10);

        // Return the view and pass the employees data to it
        return view('allTeam', compact('employees'));
    }
    
    // Index page for searching products and showing counts



    public function showcount()
    {
        // Fetch counts for users, products, and employees
        $userCount = User::count();
        $productCount = Product::count();
        $employeeCount = Employee::count();
        
        // Fetch all employees for the team section
        $employees = Employee::all();
        $products = Product::all();

       
        // Pass all data to the view
        return view('newindex', compact('userCount', 'productCount', 'employeeCount', 'employees','products'));
    }





    public function productList(Request $request)
    {
        $query = Product::query(); // Assuming you are querying products
    
        // Filter by search term
        if ($request->filled('search')) {
            $searchTerm = '%' . $request->input('search') . '%';
            $query->where('name_products', 'LIKE', $searchTerm);
        }
    
        // Filter by price range
        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
        }
    
        $products = $query->paginate(12); // Paginate results
      return view('shoplisting', compact('products'));
    }
    


    public function index(Request $request)
    {
        // Search query
        $query = Product ::query();

        $products = $query->get();
        return view('allProducts', compact('products'));

        if ($request->filled('search')) {
            $searchTerm = '%' . $request->input('search') . '%';
    
            $query->where(function($q) use ($searchTerm) {
                $q->where('name_products', 'LIKE', $searchTerm)
                  ->orWhere('made_in', 'LIKE', $searchTerm)
                  ->orWhere('uses', 'LIKE', $searchTerm)
                  ->orWhere('products_description', 'LIKE', $searchTerm);
            });
      
        }

        // Fetch products after applying the search (if any)
    }
    
    // public function show($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return view('showProduct', compact('product'));


        
    // }



    public function show($id)
    {
        $product = Product::with('comments.user')->findOrFail($id);
        return view('productDetail', compact('product'));
    }
    


    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_products' => 'required|string|max:255',
            'made_in' => 'required|string|max:255',
            'uses' => 'nullable|string|max:255',
            'products_description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
        ]);

                $filename1 = time() . '_' . "1" . '.' . $request->image1->getClientOriginalExtension();
                $filename2= time() . '_' . "2". '.' . $request->image2->getClientOriginalExtension();
                $filename3= time() . '_' . "3". '.' . $request->image3->getClientOriginalExtension();
                $filename4= time() . '_' . "4". '.' . $request->image4->getClientOriginalExtension();
                // $imagePaths[$imageField] = $file->storeAs('img', $filename);

                $request->image1->move(public_path('img'),$filename1 );
                $request->image2->move(public_path('img'),$filename2 );
                $request->image3->move(public_path('img'),$filename3 );
                $request->image4->move(public_path('img'),$filename4 );
   

        // Save product
        $product = new Product();
        $product->name_products = $validatedData['name_products'];
        $product->made_in = $validatedData['made_in'];
        $product->uses = $validatedData['uses'];
        $product->products_description = $validatedData['products_description'];
        $product->price = $validatedData['price'];
        $product->image1 = $filename1;
        $product->image2 = $filename2;
        $product->image3 = $filename3;
        $product->image4 = $filename4;
        $product->save();

        return redirect()->route('products.create')->with('success', 'Product created successfully!');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validatedData = $request->validate([
            'name_products' => 'required|string|max:255',
            'made_in' => 'required|string|max:255',
            'uses' => 'nullable|string|max:255',
            'products_description' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
        ]);

        // Handle image updates
        foreach (['image1', 'image2', 'image3','image4'] as $imageField) {
            if ($request->hasFile($imageField)) {
                if ($product->$imageField) {
                    \Storage::delete($product->$imageField);
                }
                $file = $request->file($imageField);
                $filename = time() . '_' . $imageField . '.' . $file->getClientOriginalExtension();
                $product->$imageField = $file->storeAs('public/productsImages', $filename);
            }
        }

        // Update the product
        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete images if they exist
        foreach (['image1', 'image2', 'image3','image4'] as $imageField) {
            if ($product->$imageField) {
                \Storage::delete($product->$imageField);
            }
        }

        // Delete the product
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }





    public function showProductDetail($id)
{
    // Assuming you have a Product model
    $product = Product::findOrFail($id); // Fetch product by its ID

    // Pass the product data to the view
    return view('Shopdetail', compact('product'));
}



public function showShopListing()
{
    // Fetch all products from the database
    $products = Product::all(); 

    // Pass the products to the view
    return view('ShopListing', compact('products'));
}










public function addToCart(Request $request)
{
    // Retrieve the current cart from the session or initialize an empty array
    $cart = session()->get('cart', []);

    // Prepare the item details
    $item = [
        'id' => $request->input('product_id'),
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'image' => $request->input('image'),
        'quantity' => 1  // Default quantity is 1
    ];

    // Check if the product is already in the cart
    if (isset($cart[$item['id']])) {
        // If the item exists, increment the quantity
        $cart[$item['id']]['quantity']++;
    } else {
        // Otherwise, add the new item to the cart
        $cart[$item['id']] = $item;
    }

    // Store the updated cart back into the session
    session()->put('cart', $cart);

    // Recalculate totals
    $this->calculateCartTotals();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Item added to cart successfully!');
}


// Method to display the cart
public function showCart()
{
    // Retrieve the cart and totals from the session
    $cart = session()->get('cart', []);
    $totalQuantity = session()->get('totalQuantity', 0);
    $totalPrice = session()->get('totalPrice', 0);

    // Pass the cart items and totals to the view
    return view('cart', compact('cart', 'totalQuantity', 'totalPrice'));
}


protected function calculateCartTotals()
{
    $cart = session('cart', []);
    $totalQuantity = 0;
    $totalPrice = 0;

    foreach ($cart as $item) {
        $totalQuantity += $item['quantity'];
        $totalPrice += $item['price'] * $item['quantity'];
    }

    session()->put('totalQuantity', $totalQuantity);
    session()->put('totalPrice', $totalPrice);
}









public function removeFromCart(Request $request)
{
    // Retrieve the current cart from the session
    $cart = session()->get('cart', []);

    // Remove the item by its ID
    if (isset($cart[$request->input('product_id')])) {
        unset($cart[$request->input('product_id')]);
        
        // Recalculate the total quantity and price
        $totalQuantity = 0;
        $totalPrice = 0;
        
        foreach ($cart as $cartItem) {
            $totalQuantity += $cartItem['quantity'];
            $totalPrice += $cartItem['price'] * $cartItem['quantity'];
        }
        
        session()->put('totalQuantity', $totalQuantity);  // Save updated total quantity
        session()->put('totalPrice', $totalPrice);  // Save updated total price
        session()->put('cart', $cart);  // Save updated cart
    }

    return redirect()->back()->with('success', 'Item removed from cart successfully!');
}




public function increaseQuantity($productId)
{
    $cart = session()->get('cart', []);

    // Check if the product exists in the cart
    if (isset($cart[$productId])) {
        $cart[$productId]['quantity']++;
        session()->put('cart', $cart);

        // Recalculate totals
        $this->calculateCartTotals();
    }

    return redirect()->back()->with('success', 'Product quantity increased.');
}

public function decreaseQuantity($productId)
{
    $cart = session()->get('cart', []);

    // Check if the product exists and quantity is greater than 1
    if (isset($cart[$productId]) && $cart[$productId]['quantity'] > 1) {
        $cart[$productId]['quantity']--;
    } elseif (isset($cart[$productId])) {
        // If quantity is 1, remove the product
        unset($cart[$productId]);
    }
    
    session()->put('cart', $cart);

    // Recalculate totals
    $this->calculateCartTotals();

    return redirect()->back()->with('success', 'Product quantity decreased.');
}



}
