<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

use App\Http\Requests;
use App\Models\Landing_header;
use App\Models\FirstBlockHeader;
use App\Models\FirstBlockList;
use App\Models\SecondBlockHeader;
use App\Models\SecondBlockList;
use App\Models\ThirdBlockHeader;
use App\Models\ThirdBlockList;
use App\Models\ThirdBlockLink;
use App\Models\FourthBlockHeader;
use App\Models\FourthBlockList;
use App\Models\FourthBlockLast;
use App\Models\FifthBlockHeader;
use App\Models\FifthBlockList;
use App\Models\SixthBlockHeader;
use App\Models\SixthBlockList;
use App\Models\SeventhBlockList;
use App\Models\ContactBlockHeader;
use App\Models\Social_network;


class CustomController extends Controller
{
    public function index() {

        $images = Upload::all();

        $homeblock = Landing_header::all();
        $fbh = FirstBlockHeader::all();
        $fbl = FirstBlockList::all();
        $sbh = SecondBlockHeader::all();
        $sbl = SecondBlockList::all();
        $tbh = ThirdBlockHeader::all();
        $tbl = ThirdBlockList::all();
        $tblink = ThirdBlockLink::all();
        $fourthbh = FourthBlockHeader::all();
        $fourthbl = FourthBlockList::all();
        $fourthblast = FourthBlockLast::all();
        $fifthbh = FifthBlockHeader::all();
        $fifthbl = FifthBlockList::all();
        $sixthbh = SixthBlockHeader::all();
        $sixthbl = SixthBlockList::all();
        $seventhbl = SeventhBlockList::all();
        $cbh = ContactBlockHeader::all();
        $sn = Social_network::all();


        return view('custom.app', [
            'images' => $images,
            'homeblock' => $homeblock,
            'fbh' => $fbh,
            'fbl' => $fbl,
            'sbh' => $sbh,
            'sbl' => $sbl,
            'tbh' => $tbh,
            'tbl' => $tbl,
            'tblink' => $tblink,
            'fourthbh' => $fourthbh,
            'fourthbl' => $fourthbl,
            'fourthblast' => $fourthblast,
            'fifthbh' => $fifthbh,
            'fifthbl' => $fifthbl,
            'sixthbh' => $sixthbh,
            'sixthbl' => $sixthbl,
            'seventhbl' => $seventhbl,
            'cbh' => $cbh,
            'sn' => $sn,


        ]);
    }

}
