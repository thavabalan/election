
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>சிறிலங்கா பாராளுமன்ற தேர்தல் - 2020 தமிழீழ முடிவுகள்</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="You can use the progress bars on their own or in combination with other widgets.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="./main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
               <div class="container-fluid">
                   <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                    <div class="text-center">

                                <img src="{{asset('/election/logo.png')}}" class="img-fluid" />
                            </div>

                                    
                        </div><div class="row">
                            <div class="col-sm-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">தமிழீழரீதியான ஒட்டுமொத்த முடிவுகள்</h5>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <img src="{{asset('/election/tnpf.png')}}" class="rounded mx-auto d-block" width="100px" height="100px"/>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text-center">தமிழ் தேசிய மக்கள் முண்ணனி-<b>{{$tnpf}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">
                                                    <div class="text-center"></div>

                                                    <div class="progress-bar progress-bar-animated bg-danger progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnpfpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <img src="{{asset('/election/tna.png')}}" class="rounded mx-auto d-block" width="100px" height="100px"/>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="text-center">தமிழ் தேசிய கூட்டமைப்பு- <b>{{$tna}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress align-self-center">
                                                    

                                                <div class="progress-bar progress-bar-animated bg-warning progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnapervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3">
                                            <img src="{{asset('/election/tla.png')}}" class="rounded mx-auto d-block" width="100px" height="100px"/>
                                            </div>

                                            <div class="col-sm-9">
                                                <div class="text-center">தமிழ் மக்கள் தேசிய கூட்டணி - <b>{{$tla}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">

                                                    <div class="progress-bar progress-bar-animated bg-info progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tlapervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <img src="{{asset('/election/epdp.png')}}" class="rounded mx-auto d-block" width="100px" height="100px"/>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text-center">ஈபிடிபி - <b>{{$epdp}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$epdppervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$epdppervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <img src="{{asset('/election/sjb.png')}}" class="rounded mx-auto d-block" width="100px" height="100px"/>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text-center">ஐக்கிய மக்கள் சக்தி - சிறிலங்கா - <b>{{$sjb}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated  bg-alternate progress-bar-striped" role="progressbar" aria-valuenow="{{$sjbpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$sjbpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <img src="{{asset('/election/unp.png')}}" class="rounded mx-auto d-block" width="100px" height="100px"/>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text-center">ஐக்கிய தேசிய கட்சி - சிறிலங்கா- <b>{{$unp}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="{{$unppervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$unppervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <img src="{{asset('/election/moddu.png')}}" class="rounded mx-auto d-block" width="100px" height="100px"/>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text-center">பொதுசன பெரமுன - சிறிலங்கா- <b>{{$slpp}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-love-kiss progress-bar-striped" role="progressbar" aria-valuenow="{{$slpppervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$slpppervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                            <img src="{{asset('/election/others.png')}}" class="rounded mx-auto d-block" width="100px" height="100px"/>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text-center">ஏனையவை- <b>{{$others}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-dark progress-bar-striped" role="progressbar" aria-valuenow="{{$otherpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$otherpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>  </div></div>            <div class="row">
                            <div class="col-md-4">
                                
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title"> யாழ் மாவட்டம்</h5>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் தேசிய மக்கள் முண்ணனி-<b>{{$tnpfj}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">
                                                    <div class="text-center"></div>

                                                    <div class="progress-bar progress-bar-animated bg-danger progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnpfjpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            

                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் தேசிய கூட்டமைப்பு- <b>{{$tnaj}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress align-self-center">
                                                    

                                                <div class="progress-bar progress-bar-animated bg-warning progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnajpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                           

                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் மக்கள் தேசிய கூட்டணி - <b>{{$tlaj}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">

                                                    <div class="progress-bar progress-bar-animated bg-info progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tlajpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                           
                                            <div class="col-sm-12">
                                                <div class="text-center">ஈபிடிபி - <b>{{$epdpj}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$epdpjpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$epdpjpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஐக்கிய மக்கள் சக்தி - சிறிலங்கா - <b>{{$sjbj}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated  bg-alternate progress-bar-striped" role="progressbar" aria-valuenow="{{$sjbjpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$sjbjpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஐக்கிய தேசிய கட்சி - சிறிலங்கா- <b>{{$unpj}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="{{$unpjpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$unpjpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">பொதுசன பெரமுன - சிறிலங்கா- <b>{{$slppj}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-love-kiss progress-bar-striped" role="progressbar" aria-valuenow="{{$slppjpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$slppjpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஏனையவை- <b>{{$othersj}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-dark progress-bar-striped" role="progressbar" aria-valuenow="{{$otherjpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$otherjpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title"> வன்னி மாவட்டம்</h5>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் தேசிய மக்கள் முண்ணனி-<b>{{$tnpfv}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">
                                                    <div class="text-center"></div>

                                                    <div class="progress-bar progress-bar-animated bg-danger progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnpfvpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            

                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் தேசிய கூட்டமைப்பு- <b>{{$tnav}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress align-self-center">
                                                    

                                                <div class="progress-bar progress-bar-animated bg-warning progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnavpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                           

                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் மக்கள் தேசிய கூட்டணி - <b>{{$tlav}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">

                                                    <div class="progress-bar progress-bar-animated bg-info progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tlavpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                           
                                            <div class="col-sm-12">
                                                <div class="text-center">ஈபிடிபி - <b>{{$epdpv}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$epdpvpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$epdpvpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஐக்கிய மக்கள் சக்தி - சிறிலங்கா - <b>{{$sjbv}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated  bg-alternate progress-bar-striped" role="progressbar" aria-valuenow="{{$sjbvpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$sjbvpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஐக்கிய தேசிய கட்சி - சிறிலங்கா- <b>{{$unpv}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="{{$unpvpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$unpvpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">பொதுசன பெரமுன - சிறிலங்கா- <b>{{$slppv}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-love-kiss progress-bar-striped" role="progressbar" aria-valuenow="{{$slppvpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$slppvpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஏனையவை- <b>{{$othersv}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-dark progress-bar-striped" role="progressbar" aria-valuenow="{{$othervpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$othervpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title"> மட்டக்களப்பு மாவட்டம்</h5>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் தேசிய மக்கள் முண்ணனி-<b>{{$tnpfb}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">
                                                    <div class="text-center"></div>

                                                    <div class="progress-bar progress-bar-animated bg-danger progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnpfbpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            

                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் தேசிய கூட்டமைப்பு- <b>{{$tnab}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress align-self-center">
                                                    

                                                <div class="progress-bar progress-bar-animated bg-warning progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnabpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                           

                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் மக்கள் தேசிய கூட்டணி - <b>{{$tlab}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">

                                                    <div class="progress-bar progress-bar-animated bg-info progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tlabpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                           
                                            <div class="col-sm-12">
                                                <div class="text-center">ஈபிடிபி - <b>{{$epdpb}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$epdpbpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$epdpbpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஐக்கிய மக்கள் சக்தி - சிறிலங்கா - <b>{{$sjbb}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated  bg-alternate progress-bar-striped" role="progressbar" aria-valuenow="{{$sjbbpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$sjbbpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஐக்கிய தேசிய கட்சி - சிறிலங்கா- <b>{{$unpb}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="{{$unpbpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$unpbpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">பொதுசன பெரமுன - சிறிலங்கா- <b>{{$slppb}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-love-kiss progress-bar-striped" role="progressbar" aria-valuenow="{{$slppbpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$slppbpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஏனையவை- <b>{{$othersb}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-dark progress-bar-striped" role="progressbar" aria-valuenow="{{$otherbpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$otherbpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title"> திருகோணமலை மாவட்டம்</h5>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் தேசிய மக்கள் முண்ணனி-<b>{{$tnpft}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">
                                                    <div class="text-center"></div>

                                                    <div class="progress-bar progress-bar-animated bg-danger progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnpftpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            

                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் தேசிய கூட்டமைப்பு- <b>{{$tnat}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress align-self-center">
                                                    

                                                <div class="progress-bar progress-bar-animated bg-warning progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnatpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                           

                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் மக்கள் தேசிய கூட்டணி - <b>{{$tlat}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">

                                                    <div class="progress-bar progress-bar-animated bg-info progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tlatpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                           
                                            <div class="col-sm-12">
                                                <div class="text-center">ஈபிடிபி - <b>{{$epdpt}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$epdptpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$epdptpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஐக்கிய மக்கள் சக்தி - சிறிலங்கா - <b>{{$sjbt}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated  bg-alternate progress-bar-striped" role="progressbar" aria-valuenow="{{$sjbtpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$sjbtpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஐக்கிய தேசிய கட்சி - சிறிலங்கா- <b>{{$unpt}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="{{$unptpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$unptpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">பொதுசன பெரமுன - சிறிலங்கா- <b>{{$slppt}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-love-kiss progress-bar-striped" role="progressbar" aria-valuenow="{{$slpptpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$slpptpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஏனையவை- <b>{{$otherst}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-dark progress-bar-striped" role="progressbar" aria-valuenow="{{$othertpervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$othertpervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                              
                            </div>
                            <div class="col-md-4">
                                
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title"> அம்பாறை மாவட்டம்</h5>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் தேசிய மக்கள் முண்ணனி-<b>{{$tnpfa}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">
                                                    <div class="text-center"></div>

                                                    <div class="progress-bar progress-bar-animated bg-danger progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnpfapervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            

                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் தேசிய கூட்டமைப்பு- <b>{{$tnaa}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress align-self-center">
                                                    

                                                <div class="progress-bar progress-bar-animated bg-warning progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tnaapervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                           

                                            <div class="col-sm-12">
                                                <div class="text-center">தமிழ் மக்கள் தேசிய கூட்டணி - <b>{{$tlaa}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">

                                                    <div class="progress-bar progress-bar-animated bg-info progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: {{$tlaapervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                           
                                            <div class="col-sm-12">
                                                <div class="text-center">ஈபிடிபி - <b>{{$epdpa}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$epdpapervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$epdpapervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஐக்கிய மக்கள் சக்தி - சிறிலங்கா - <b>{{$sjba}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated  bg-alternate progress-bar-striped" role="progressbar" aria-valuenow="{{$sjbapervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$sjbapervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஐக்கிய தேசிய கட்சி - சிறிலங்கா- <b>{{$unpa}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" aria-valuenow="{{$unpapervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$unpapervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">பொதுசன பெரமுன - சிறிலங்கா- <b>{{$slppa}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-love-kiss progress-bar-striped" role="progressbar" aria-valuenow="{{$slppapervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$slppapervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm-12">
                                                <div class="text-center">ஏனையவை- <b>{{$othersa}} வாக்குகள்</b></div><br>

                                                <div class="mb-3 progress">


                                                    <div class="progress-bar progress-bar-animated bg-dark progress-bar-striped" role="progressbar" aria-valuenow="{{$otherapervote}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$otherapervote}}%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
