<?php

namespace App\Http\Controllers;

use App\Mail\MailBack;
use App\Models\Admin;
use App\Models\Newspaper;
use App\Models\Title;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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


        $data = Newspaper::TitleFiler($title_id)->Search("%$search%")->orderBy("created_at", "desc")->paginate(20);

        return view('admin.newspaper.list', compact('data', 'title'));
    }


    public function create(Newspaper $newspaper)
    {

        $title = Title::all();
        $author =DB::table('users')
            ->leftJoin('admins', 'users.id', '=', 'admins.user_id')
            ->where('role','=','PV')
            ->get();


        return view('admin.newspaper.create', compact('title', 'author','newspaper'));
    }


    public function save(Request $request)
    {

        $request->validate([

            'name' => 'required|string|min:6',
            'content' => 'required',
            'title_id' => 'required',
            'author_id' => 'required',
            'description' => 'required|string|min:50',
            "image" => "nullable|image|mimes:jpg,png,jpeg",

        ], [

                'required' => 'Vui lòng nhập nội dung',
                "string" => "Phải nhập vào là một chuỗi văn bản",
                "min" => "Phải nhập :attribute  tối thiểu :min",
                'image:nullable' => "image null",
                'image:image' => " image",
                'image:mimes' => "type",


            ]
        );



        $data = $request->get('content');
        $name = $request->get('name');
        $title = $request->get('title_id');
        $description = $request->get('description');
        $author_id = $request->get('author_id');

        $nxb = $request->get('nxb_date');
        $status = 1;
        $publish_date = null;


        if ($nxb === '0'){
            $status = 1;
            $publish_date = null;
        }else if ($nxb === '1'){
            $status =3;
            $publish_date =  Carbon::now('Asia/Ho_Chi_Minh');
        }else if ($nxb === '2'){

            $status = 2;
            $publish_date = $request->get('publish_date');
        }

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
            Newspaper::create
            ([
                'name' => $name,
                'content' => $data,
                'title_id' => $title,
                'user_id' => $author_id,
                'slug' => $slug,
                'image' => $image,
                'description' => $description,
                'status'=>$status,
                'publish_date'=>$publish_date

            ]);



            return redirect()->to('/admin/newspaper/list');

        } catch (\Throwable $e) {

            return redirect()->back()->with("error", $e->getMessage());
        }


    }

    public function choDuyet(Request $request)
    {
        $search = $request->get('search');
        $title_id = $request->get('title_id');


        $title = Title::all();


        $data = Newspaper::where('status', '=', '1')->TitleFiler($title_id)->Search("%$search%")->orderBy("id", "asc")->paginate(10);

        return view('admin.newspaper.choDuyet', compact('data', 'title'));
    }


    public function details(Newspaper $newspaper)
    {


        return view('admin.newspaper.details', compact('newspaper'));

    }



    public function duyetBai(Newspaper $newspaper)
    {


        $newspaper->update([
            'status' => 2
        ]);

        return redirect()->to('/admin/newspaper/list');

    }

    public function khongDuyetBai(Newspaper $newspaper)
    {
        $mail =$newspaper->User->email;

        Mail::to($mail)->send(new MailBack());

        return redirect()->to('/admin/newspaper/list');

    }






//
//
//   public function update(Newspaper $newspaper){
//
//
//   }


}
