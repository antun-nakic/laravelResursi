<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = "";
        $type = "text/html";

        //var_dump(Flight::all());
        foreach (Flight::all() as $flight) {
            $content .= $flight->aviokompanija . " ----- " . $flight->destinacija . "<br/>";
        }

        return response($content)
            ->withHeaders([
                'Content-Type' => $type,
                'X-Header-One' => 'Header Value',
                'X-Header-Two' => 'Header Value',
            ])->cookie(
                'mojDrugiCookie',
                'krempita',
                '60'
            );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->away('https://www.google.com');
        //return redirect()->action([FlightController::class, 'index']);
        //return view('flight.unos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $flight = new Flight;

        $flight->aviokompanija = $request->aviokompanija;
        $flight->destinacija = $request->destinacija;

        $flight->save();

        return redirect()->route('flights.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $red = Flight::find($id);
        //echo $red->aviokompanija . " - " . $red->destinacija . " - " . $red->created_at;
        return view('flight.prikaz')->with(['kompanija' => $red->aviokompanija, 'destinacija' => $red->destinacija, 'id' => $red->id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $red = Flight::find($id);
        return view('flight.unos')->with(['kompanija' => $red->aviokompanija, 'destinacija' => $red->destinacija, 'id' => $red->id]);
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
        $red = Flight::find($id);
        $red->aviokompanija = $request->aviokompanija;
        $red->destinacija = $request->destinacija;
        $red->save();

        echo "Sve 5";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $red = Flight::find($id);
        $red->delete();

        echo "Uspiješno ste izbrisali let sa id-jem $id";
    }
}
