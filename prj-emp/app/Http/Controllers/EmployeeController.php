<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Invoice;
use Illuminate\Http\Request;

use App\Http\Resources\EmployeeCollection;
use App\Http\Resources\EmployeeResource;

use App\Http\Requests\StoreEmployeeRequest;//store
use App\Http\Requests\UpdateEmployeeRequest;//update



class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        // return new EmployeeCollection(Employee::all());

        // $employee = Employee::find(1)->Invoice;
        // return $employee;

        return new EmployeeCollection(Employee::all());

    }

    public function show(Request $request, Employee $employee)
    {
        return new EmployeeResource($employee);

        // $employee = new EmployeeResource(Employee::find($id));
        // return $employee;

    }

    public function store(StoreEmployeeRequest $request)
    {
       $validated = $request->validated();


       $employee = Employee::create($validated);

       return new EmployeeResource($employee);

    }

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $validated = $request->validated();

        $employee->update($validated);

        return new EmployeeResource($employee);

    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->noContent();
    }

}
