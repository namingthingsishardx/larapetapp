<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\User;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = BankAccount::where('user_id', auth()->user()->id)->get();

        if (count($account) >0 ) {
            return redirect(route('bank.show', $account[0]->id));
        }

        return view('bank.index', compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bankAccount = new BankAccount;
        $bankAccount->user_id = auth()->user()->id;
        $bankAccount->level = 1;
        $bankAccount->interest = 0;
        $bankAccount->pawchips = $request->post('deposit');
        $bankAccount->save();

        User::find(auth()->user()->id)->decrement('pawchips',  $request->post('deposit'));

        return redirect(route('bank.index'));
    }

    public function exchange(Request $request)
    {
        $gpToPc = $request->post('exchangeAmount') * 14;
        User::find(auth()->user()->id)->decrement('goldpoints',  $request->post('exchangeAmount'));
        User::find(auth()->user()->id)->increment('pawchips',  $gpToPc);

        return redirect(route('bank.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BankAccount $bank)
    {
        $bankAccount = $bank;
        return view('bank.show', compact('bankAccount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
