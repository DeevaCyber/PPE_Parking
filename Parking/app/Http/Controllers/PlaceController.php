<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index()
    {
      $data = Place::latest()->paginate(5);

      return view('place.index',compact('data'))
            -> with('i',(request()->input('page', 1 )- 1) * 5);
    }

    public function create()
    {
      return view('place.create');
    }

    public function store (Request $request)
    {
      $request->validate([
        'codeplace' => 'required'
      ]);

      Place::create($request->all());

      return redirect()->route('place.index')
                      ->with ('sucess', 'Place created successfully');
    }
    public function show (Place $place)
    {
      return view ('place.show',compact('place'));
    }

    public function edit (Place $place)
    {
      return view('place.edit',compact('place'));
    }
    public function update(Request $request, Place $place)
    {
      $request->validate([
        'codeplace' => 'required'
      ]);

      $place->update($request->all());

      return redirect()->route('place.index')
                      ->with('sucess', 'Place updated successfully');<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}
    }

    public function destroy(Place $place)
    {
      $place->delete();

      return redirect()->route('place.index')
                      ->with('sucess','Place deleted successfully');
    }
}
