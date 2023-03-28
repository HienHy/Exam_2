<?php

namespace App\Http\Controllers;

use App\Mail\MailBack;
use App\Models\Newspaper;
use App\Models\Title;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class NewspaperControllner extends Controller
{
    //

    public function list(Request $request)
    {
        $search = $request->get('search');
        $title_id = $request->get('title_id');


        $title = Title::all();


        $data = Newspaper::where('status', '=', '1')->TitleFiler($title_id)->Search("%$search%")->orderBy("id", "desc")->paginate(20);

        return view('admin.newspaper.list', compact('data', 'title'));
    }
    public function list1(Request $request)
    {
        $search = $request->get('search');
        $title_id = $request->get('title_id');


        $title = Title::all();


        $data = Newspaper::where('status', '=', '3')->TitleFiler($title_id)->Search("%$search%")->orderBy("id", "desc")->paginate(20);

        return view('admin.newspaper.da-xuat-ban', compact('data', 'title'));
    }




    public function create(Request $request)
    {

        $title = Title::all();


        return view('admin.newspaper.create', compact('title'));
    }


    public function save(Request $request)
    {
//dd(    php_ini_loaded_file());
        $request->validate([

            'name' => 'required|string|min:6',
            'content' => 'required',
            'title_id' => 'required',
            "image" => "nullable|image|mimes:jpg,png,jpeg",

        ], [

                'required' => 'Vui lòng nhập nội dung',
                "string" => "Phải nhập vào là một chuỗi văn bản",
                "min" => "Phải nhập :attribute  tối thiểu :min",
                'image:nullable'=>"image null",
                'image:image'=>" image",
                'image:mimes'=>"type",



            ]
        );


        $data = $request->get('content');
        $name = $request->get('name');
        $title = $request->get('title_id');
        $user = auth()->user();

        $slug = Str::slug($request->name) . random_int(1, 1000);


        try {
            $image = null;
            if ($request->hasFile("image")) {
                $file = $request->file("image");
                $fileName = time() . $file->getClientOriginalName();
                //            $ext = $file->getClientOriginalExtension();
                //            $fileName = time().".".$ext;
                $path = public_path("uploads");
                $file->move($path, $fileName);
                $image = "uploads/" . $fileName;
            }
//dd($user);
            Newspaper::create
            ([
                'name' => $name,
                'content' => $data,
                'title_id' => $title,
                'user_id' => $user->id,
                'slug' => $slug,
                'image' => $image,

            ]);



            return redirect()->to('/admin/newspaper/create');

        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }

    }

    public function choDuyet(Request $request)
    {
        $search = $request->get('search');
        $title_id = $request->get('title_id');


        $title = Title::all();


        $data = Newspaper::where('status', '=', '0')->TitleFiler($title_id)->Search("%$search%")->orderBy("id", "asc")->paginate(10);

        return view('admin.newspaper.choDuyet', compact('data', 'title'));
    }


    public function details(Newspaper $newspaper)
    {


        return view('admin.newspaper.chi-tiet-duyet', compact('newspaper'));

    }
    public function details1(Newspaper $newspaper)
    {


        return view('admin.newspaper.details1', compact('newspaper'));

    }

    public function duyetBai(Newspaper $newspaper)
    {


        $newspaper->update([
            'status' => 1
        ]);

        return redirect()->to('/admin/newspaper/list');

    }

    public function khongDuyetBai(Newspaper $newspaper){

        Mail::to(auth()->user()->email)->send(new MailBack());

        return redirect()->to('/admin/newspaper/list');

    }


    public  function xuatBanNgay(Newspaper $newspaper){

        $publish_date = Carbon::now('Asia/Ho_Chi_Minh');
        $newspaper->update([
            'status' => 3,
            'publish_date'=>$publish_date
        ]);
        return redirect()->to('/admin/newspaper/da-xuat-ban');

    }

    public function lenlichxuatban(Newspaper $newspaper,Request $request){

        $data =$request->get('publish_date');

        $newspaper->update([
           'publish_date'=>$data
        ]);
        return redirect()->to('/admin/newspaper/da-xuat-ban');

    }



//
//
//   public function update(Newspaper $newspaper){
//
//
//   }


}
