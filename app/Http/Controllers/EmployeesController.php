<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Work;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{


    public function team()
    {
        // Fetch all employees from the database
        $employees = Employee::all(); 
    
        // Pass the employees data to the 'newindex' view
        return view('newindex', compact('employees'));
    }




        public function team3(Request $request)
        {
            // Initialize the query for employees
            $query = Employee::query();
    
            // Check if the search input is filled
            if ($request->filled('search')) {
                $searchTerm = '%' . $request->input('search') . '%';
    
                // Apply the search filter on employee's first and last name
                $query->where(function($q) use ($searchTerm) {
                    $q->where('first_name', 'LIKE', $searchTerm)
                      ->orWhere('last_name', 'LIKE', $searchTerm);
                });
            }
    
            // Paginate the filtered results
            $employees = $query->paginate(1); // You can adjust the pagination as needed
    
            // Return the view with employees
            return view('allTeam', compact('employees'));
        }
    
    


    public function team2()
    {
        // Fetch all employees from the database
        $employees = Employee::all(); 
    
        // Pass the employees data to the 'newindex' view
        return view('team', compact('employees'));
    }



    

    
    public function index(Request $request) {

        
            $query = Employee::query();  // Assuming you are querying employees
        
      
            if ($request->filled('search')) {
                $searchTerm = '%' . $request->input('search') . '%';
        
                $query->where(function($q) use ($searchTerm) {
                    $q->where('first_name', 'LIKE', $searchTerm)
                      ->orWhere('last_name', 'LIKE', $searchTerm)
                      ->orWhere('phone_number', 'LIKE', $searchTerm)
                      ->orWhere('email', 'LIKE', $searchTerm);
                });
            }
        
            $employees = $query->get(); // Fetch all or filtered employees
            return view('allEmployee', compact('employees'));


        }











    public function create()
    {
        return view('addEmployee');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:12',
            'email' => 'required|email|unique:employees,email|max:255',
            'description' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

              
        $mainImagePath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $mainImagePath =$filename;
            $request->image->move(public_path('img'), $filename);
        } else {
            $mainImagePath = 'public/img/userDefaultImage.jpeg';
        }
        $validatedData[
            'image'
        ]=$mainImagePath;
        

        Employee::create($validatedData);

        return redirect()->route('employees.create')->with('success', 'Employee created successfully!');
    }

public function show($id)
{
    // Fetch the specific employee by ID, including related comments and the user who made each comment
    $employee = Employee::with('comments.user')->findOrFail($id);
    
    // Fetch the works related to the employee
    $works = Work::where('employee_id', $id)->get(); // Retrieves the collection of works for the employee
    
    // Pass the employee and works data to the 'team' view
    return view('team', compact('employee', 'works'));
}

    



    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('editEmployee', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
    
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:12',
            'email' => 'required|email|unique:employees,email,' . $employee->id . '|max:255',
            'description' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($employee->image) {
                \Storage::delete('public/' . $employee->image);
            }

            $imagePath = $request->file('image')->store('img/employees', 'public');
            $validatedData['image'] = $imagePath;
        }

        $employee->update($validatedData);

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);

        if ($employee->image) {
            \Storage::delete('public/' . $employee->image);
        }

        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
    }
}
