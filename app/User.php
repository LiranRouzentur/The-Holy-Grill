<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Hash;
use Session;
use Illuminate\Http\Request;
use App\Category;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Str;
use App\Product;
use Cart;
use App\Order;
use App\Http\Controllers\ImageController;

class User extends Model
{
    static public function validate($email, $password)
    {

        $valid = false;

        $user = DB::table('users as u')
            ->join('user_permissions as up', 'u.id', '=', 'up.uid')
            ->join('permissions as p', 'p.id', '=', 'up.pid')
            ->select('u.*', 'p.kind', 'up.pid')
            ->where('u.email', '=', $email)
            ->first();

        if ($user) { // if the email is true

            if (Hash::check($password, $user->password)) { // and if the password is true

                $valid = true;
                Session::put('user_name', $user->name);
                Session::put('user_id', $user->id);
                Session::put('user_image', $user->image);

                Session::flash('sm', 'Welcome back , you are connected !');

                if ($user->kind == 'Admin') {

                    Session::put('is_admin', true);
                }
            }
        }




        return $valid;
    }


    static public function save_new($request)
    {

        $image_name = ImageController::save_image($request, "user-images/");
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->country = $request['country'];
        $user->image = $image_name;

        $user->save();

        DB::table('user_permissions')->insert(
            ['uid' => $user->id, 'pid' => 2]
        );
        Session::put('user_image',$image_name);
        Session::put('user_name', $user->name);
        Session::put('user_id', $user->id);
        Session::flash('sm', 'Welcome, you are signed up !');


    }

}


