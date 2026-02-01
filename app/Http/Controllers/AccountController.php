<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    /* 
        MOSTRAR TODAS AS CONTAS
    */
    public function index()
    {
        $accounts = Account::where('id_user', Auth::user()->id)->get();

        $total_balance = $accounts->sum('balace');

        return view('Pages.accounts', compact('accounts', 'total_balance'));
    }


    /*
        CRIAR UMA CONTA
    */
    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Insira o nome da conta',
            ]
        );

        $userId = Auth::user()->id;

        Account::create([
            'name' => $request->name,
            'avatar' => '', // Temporário
            'balance' => 00.00,
            'id_user' => $userId
        ]);


        return redirect()->back()->withSucess('Conta criada com sucesso');
    }

    public function update(Request $request)
    {

        $request->validate(
            [
                'newName' => 'required',
            ],
            [
                'newName.required' => 'Insira um novo nome a conta',
            ]
        );
        $account = Account::findOrFail($request->id);

        $account->name = $request->newName;
        $account->save();

        return redirect()->back()->withSucess('Conta editada com sucesso');
    }


    public function destroy($id)
    {
        Account::findOrFail($id)->delete();

        return redirect()->back();
    }
}
