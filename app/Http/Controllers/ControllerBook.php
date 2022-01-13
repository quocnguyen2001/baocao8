<?php

namespace App\Http\Controllers;
use App\Models\book;
use App\Models\pay;
use App\Models\ve;
use App\Models\loaive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use PDF;
use Carbon\Carbon;
class ControllerBook extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function booking(Request $req)
    {
        //dd($req->all());
        $id_ve=mt_rand(1, 100);
        $giave=loaive::find($req->loaive);
        $tien=($req->soluong)*($giave->giave);
        //$req->session()->put('thanhtoan', $tien);
        $data=$req->all();
        $mes_err=[
            //required
            'soluong.required'=>'Số lượng không được để rỗng',
            'ngaydung.required'=>'Không được để rỗng',
            'hoten.required'=>'Họ tên không được để rỗng',
            'sdt.required'=>'Số điện thoại không được để trống',
            'email.required'=>'Email không được để trống',
            //max
            'soluong.min'=>'Số lượng phải lớn hơn 1',
            

            
        ];
        $validated = $req->validate([
            'soluong' => 'required|min:1',
            'ngaydung' => 'required',
            'hoten' => 'required',
            'sdt' => 'required',
            'email' => 'required'
            
        ],$mes_err);
        book::create([
            'loaive' => $req->loaive,
            'ngaydung' => $req->ngaydung,
            'soluong' => $req->soluong,
            'hoten' => $req->hoten,
            'sdt' => $req->sdt,
            'email' => $req->email,
            'id_ve' => $id_ve,
            
        ]);
        //$value = $req->session()->get('thanhtoan');
        //echo $value;
        //return redirect()->route('thanhtoan',[$tien])->with(['data'=>$data,'tien'=>$tien,'id_ve'=>$id_ve,'sl'=>$req->soluong,'sdt'=>$req->sdt,'email'=>$req->email]);;
        return view('nguoidung.thanhtoan',['data'=>$data,'tien'=>$tien,'id_ve'=>$id_ve,'sl'=>$req->soluong,'sdt'=>$req->sdt,'email'=>$req->email]);
        //print_r($data['soluong']);
    }
    public function pay(Request $req)
    {
        $currentTime = Carbon::now('Asia/Ho_Chi_Minh');
        $date=$currentTime->toDateTimeString();
        //dd($req->all());
        pay::create([
            'name_order' => $req->name_order,
            'stk_payment' => $req->stk_payment,
            'hsd_the' => $req->hsd_the,
            'codeCVV' => $req->codeCVV,
            'id_ve' => $req->id_ve,
            'status' => '1',
            'time' => $date,
            
        ]);
        for($i=0;$i<($req->sl);$i++){
            $mave='DSVE'.''.mt_rand(1,1000);
            ve::create([
                'id_ve' => $req->id_ve,
                'mave' => $mave,
                
                
            ]);
        }
        //$vedat=ve::find($req->id_ve);
        $vedat = DB::table('ve')->where('id_ve',$req->id_ve)->get();
        $data=['hoten'=>$req->name_order,'sdt'=>$req->sdt,'vedat'=>$vedat];
        Mail::send('email.datve',['data'=>$data],function($message){
            $message->from('quocnguyenfpt01@gmail.com',"ĐẦM SEN PARK - ĐẶT VÉ");
            $message->to('quocnguyenfpt01@gmail.com')->subject("Đặt vé thành công");
        });
        $vedat = DB::table('ve')->where('id_ve',$req->id_ve)->get();
        session()->put('id', $req->id_ve);
        session()->put('vedat', $vedat);
        return redirect()->route('tc');
        $req->session()->flush();
        //return view('nguoidung.thanhcong',['vedat'=>$vedat,'id'=>$req->id_ve]);
        //return redirect()->route('tc');
    }
    public function inve($id)
    {   

        $vedat = DB::table('ve')->where('id_ve',$id)->get();
        $pdf = PDF::loadView('pdf.pdf',['vedat'=>$vedat]);
        return $pdf->download('Ve-DamSenPark.pdf');
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
