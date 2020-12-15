<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $employees = [
         [
             'id'=>1,
             'fname'=>"Ahmad",
             'lname'=>'Ahmadi'
         ],
         [
            'id'=>2,
            'fname'=>"Mansoor",
            'lname'=>'Manoori'
        ],
      ];

      $params = [
     'title'=>'Employees listing',
      'employees'=>$employees
      ];

      return view('employees.index')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param = [
            'title'=>'Create a new employee'
        ];
        return view('employees.create')->with($param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()
        ->route('employee.index')
        ->with('status','Employee successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = [
            'id'=>1,
            'fname'=>"Ahmad",
            'lname'=>'Ahmadi'
        ];
        $param = [
            'title'=>'Employee details',
            'employee'=>$employee

        ];
        return view('employees.show')->with($param);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = [
            'id'=>1,
            'fname'=>"Ahmad",
            'lname'=>'Ahmadi'
        ];
        $param = [
            'title'=>'Edit employee details',
            'employee'=>$employee
        ];
        return view('employees.edit')->with($param);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect()
        ->route('employee.index')
        ->with('status','Employee details sucessfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      return redirect()
      ->route('employee.index')
      ->with('status','Employee deleted!');
    }
}
