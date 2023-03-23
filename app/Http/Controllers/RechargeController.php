<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ResponseTrait;
use App\Models\Payment;
use Illuminate\Support\Facades\Validator;

class RechargeController extends Controller
{
	use ResponseTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('recharge');
    }

	public function create(Request $request)
	{
		try {
			$amount = $request->get('amount');
			$id = 10;
			$code = $id . config('setting_var.ACCOUNT_BANK') . $amount;
			$hash_code = strtoupper(hash('adler32', $code));

			$this->store($id, $hash_code, $amount, config('setting_var.ACCOUNT_BANK'));
			return $this->successResponse(["code" => $hash_code, "amount" => $amount]);
		} catch (\Throwable $th) {
			return $this->errorResponse('loi');
		}
	}

	private function store($id, $hash_code, $amount, $bank) 
	{
		$validator = Validator::make([
			'user_id' => $id,
			'hash_code' => $hash_code,
			'money' => $amount,
			'bank' => $bank,
			'status' => config('setting_var.STATUS_PAYMENT_UNPAID'),
		], [
			'user_id' => 'required',
			'hash_code' => 'required|unique:payments,code',
			'money' => 'required|unique:payments,money',
			'bank' => 'required',
			'status' => 'required',
		]);
		if ($validator->fails()) {
			return FALSE;
		};
		Payment::create($validator->data);
		return TRUE;
	}
}