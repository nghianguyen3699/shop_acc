<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Controllers\ResponseTrait;
use Illuminate\Http\Request;

class InvoicesController extends Controller
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
		$id = '10';
		$invoices = Payment::where('user_id', $id)->paginate(2);

        return view('invoices', ['invoices' => $invoices]);
    }

	public function delete(Request $request)
	{
		try {
			$code = $request->get('code');
			$id = '10';
			Payment::where('user_id', $id)->where('code', $code)->update([
				'status' => config('setting_var.STATUS_PAYMENT_CANCELED')
			]);
			return $this->successResponse(['code' => $code]);
		} catch (\Throwable $th) {
			return $this->errorResponse('loi');
		}
	}
}