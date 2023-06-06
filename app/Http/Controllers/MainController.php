<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Kelompok;
use App\Models\Member;

class MainController extends BaseController
{
    //home page
    public function home(){
        return view('home');
    }

    //dashboard page
    public function dashboard(){
        return view('atur-adil/dashboard-adil');
    }

    //aturacak page
    public function aturacak(){
        return view('atur-acak');
    }

    //contact page
    public function contact(){
        return view('contact');
    }

    //startgroup page
    public function startgroup(){
        return view('atur-adil/make-adil-group');
    }

    //joingroup page
    public function joingroup(){
        return view('atur-adil/join-group');
    }

    //resultgroup page
    public function resultgroup(Request $request){
        //get member by kode and order des by rerata
        $members = Member::where('kode', $request->kode)->orderBy('rerata', 'desc')->get();
        
        //get kelompok by kode
        $kelompok = Kelompok::where('kode', $request->kode)->first();

        //slice array into group
        $students = $members;
        $groupCount = $kelompok->jumlah;

        $groupSize = floor(count($students) / $groupCount);
        $groups = [];

        $currentIndex = 0;
        for ($i = 0; $i < $groupCount; $i++) {
            $groups[$i] = [];

            // Mengisi setiap kelompok dengan siswa secara berurutan
            for ($j = 0; $j < $groupSize; $j++) {
                $groups[$i][] = $students[$currentIndex]->nama;
                $currentIndex++;
            }
        }

        // Memasukkan siswa yang tersisa ke kelompok terakhir
        $remaining = count($students) % $groupCount;
        for ($i = 0; $i < $remaining; $i++) {
            $groups[$i][] = $students[$currentIndex]->nama;
            $currentIndex++;
        }

        $aturacak = false;

        return view('atur-adil/result-group', compact('groups', 'aturacak', 'kelompok', 'members'));
    }

    //formgroup page
    public function formgroup(){
        return view('atur-adil/form-group');
    }

    //store-atur-acak page
    public function storeAturAcak(Request $request){
        //string to array
        $member = explode("\r\n", $request->member);

        //disorder array
        shuffle($member);

        //slice array into group
        $students = $member;
        $groupCount = $request->jumlahKelompok;

        $groupSize = floor(count($students) / $groupCount);
        $groups = [];

        $currentIndex = 0;
        for ($i = 0; $i < $groupCount; $i++) {
            $groups[$i] = [];

            // Mengisi setiap kelompok dengan siswa secara berurutan
            for ($j = 0; $j < $groupSize; $j++) {
                $groups[$i][] = $students[$currentIndex];
                $currentIndex++;
            }
        }

        // Memasukkan siswa yang tersisa ke kelompok terakhir
        $remaining = count($students) % $groupCount;
        for ($i = 0; $i < $remaining; $i++) {
            $groups[$i][] = $students[$currentIndex];
            $currentIndex++;
        }

        $aturacak = true;

        return view('atur-adil/result-group', compact('groups', 'aturacak'));
    }

    //store-atur-adil page
    public function storeAturAdil(Request $request){
        //store data to database kelompok
        $kelompok = new Kelompok;
        $kelompok->nama = $request->judulKelompok;
        $kelompok->jumlah = $request->jumlahKelompok;
        //random kode varchar(10)
        $kelompok->kode = substr(md5(microtime()),rand(0,26),10);
        $kelompok->save();

        //get member by kode and order des by rerata
        $members = Member::where('kode', $kelompok->kode)->orderBy('rerata', 'desc')->get();

        //slice array into group
        $students = $members;
        $groupCount = $request->jumlahKelompok;

        $groupSize = floor(count($students) / $groupCount);
        $groups = [];

        $currentIndex = 0;
        for ($i = 0; $i < $groupCount; $i++) {
            $groups[$i] = [];

            // Mengisi setiap kelompok dengan siswa secara berurutan
            for ($j = 0; $j < $groupSize; $j++) {
                $groups[$i][] = $students[$currentIndex]->nama;
                $currentIndex++;
            }
        }

        // Memasukkan siswa yang tersisa ke kelompok terakhir
        $remaining = count($students) % $groupCount;
        for ($i = 0; $i < $remaining; $i++) {
            $groups[$i][] = $students[$currentIndex]->nama;
            $currentIndex++;
        }

        $aturacak = false;

        return view('atur-adil/result-group', compact('groups', 'aturacak', 'kelompok', 'members'));
    }

    public function joinAturAdil(Request $request){
        //store data to database member
        $member = new Member;
        $member->nama = $request->nama;
        $member->kode = $request->kode;
        $member->rerata = ceil(($request->nilaiUts + $request->nilaiTugas) / 2);
        $member->save();


        return view('atur-adil/form-group');
    }
}
