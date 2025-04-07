<?php

// namespace App\Http\Controllers;
// use App\Models\Worker;
// use Illuminate\Http\Request;

// class WorkerController extends Controller
// {

//     public function index()
//     {
//         //
//         $data=Worker::latest()->paginate(4);
//         return view('worker.index',compact('data'));
//     }
//     public function create()
//     {
//         //
//         return view('worker.create');
//     }
//     public function store(Request $request)
//     {
        
//         $request->validate(
//             [
//                 "mobileno"=>"required | unique:worker",
//                 "username"=>"required"
                
//             ]
//             );
            //image upload
            // $imageName="worker_".time().".".$request->cat_pic->extension();

            // $request->mobileno->move(public_path('img'),$imageName);
            // $imgPath="/img/".$imageName;

            //insert code
    //         $table=new Worker();
    //         $table->mobileno=$request->mobileno;
    //         $table->username=$request->username;
    //         $table->status=true;
    //         $table->save();
    //         return redirect("worker")->withSuccess("Inserted successfully!!!");

    // }
//     public function edit(Worker $worker)
//     {
//         //
//         return view('worker.edit',compact('worker'));
//     }
//     public function update(Request $request, Worker $worker)
// {
//     $request->validate([
//         "mobileno" => "required",
//         "username" => "required"
//     ]);

//     // Update the worker details
//     $worker->mobileno = $request->mobileno;
//     $worker->username = $request->username;
//     $worker->status = true;
//     $worker->save();

//     return redirect("worker")->withSuccess("Updated successfully!!!");
// }
// public function destroy(Worker $worker)
//     {
//         //
//         $worker->delete();
//         return redirect('worker')->withSuccess('Deleted Successfully...');
//     }

//     public function wregister(Request $request)
//     {
//         if (
//             !isset($request->username) &&
//             !isset($request->mobileno)
//         ) {

//             return
//                 [
//                     "status" => false,
//                     "message" => "Not Sufficient Parameter",
//                     "worker" => null
//                 ];
//         } else {

//             $table = new Worker();
//             $table->username = $request->username;
//             $table->mobileno = $request->mobileno;
//             $table->status = true;
//             $table->save();

//             return
//                 [
//                     "status" => true,
//                     "message" => "Created Successfully!!!",
//                     "worker" => $table
//                 ];
//         }
//     }
//     public function loginorregister(Request $request)
//     {
//         if (!isset($request->mobileno)) {
//             return [
//                 "status" => false,
//                 "message" => "Mobile number is required",
//                 "worker" => null
//             ];
//         }

//         $user = Worker::where('mobileno', $request->mobileno)->first();

//         if ($user) {
//             return [
//                 "status" => true,
//                 "message" => "Login successful",
//                 "worker" => $user
//             ];
//         } else {
//             $user = new Worker();
//             $user->mobileno = $request->mobileno;
//             $user->username = $request->username ?? 'User' . rand(1000, 9999);
//             $user->status = true;
//             $user->save();

//             return [
//                 "status" => true,
//                 "message" => "Account created successfully",
//                 "worker" => $user
//             ];
//         }
//     }
// }



namespace App\Http\Controllers;
use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{

    public function index()
    {
        //
        $data=Worker::latest()->paginate(4);
        return view('Worker.index',compact('data'));
    }
    public function create()
    {
        //
        return view('worker.create');
    }
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "mobileno"=>"required | unique:worker",
                "username"=>"required"
                
            ]
            );
            //image upload
            // $imageName="worker_".time().".".$request->cat_pic->extension();

            // $request->mobileno->move(public_path('img'),$imageName);
            // $imgPath="/img/".$imageName;

            //insert code
            $table=new Worker();
            $table->mobileno=$request->mobileno;
            $table->username=$request->username;
            $table->status=true;
            $table->save();
            return redirect("worker")->withSuccess("Inserted successfully!!!");

    }
    public function edit(Worker $worker)
    {
        //
        return view('worker.edit',compact('worker'));
    }
    public function update(Request $request, Worker $worker)
{
    $request->validate([
        "mobileno" => "required",
        "username" => "required"
    ]);

    // Update the worker details
    $worker->mobileno = $request->mobileno;
    $worker->username = $request->username;
    $worker->status = true;
    $worker->save();

    return redirect("worker")->withSuccess("Updated successfully!!!");
}
public function destroy(Worker $worker)
    {
        //
        $worker->delete();
        return redirect('worker')->withSuccess('Deleted Successfully...');
    }

    public function wregister(Request $request)
    {
        if (
            !isset($request->username) &&
            !isset($request->mobileno)
        ) {

            return
                [
                    "status" => false,
                    "message" => "Not Sufficient Parameter",
                    "worker" => null
                ];
        } else {

            $table = new Worker();
            $table->username = $request->username;
            $table->mobileno = $request->mobileno;
            $table->status = true;
            $table->save();

            return
                [
                    "status" => true,
                    "message" => "Created Successfully!!!",
                    "worker" => $table
                ];
        }
    }
    public function loginorregister(Request $request)
    {
        if (!isset($request->mobileno)) {
            return [
                "status" => false,
                "message" => "Mobile number is required",
                "worker" => null
            ];
        }

        $user = Worker::where('mobileno', $request->mobileno)->first();

        if ($user) {
            return [
                "status" => true,
                "message" => "Login successful",
                "worker" => $user
            ];
        } else {
            $user = new Worker();
            $user->mobileno = $request->mobileno;
            $user->username = $request->username ?? 'User' . rand(1000, 9999);
            $user->status = true;
            $user->save();

            return [
                "status" => true,
                "message" => "Account created successfully",
                "worker" => $user
            ];
        }
    }
    public function updateWorkerUsername(Request $request)
{
    // Validate the request
    // $request->validate([
    //     'wid' => 'required|exists:workers,id',
    //     'username' => 'required',
    // ]);

    // Find worker by ID
    $worker = Worker::find($request->wid);

    // Update username
    $worker->username = $request->username;

    // Save changes
    $worker->save();

    // Return response
    return 
    [
        "status" => true,
        "message" => "Worker username updated successfully!",
        "worker" => $worker
    ];
}
}