<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
	use ResponseTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('authAdmin');
    }

    /**5
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($code)
    {
		$data = Payment::select(['money', 'bank', 'status'])->where('code', $code)->first();
		if (!$data) {
			return FALSE;
		}
        $phone_number = config('setting_var.PHONE_NUMBER');
        $email = config('setting_var.EMAIL');

        return view('client/payment', [
										'status' => $data->status,
										'code' => $code,
										'amount' => $data->money,
										'bank' => $data->bank,
										'phone_number' => $phone_number,
										'email' => $email,
									]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        return redirect('/users')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'required',
        ]);

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        return redirect('/users')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/users')->with('success', 'User deleted successfully.');
    }

    private function generate_code($id, $bank, $money) {
		$past_code = strtoupper(bin2hex(random_bytes(5)));

    	return view('client/show_user');
    }

	public function generate_code2(Request $request) {
		try {
			// dd($request->all());
			$data = $request->get('data');
			$past_code = strtoupper(bin2hex(random_bytes(5)));
			$code = '123abc';
			return $this->successResponse($code);
		} catch (\Throwable $th) {
			return $this->errorResponse('loi');
		}
	}
}