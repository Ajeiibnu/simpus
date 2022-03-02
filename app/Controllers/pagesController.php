<?php

namespace App\Controllers;

class pagesController extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function Home()
    {
        return view('home');
    }
    public function DataObat()
    {
        return view('dataObat');
    }

    public function DataObatMasuk()
    {
        return view('DataObatMasuk');
    }

    public function DataObatKeluar()
    {
        return view('DataObatKeluar');
    }
    public function DataObatKadaluarsa()
    {
        return view('DataObatKadaluarsa');
    }
    public function Reports()
    {
        return view('dataReports');
    }
    public function Setting()
    {
        return view('accountSetting');
    }
}
