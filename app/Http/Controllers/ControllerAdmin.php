<?php

namespace App\Http\Controllers;
use App\Models\envent;
use App\Models\book;
use App\Models\pay;
use App\Models\ve;
use App\Models\loaive;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }
    public function loaive()
    {   
        $listloaive=loaive::all();
        return view('admin.ve.loaive')->with( ['listloaive'=>$listloaive]);
    }
    public function themloai()
    {   
        //$listloaive=loaive::all();
        return view('admin.ve.add_loaive');
    }
    public function themloai_db(Request $req)
    {   
        loaive::create([
            'tenloai' => $req->tenloai,
            'giave' => $req->giave,
            
        ]);
        return redirect()->route('loaive')->with('success','Thêm loại thành công!');
    }
    public function xoaloai($id)
    {   
        loaive::destroy($id);
        return redirect()->route('loaive')->with('success','Xóa loại thành công!');
    }
    public function edit_loai($id)
    {   
        $loaive=loaive::find($id);
        return view('admin.ve.edit_loaive')->with(['loaive'=>$loaive]);
    }
    public function edit_loai_db(Request $req, $id)
    {   
        loaive::find($id)->update([
            'tenloai' => $req->tenloai,
            'giave' => $req->giave,
            
        ]);
        return redirect()->route('loaive')->with('success','Cập nhật loại thành công!');
    }
    public function ve()
    {   
        $listve = DB::table('booking')->select()
            ->join('loaive', 'booking.loaive', '=', 'loaive.id')
            ->get();
        //$listve=book::all();
        return view('admin.ve.quanlyve',['listve'=>$listve]);
        //return redirect()->route('adminve')->with( ['listve'=>$listve]);;
    }
    public function vechitiet($id)
    {   
        $thongtinkh=DB::table('booking')->where('id_ve',$id)->first();
        $thongtintt=DB::table('payments')->where('id_ve',$id)->first();
        $thongtinve=DB::table('ve')->where('id_ve',$id)->get();
        //$listve=book::all();
        return view('admin.ve.chitietve',['kh'=>$thongtinkh,'tt'=>$thongtintt,'ve'=>$thongtinve]);
        //return redirect()->route('adminve')->with( ['listve'=>$listve]);;
    }
    public function thanhtoan()
    {   
        //$list_tt = DB::table('payments')->select()
            //->join('booking', 'payments.id_ve', '=', 'booking.id_ve')
            //->join('loaive', 'booking.loaive', '=', 'loaive.id')
            //->get();
        $list_tt=pay::all();
        return view('admin.thanhtoan.lichsuthanhtoan')->with(['list_tt'=>$list_tt]);
    }
    public function users()
    {
        return view('admin.thanhvien.thanhvien');
    }
    public function sukien()
    {   
        $list_entvents=envent::all();
        return view('admin.sukien.sukien',['envent'=>$list_entvents]);
    }
    public function add_sukien()
    {   
        return view('admin.sukien.add_sukien');
    }
    public function add_sukien_db(Request $req)
    {   
        //thêm ảnh
        if ($req-> has('file')) {
            $file = $req-> file; 
            $file_name = $file-> getClientOriginalName();
            $file->move(base_path('public/uploads'),$file_name);
            }
        // thêm vào db
        envent::create([
            'sk_name' => $req->sk_name,
            'sk_price' => $req->sk_price,
            'sk_address' => $req->sk_address,
            'sk_img' => $file_name,
            'sk_detail' => $req->sk_detail,
            'sk_time' => $req->sk_time,
            'sk_status' => '1'
        ]);
        return redirect()->route('admin_sukien');
    }
    public function edit_sukien($id)
    {   
        $envent=envent::find($id);
        return view('admin.sukien.edit_sukien',['envent'=>$envent]);
    }
    public function edit_sukien_db($id ,Request $req )
    {   
        if ($req-> has('file')) {
            $file = $req-> file; 
            $file_name = $file-> getClientOriginalName();
            $file->move(base_path('public/uploads'),$file_name);
            }
        else{
            $envent =envent::find($id);
            $file_name=$envent->sk_img;
        }
        envent::find($id)->update([
            'sk_name' => $req->sk_name,
            'sk_price' => $req->sk_price,
            'sk_address' => $req->sk_address,
            'sk_img' => $file_name,
            'sk_detail' => $req->sk_detail,
            'sk_time' => $req->sk_time,
            'sk_status' => '1'
            
        ]);
        return redirect()->route('admin_sukien');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete_sukien($id)
    {
        envent::destroy($id);
        return redirect()->route('admin_sukien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
