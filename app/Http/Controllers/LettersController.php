<?php

namespace App\Http\Controllers;

use App\Letter;
use App\Http\Requests\LetterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LettersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();


        $letters = $user->letters('created_at')->get();


//        $letters = Letter::latest('created_at')->get();
        return view('letters.index')->with('letters', $letters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('letters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(LetterRequest $request)
    {
        $letter = new Letter($request->all());

        $ipAddress = '';

//        // Check for X-Forwarded-For headers and use those if found
//        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && ('' !== trim($_SERVER['HTTP_X_FORWARDED_FOR']))) {
//            $ipAddress = trim($_SERVER['HTTP_X_FORWARDED_FOR']);
//        } else {
//            if (isset($_SERVER['REMOTE_ADDR']) && ('' !== trim($_SERVER['REMOTE_ADDR']))) {
//                $ipAddress = trim($_SERVER['REMOTE_ADDR']);
//            }
//        }
//

//        dd($_SERVER['HTTP_USER_AGENT']);
      dd($letter->getRealIP());


      return($request->ip());

        $letter['userIp']=LetterRequest::ip();

        Auth::user()->letters()->save($letter);

//        Letter::create($request->all());

        return redirect('letters');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Letter $letter)
    {
        return view('letters.show')->with('letter', $letter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Letter $letter)
    {
//        return view('letters.edit')->with('letter',$letter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Letter $letter, LetterRequest $request)
    {
//        $letter->update($request->all());
//        return redirect('letters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
