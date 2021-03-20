<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $macchine = Car::all();
        $data = [
          'macchine' => $macchine
        ];
        return view('cars.index', $data);
    }
    public function about()
    {
        return view('about');
    }
    public function home()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
          'modello' => 'required|unique:cars|max:255',
          'marca' => 'required|max:100',
          'colore' => 'required|max:50',
          'prezzo' => 'required|max:6',
          'motore' => 'required|max:50',
        ]);
        $newCar = new Car();
        // $newCar->modello = $data['modello'];
        // $newCar->marca = $data['marca'];
        // $newCar->colore = $data['colore'];
        // $newCar->prezzo = $data['prezzo'];
        // $newCar->motore = $data['motore
        $newCar->fill($data);
        $newCar->save();
        return redirect()->route('show', $newCar->find($newCar->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
      if ($car) {
        $data = [
          'macchina' => $car
        ];
        return view('cars.show', $data);
      }
      abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        if ($car) {
          $data = [
            'macchina' => $car
          ];
          return view('cars.edit', $data);
        }
        abort('404');
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
