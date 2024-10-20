<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    public $timestamps = false;

    private static $image, $imageName, $imageExtension, $directory, $logoURL, $iconURL;


    public static function update_info($request)
    {

        $oldlogo = Company::where("key", "logo")->value("value");
        $oldicon = Company::where("key", "icon")->value("value");

        if ($request->file("logo")) {

            if (file_exists($oldlogo)) {
                unlink($oldlogo);
            }

            self::$image           = $request->file("logo");
            self::$imageExtension  = self::$image->getClientOriginalExtension();
            self::$imageName       = time() . "." . self::$imageExtension;
            self::$directory       = "image/logo/";
            self::$image->move(self::$directory, self::$imageName);
            self::$logoURL        = self::$directory . self::$imageName;
        } else {
            self::$logoURL = $oldlogo;
        }


        if ($request->file("icon")) {


            if (file_exists($oldicon)) {
                unlink($oldicon);
            }

            self::$image           = $request->file("icon");
            self::$imageExtension  = self::$image->getClientOriginalExtension();
            self::$imageName       = time() . "." . self::$imageExtension;
            self::$directory       = "image/icon/";
            self::$image->move(self::$directory, self::$imageName);
            self::$iconURL        = self::$directory . self::$imageName;
        } else {
            self::$iconURL = $oldicon;
        }

        Company::where("key", "name")->update(["value" => $request->name]);
        Company::where("key", "mobile")->update(["value" => $request->mobile]);
        Company::where("key", "email")->update(["value" => $request->email]);
        Company::where("key", "address")->update(["value" => $request->address]);
        Company::where("key", "logo")->update(["value" => self::$logoURL]);
        Company::where("key", "icon")->update(["value" => self::$iconURL]);


    }



}
