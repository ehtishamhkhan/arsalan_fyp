<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Laravel\Passport\Client;
use ValidateRequests;
use Carbon\Carbon;
use App\User;
use App\Point;
use Illuminate\Support\Str;
use App\PointRoute;
use App\Stop;


class WebAppController extends Controller
{
    public function pointsView()
    {
        $points = DB::select('select points.id,points.vehicle_reg_no,users.name,point_routes.alias from points inner join users on users.id = points.driver_id inner join point_routes on point_routes.id = points.route_id where users.type_id=3');
        //dd($points);
        return view("points", ["points"=>$points]);
    }

    public function addPointsView()
    {
        $drivers = DB::table('users')->where('type_id','3')->get();
        $routes = DB::table('point_routes')->get();
        return view("addpoint", ["drivers"=>$drivers,"routes"=>$routes]);
    }


    public function getcordinates()
    {
        $points = DB::select('select live_lat,live_lng from points');
      //  dd($points);
        return view("map", ["features"=>$points]);
    }

    public function addNewPoint(Request $request)
    {
        // dd($request['vehicle_reg_no']);
        // $point = Point::where([
        //     'vehicle_reg_no',$request['vehicle_reg_no'],
        //     'driver_id',$request['driver_id'],
        //     'route_id',$request['route_id'],
        // ]);



        $point = Point::create([
            'vehicle_reg_no' => $request['vehicle_reg_no'],
            'driver_id' => $request['driver_id'],
            'route_id' => $request['route_id'],
            ]);

            $points = DB::select('select points.id,points.vehicle_reg_no,users.name,point_routes.alias from points inner join users on users.id = points.driver_id inner join point_routes on point_routes.id = points.route_id where users.type_id=3');
            //dd($points);
            return view("points", ["points"=>$points]);
    }




    public function routesView()
    {
        $routes = DB::table('point_routes')->get();
        return view("routes", ["routes"=>$routes]);
    }

    public function addRoutesView()
    {
        return view("addroute");
    }

    public function addNewRoute(Request $request)
    {

        $url = $request['url'];
        $url = (explode("data=",$url));
        $work = (explode("https://www.google.com/maps/dir/",$url[0]));
        $stops = (explode("/",$work[1]));
        $ins = (explode("data=", $request['url']));

        $point = PointRoute::create([
            'alias' => $request['alias'],
            'url' => $ins[0],
            ]);


      for ($x = 0; $x < count($stops)-1; $x++)
      {
          $stop = Stop::where('description',$stops[$x])->get();
          if(count($stop)==0)
          {
              $stop = Stop::create([
                  'description' => $stops[$x],
                  ]);
          }
      }

            $routes = DB::table('point_routes')->get();
            return view("routes", ["routes"=>$routes]);
    }


    public function driversView()
    {
        $users = DB::table('users')->where('type_id','3')->get();
        return view("drivers", ["users"=>$users]);
    }

    public function addDriversView()
    {
        return view('adddriver');
    }

    public function addNewDriver(Request $request)
    {
        $user = User::create([
            'user_id' => $request['user_id'],
            'type_id' => 3,
            'name' => $request['name'],
            'password' => $request['password'],
            'contact' => $request['contact'],
            'email' => $request['user_id'].'@pafkiet.edu.pk',
            ]);

            $users = DB::table('users')->where('type_id','3')->get();
            return view("drivers", ["users"=>$users]);
    }



    public function studentsView()
    {
        $users = DB::table('users')->where('type_id','2')->get();
        return view("students", ["users"=>$users]);
    }


    public function addStudentsView()
    {
        return view('addstudent');
    }


    public function addNewStudent(Request $request)
    {
        $user = User::create([
            'user_id' => $request['user_id'],
            'type_id' => 2,
            'name' => $request['name'],
            'password' => $request['password'],
            'contact' => $request['contact'],
            'email' => $request['user_id'].'@pafkiet.edu.pk',
            ]);

            $users = DB::table('users')->where('type_id','2')->get();
            return view("students", ["users"=>$users]);
    }


}
