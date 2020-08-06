<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PartyVote;
class PageController extends Controller
{
    public function index(){
        $tnpf = PartyVote::where('party_id','1')->sum('votes');
        $totlavote = PartyVote::all()->sum('votes');
        if($totlavote != 0) 
        $tnpfpervote = $tnpf/$totlavote*100;
        else
        $tnpfpervote = 0;
        $tna = PartyVote::where('party_id','2')->sum('votes');
        if($totlavote != 0) 

        $tnapervote = $tna/$totlavote*100;
        else
        $tnapervote = 0;
        $tla = PartyVote::where('party_id','3')->sum('votes');
        if($totlavote != 0) 
        $tlapervote = $tla/$totlavote*100;
        else
        $tlapervote = 0;
        $epdp = PartyVote::where('party_id','4')->sum('votes');
        if($totlavote != 0) 
        $epdppervote = $epdp/$totlavote*100;
        else
        $epdppervote = 0;
        $sjb = PartyVote::where('party_id','5')->sum('votes');
        if($totlavote != 0)  

        $sjbpervote = $sjb/$totlavote*100;
        else
        $sjbpervote = 0;
        $slpp = PartyVote::where('party_id','6')->sum('votes');
        if($totlavote != 0)  

        $slpppervote = $slpp/$totlavote*100;
        else
        $slpppervote = 0;
        $slfp = PartyVote::where('party_id','7')->sum('votes');
        if($totlavote != 0)  
        $slfppervote = $slfp/$totlavote*100;
        else
        $slfppervote = 0;
        $others = PartyVote::where('party_id','8')->sum('votes');
        if($totlavote != 0)  
        $otherpervote = $others/$totlavote*100;
        else
        $otherpervote = 0;
        $unp = PartyVote::where('party_id','9')->sum('votes');
        if($totlavote != 0)  

        $unppervote = $unp/$totlavote*100;
        else
        $unppervote = 0;
        $tnpfj = PartyVote::where('party_id','1')->where('district_id','1')->sum('votes');
        $totlavotej = PartyVote::where('district_id','1')->sum('votes');
        if($totlavotej != 0)  

        $tnpfjpervote = $tnpfj/$totlavotej*100;
        else
        $tnpfjpervote = 0;
        $tnaj = PartyVote::where('party_id','2')->where('district_id','1')->sum('votes');
        if($totlavotej != 0)  

        $tnajpervote = $tnaj/$totlavotej*100;
        else
        $tnajpervote = 0;
        $tlaj = PartyVote::where('party_id','3')->where('district_id','1')->sum('votes');
        if($totlavotej != 0)  

        $tlajpervote = $tlaj/$totlavotej*100;
        else
        $tlajpervote = 0;
        $epdpj = PartyVote::where('party_id','4')->where('district_id','1')->sum('votes');
        if($totlavotej != 0)  
        $epdpjpervote = $epdpj/$totlavotej*100;
        else
        $epdpjpervote = 0;
        $sjbj = PartyVote::where('party_id','5')->where('district_id','1')->sum('votes');
        if($totlavotej != 0)  

        $sjbjpervote = $sjbj/$totlavotej*100;
        else
        $sjbjpervote = 0;
        $slppj = PartyVote::where('party_id','6')->where('district_id','1')->sum('votes');
        if($totlavotej != 0)  

        $slppjpervote = $slppj/$totlavotej*100;
        else
        $slppjpervote = 0;

        $slfpj = PartyVote::where('party_id','7')->where('district_id','1')->sum('votes');
        if($totlavotej != 0)  
        $slfpjpervote = $slfpj/$totlavotej*100;
        else
        $slfpjpervote = 0;
        $othersj = PartyVote::where('party_id','8')->where('district_id','1')->sum('votes');
        if($totlavotej != 0)  

        $otherjpervote = $othersj/$totlavotej*100;
        else
        $otherjpervote = 0;
        $unpj = PartyVote::where('party_id','9')->where('district_id','1')->sum('votes');
        if($totlavotej != 0)  

        $unpjpervote = $unpj/$totlavotej*100;
        else
        $unpjpervote = 0;
        $tnpfv = PartyVote::where('party_id','1')->where('district_id','2')->sum('votes');
        $totlavotev = PartyVote::where('district_id','2')->sum('votes');
        if($totlavotev != 0)  

        $tnpfvpervote = $tnpfv/$totlavotev*100;
        
        else
        $tnpfvpervote = 0;

        $tnav = PartyVote::where('party_id','2')->where('district_id','2')->sum('votes');
        if($totlavotev != 0)  

        $tnavpervote = $tnav/$totlavotev*100;
        else
        $tnavpervote = 0;

        $tlav = PartyVote::where('party_id','3')->where('district_id','2')->sum('votes');
        if($totlavotev != 0)  
        $tlavpervote = $tlav/$totlavotev*100;
        else
        $tlavpervote = 0;
        $epdpv = PartyVote::where('party_id','4')->where('district_id','2')->sum('votes');
        if($totlavotev != 0)  
        $epdpvpervote = $epdpv/$totlavotev*100;
        else
        $epdpvpervote = 0;
        $sjbv = PartyVote::where('party_id','5')->where('district_id','2')->sum('votes');
        if($totlavotev != 0)  

        $sjbvpervote = $sjbv/$totlavotev*100;
        else
        $sjbvpervote = 0;
        $slppv = PartyVote::where('party_id','6')->where('district_id','2')->sum('votes');
        if($totlavotev != 0)  

        $slppvpervote = $slppv/$totlavotev*100;
        else
        $slppvpervote = 0;
        $slfpv = PartyVote::where('party_id','7')->where('district_id','2')->sum('votes');
        if($totlavotev != 0) 
        $slfpvpervote = $slfpv/$totlavotev*100;
        else
        $slfpvpervote = 0;
        $othersv = PartyVote::where('party_id','8')->where('district_id','2')->sum('votes');
        if($totlavotev != 0) 
        $othervpervote = $othersv/$totlavotev*100;
            else
            $othervpervote = 0;
        $unpv = PartyVote::where('party_id','9')->where('district_id','2')->sum('votes');
        if($totlavotev != 0) 

        $unpvpervote = $unpv/$totlavotev*100;
        else
            $unpvpervote = 0;
        $tnpfa = PartyVote::where('party_id','1')->where('district_id','3')->sum('votes');
        $totlavotea = PartyVote::where('district_id','3')->sum('votes');
        if($totlavotea != 0)  

        $tnpfapervote = $tnpfa/$totlavotea*100;

        else
        $tnpfapervote = 0;
        $tnaa = PartyVote::where('party_id','2')->where('district_id','3')->sum('votes');
        if($totlavotea != 0)  

        $tnaapervote = $tnaa/$totlavotea*100;
        else
        $tnaapervote = 0;
        $tlaa = PartyVote::where('party_id','3')->where('district_id','3')->sum('votes');
        if($totlavotea != 0)  

        $tlaapervote = $tlaa/$totlavotea*100;
        else
        $tlaapervote = 0;
        $epdpa = PartyVote::where('party_id','4')->where('district_id','3')->sum('votes');
        if($totlavotea != 0) 
        $epdpapervote = $epdpa/$totlavotea*100;
        else
        $epdpapervote = 0;
        $sjba = PartyVote::where('party_id','5')->where('district_id','3')->sum('votes');
        if($totlavotea != 0) 
        $sjbapervote = $sjba/$totlavotea*100;
        else
        $sjbapervote = 0;
        $slppa = PartyVote::where('party_id','6')->where('district_id','3')->sum('votes');
        if($totlavotea != 0) 
        $slppapervote = $slppa/$totlavotea*100;
        else
        $slppapervote = 0;
        $slfpa = PartyVote::where('party_id','7')->where('district_id','3')->sum('votes');
        if($totlavotea != 0) 
        $slfpapervote = $slfpa/$totlavotea*100;
        else
        $slfpapervote = 0;
        $othersa = PartyVote::where('party_id','8')->where('district_id','3')->sum('votes');
        if($totlavotea != 0) 
        $otherapervote = $othersa/$totlavotea*100;
        else
        $otherapervote = 0;
        $unpa = PartyVote::where('party_id','9')->where('district_id','3')->sum('votes');
        if($totlavotea != 0) 
        $unpapervote = $unpa/$totlavotea*100;
        else
        $unpapervote = 0;
        $tnpfb = PartyVote::where('party_id','1')->where('district_id','4')->sum('votes');
        $totlavoteb = PartyVote::where('district_id','4')->sum('votes');
        if($totlavoteb != 0)  

        $tnpfbpervote = $tnpfb/$totlavoteb*100;
        else 
        $tnpfbpervote = 0;
        $tnab = PartyVote::where('party_id','2')->where('district_id','4')->sum('votes');
        if($totlavoteb != 0)  

        $tnabpervote = $tnab/$totlavoteb*100;
        else 
        $tnabpervote = 0;
        $tlab = PartyVote::where('party_id','3')->where('district_id','4')->sum('votes');
        if($totlavoteb != 0)  
        $tlabpervote = $tlab/$totlavoteb*100;
        else 
        $tlabpervote = 0;
        $epdpb = PartyVote::where('party_id','4')->where('district_id','4')->sum('votes');
        if($totlavoteb != 0)  
        $epdpbpervote = $epdpb/$totlavoteb*100;
        else 
        $epdpbpervote = 0;
        $sjbb = PartyVote::where('party_id','5')->where('district_id','4')->sum('votes');
        if($totlavoteb != 0)  

        $sjbbpervote = $sjbb/$totlavoteb*100;
        else 
        $sjbbpervote = 0;
        $slppb = PartyVote::where('party_id','6')->where('district_id','4')->sum('votes');
        if($totlavoteb != 0)  

        $slppbpervote = $slppb/$totlavoteb*100;
        else 
        $slppbpervote = 0;
        $slfpb = PartyVote::where('party_id','7')->where('district_id','4')->sum('votes');
        if($totlavoteb != 0)  

        $slfpbpervote = $slfpb/$totlavoteb*100;
        else 
        $slfpbpervote = 0;
        $othersb = PartyVote::where('party_id','8')->where('district_id','4')->sum('votes');
        if($totlavoteb != 0)  
        $otherbpervote = $othersb/$totlavoteb*100;
        else 
        $otherbpervote = 0;
        $unpb = PartyVote::where('party_id','9')->where('district_id','4')->sum('votes');
        if($totlavoteb != 0)     

        $unpbpervote = $unpb/$totlavoteb*100;
        else 
        $unpbpervote = 0;
        $tnpft = PartyVote::where('party_id','1')->where('district_id','5')->sum('votes');
        $totlavotet = PartyVote::where('district_id','5')->sum('votes');
        if($totlavotet != 0)     
        $tnpftpervote = $tnpfb/$totlavotet*100;  
        else     
        $tnpftpervote = 0;
        
        $tnat = PartyVote::where('party_id','2')->where('district_id','5')->sum('votes');
        if($totlavotet != 0)     

        $tnatpervote = $tnat/$totlavotet*100;
        else     
        $tnatpervote = 0;
        $tlat = PartyVote::where('party_id','3')->where('district_id','5')->sum('votes');
        if($totlavotet != 0) 


        $tlatpervote = $tlat/$totlavotet*100;
        else     
        $tlatpervote = 0;

        $epdpt = PartyVote::where('party_id','4')->where('district_id','5')->sum('votes');
        if($totlavotet != 0) 
        $epdptpervote = $epdpt/$totlavotet*100;
        else     
        $epdptpervote = 0;
        $sjbt = PartyVote::where('party_id','5')->where('district_id','5')->sum('votes');
        if($totlavotet != 0) 
        $sjbtpervote = $sjbt/$totlavotet*100;
                else     
        $sjbtpervote = 0;
       
        $slppt = PartyVote::where('party_id','6')->where('district_id','5')->sum('votes');
        if($totlavotet != 0) 

        $slpptpervote = $slppt/$totlavotet*100;
        else     
        $slpptpervote = 0;
        $slfpt = PartyVote::where('party_id','7')->where('district_id','5')->sum('votes');
        if($totlavotet != 0) 

        $slfptpervote = $slfpt/$totlavotet*100;
        else
        $slfptpervote = 0;

        $otherst = PartyVote::where('party_id','8')->where('district_id','5')->sum('votes');
        if($totlavotet != 0) 

        $othertpervote = $otherst/$totlavotet*100;
        else
        $othertpervote = 0;
        $unpt = PartyVote::where('party_id','9')->where('district_id','5')->sum('votes');
        if($totlavotet != 0) 

        $unptpervote = $unpt/$totlavotet*100;
        else
        $unptpervote = 0;
        return view('welcome',compact('unptpervote','unpt','othertpervote','otherst','slfptpervote','slfpt','slpptpervote','slppt','sjbtpervote','sjbt','epdptpervote','epdpt','tlatpervote','tlat','tnatpervote','tnat','tnpftpervote','tnpft','unpbpervote','unpb','otherbpervote','othersb','slfpbpervote','slfpb','slppbpervote','slppb','sjbbpervote','sjbb','epdpbpervote','epdpb','tlabpervote','tlab','tnab','tnabpervote','tnpfb','tnpfbpervote','unpa','unpapervote','othersa','otherapervote','slfpa','slfpapervote','slppa','slppapervote','epdpa','epdpapervote','sjba','sjbapervote','tnaa','tnaapervote','tlaa','tlaapervote','tnpfa','tnpfapervote','unpv','unpvpervote','tnpfv','tnpfvpervote','tnav','tnavpervote','tlav','tlavpervote','epdpv','epdpvpervote','sjbv','sjbvpervote','slppv','slppvpervote','slfpv','slfpvpervote','othersv','othervpervote','tnpf','tnpfj','tna','tnaj','tla','tlaj','tnpfpervote','tnpfjpervote','tnapervote','tlapervote','epdp','epdppervote','sjb','sjbpervote','slpp','slpppervote','slfp','slfppervote','others','otherpervote','unp','unppervote','tnajpervote','tlajpervote','epdpj','epdpjpervote','sjbj','sjbjpervote','slppj','slppjpervote','slfpj','slfpjpervote','othersj','otherjpervote','unpj','unpjpervote'));
    }
}
