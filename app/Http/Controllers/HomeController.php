<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $maker = Maker::factory()->count(10)->create();
        // dd($maker);

        User::factory()
            ->count(10)
            // ->sequence(
            //     ['name' => 'Zura'],
            //     ['name' => 'John'],
            // )
            ->sequence(fn (Sequence $sequence) => ['name' => 'Name ' . $sequence->index])
            ->create();

        User::factory()
            ->count(10)
            // ->unverified()
            ->trashed() 
            ->create(); 
            
        User::factory()
            ->afterCreating(function (User $user) {
                dump($user);
            })
            ->create();

        Maker::factory()
            ->count(1)
            ->hasModels(1, function(array $attributes, Maker $maker) {
                return [];
            })
            ->create();

        $maker = Maker::factory()->create();

        Model::factory()
            ->count(5)
            ->forMaker(['name' => 'Lexus'])
            ->create();
        
        
        
        // User::factory()
        //     ->count(10)
        //     ->state([
        //         'name' => 'Zura'
        //     ])
        //     ->create();

        // $car = Car::find(1);
        // $carType = CarType::where('name', 'Sedan')->first();
        // $car->car_type_id = $carType->id;
        // $car->save(); 

        // $car->carType()->associate($carType);
        // $car->save();

        // $car = Car::find(1);

        // dd($car->carType);

        // $carType = CarType::where('name', 'Hatchback')->first();
        // $cars = $carType->cars;
        // $cars = Car::whereBelongsTo($carType)->get();

        // dd($cars);

        // $car = Car::find(1);

        // dd($car->features, $car->primaryImage);

        // $car->features->abs = 0;
        // $car->features->save();

        // $car->features->update(['abs' => 0]);

        // $car->primaryImage->delete();

        // $car = Car::find(2);

        // $carFeatures = new CarFeatures ([
        //     'abs' => false,
        //     'air_conditioning' => false,
        //     'power_windows' => false,
        //     'power_door_locks' => false,
        //     'cruise control' => false,
        //     'bluetooth_connectivity' => false,
        //     'remote_start' => false,
        //     'gps navigation' => false,
        //     'heated seats' => false,
        //     'climate control' => false,
        //     'rear parking_sensors' => false,
        //     'leather_seats' => false,
        // ]);

        // $car->features()->save($carFeatures);

        // $car = Car::find(1);

        // // Create new image
        // $image = new CarImage(['image_path' => 'something', 'position' => 2]);
        // $car->images()->save($image);

        // $car->images()->create(['image_path' => 'something', 'position' => 2]);

        // $car->images()->saveMany ( [
        //     new CarImage(['image_path' => 'something', 'position' => 4]),
        //     new CarImage(['image_path' => 'something', 'position' => 5]),
        //     ]); 

        // $car->images ()->createMany ( [
        //     ['image_path' => 'something', 'position' => 6],
        //     ['image_path' => 'something', 'position' => 7],
        //     ]);    

        // $cars = Car::where('price', '>', 20000)->get();
        // dump($cars);

        // $maker = Maker::where('name', 'Toyota')->first();
        // dump($maker);

        // FuelType::create(['name' => 'Electric']);

        // Car::where('id', 1)->update(['price' => 15000]);

        // Car::where('year', '<', 2020)->delete();


        // // Seleect All Cars
        // $cars = Car::get();

        // // Select Published Cars
        // $cars = Car::where('published_at', '!=', null)->get();

        // // Select the first car
        // $car = Car::where('published_at', '!=', null)->first();

        // $car = Car::orderBy('published_at', 'desc')->limit(2)->get();

        // dump($car);


        // $car = new Car();
        // $car->maker_id = 1;
        // $car->model_id = 1;
        // $car->year = 1900;
        // $car->price = 123;
        // $car->vin = 123;
        // $car->mileage = 123;
        // $car->car_type_id = 1;
        // $car->fuel_type_id = 1;
        // $car->user_id = 1;
        // $car->city_id = 1;
        // $car->address = "Lorem ipsum";
        // $car->phone = "123";
        // $car->description = null;
        // $car->published_at = now();
        // $car->save();

        // $carData = [
        //     'maker_id' => 1,
        //     'model_id' => 1,
        //     'year' => 2024,
        //     'price' => 20000,
        //     'vin' => '999',
        //     'mileage' => 5000,
        //     'car_type_id' => 1,
        //     'fuel_type_id' => 1,
        //     'user_id' => 1,
        //     'city_id' => 1,
        //     'address' => 'Something',
        //     'phone' => '999',
        //     'description' => null,
        //     'published_at' => now(),
        // ];

        // // Approach 1
        // $car = Car::create($carData);

        // // Approach 2
        // $car2 = new Car();
        // $car2->fill($carData);
        // $car2->save();

        // // Approach 3
        // $car3 = new Car($carData);
        // $car3->save();

        // $car = Car::find(1);
        // $car->price = 1000;
        // $car->save();

        // Car::updateOrCreate(
        //     ['vin' => '999', 'price' =>20000],
        //     ['price' => 25000]
        // );

        // $car = Car::find(1);
        // $car->delete();

        // Car::destroy(2,3);

        // Car::where('published_at', null)
        //     ->where('user_id', 1)
        //     ->delete();

        // Car::truncate();


        // $car = Car::find(1);
        // dd($car->favouredUsers);

        // $user = User::find(1);
        // dd($user->favouriteCars);

        // $user = User::find(1);
        // $user->favouriteCars()->attach([1,2]);
        // $user->favouriteCars()->sync([3]);

        // $user->favouriteCars()->detach([1, 2]);

        return view('home.index');
    }
}
