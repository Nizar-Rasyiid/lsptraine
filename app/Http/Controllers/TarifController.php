<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarif;
class TarifController extends Controller
{
    public function index()
    {
        $data = Tarif::get();
        return view('tarif', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $data = Tarif::create(
            [
                'daya' => $request->daya,
                'tarifperkwh' => $request->tarifperkwh
            ]);

        return redirect()->route('tarif');
    }

    public function edit($id)
    {
        // Take the id from selected parameter
        //first is to take the first id

        $data = Tarif::where('id_tarif',$id)->first();

        if ($data) {
            return view('edittarif', ['data' => $data]);
        }else {
            //return to not found page
            return abort('404');
        }
    }

    public function update(Request $request,$id)
    {
        $data = Tarif::where('id_tarif',$id)->first();
        if ($data) {
            //change data which have been gotten from database from input in website
            $data->daya = $request->daya;
            $data->tarifperkwh = $request->tarifperkwh;

            //saving process/update the latest data in database
            $result = $data->save();

            //Chechking if it's true go to tarif
            if ($result) {
               return redirect()->route('tarif');
            }
            return view('edittarif',['data' => $data]);
        }else {
            abort('404');
        }
        
    }

    public function destroy($id)
    {
        $data = Tarif::where('id_tarif',$id)->first();

        if ($data) {
            if ($data->delete()) {
                return redirect()->route('tarif');
            }else{
                return abort('404');
            }
        }else {
            return abort('404');
        }
    }
}
