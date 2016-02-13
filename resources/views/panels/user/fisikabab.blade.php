@extends('layouts.main')

@section('head')
<link rel="stylesheet" href="/assets/css/konten/fullpage.css" media="screen" title="no title" charset="utf-8">
@stop

@section('content')
<div id="wrapper">

        <!-- Sidebar Left-->
        <div id="sidebar-wrapper" class="fixed-position">
            <div class="button-tahun button-wrapper">
                <a href="#" class=""><i class="fa fa-youtube-play"></i></a>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    FISIKA
                </li>
                <li>
                    <a href="#pendahuluan">Pendahuluan</a>
                </li>
                <li><a href="#dinamikageraklurus">Dinamika Gerak Lurus</a></li>
                <li><a href="#dinamikarotasi">Dinamika Rotasi</a></li>
                <li><a href="#fisikamodern">Fisika Modern</a></li>
                <li><a href="#fluida">Fluida</a></li>
                <li><a href="#getarangelombangbunyi">Getaran,Gelombang dan Bunyi</a></li>
                <li><a href="#induksimagnetikdanarusteganganbolakbalik">Induksi Magnetik Dan Arus Tegangan Bolak-Balik</a></li>
                <li><a href="#kinematikageraklurus">Kinematika Gerak Lurus</a></li>
                <li><a href="#listrik">Listrik</a></li>
                <li><a href="#momentumdanimpuls">Momentum Dan Impuls</a></li>
                <li><a href="#optik">Optik</a></li>
                <li><a href="#suhudankalor">Suhu Dan Kalor</a></li>
                <li><a href="#usahadanenergi">Usaha Dan Energi</a></li>


            </ul>
        </div>
        <section class="full-page-coba" id="pendahuluan">
        <div id="page-content-wrapper konten-nav">
            <div class="container-fluid">

              <div class="row">
                  <div class="col-md-12">
                    <br>
                    <br>
                      <h3 class="text-center">Pendahuluan</h3>
                      <iframe class="video-materi center-block" width="560" height="315" src="https://www.youtube.com/embed/QSiNWEsZGRI" frameborder="0" allowfullscreen></iframe>
                  </div>
              </div>
              {{-- <div class="row">
                  <div class="col-md-12">
                      <div class="bab">

                          <div class="isi-bab text-center">
                          <hr>
                              <a class="tombolbab" href="#">bab 1</a>
                              <a class="tombolbab" href="#">bab 1</a>
                              <a class="tombolbab" href="#">bab 1</a>
                              <a class="tombolbab" href="#">bab 1</a>
                          </div>
                      </div>
                  </div>
              </div> --}}

            </div>
        </div>
        </section>

        <section class="full-page-coba" id="dinamikageraklurus">
        <div id="page-content-wrapper">
            <div class="container-fluid">

              <div class="row">
                  <div class="col-md-12">
                    <br>
                    <br>
                      <h3 class="text-center">dinamikageraklurus</h3>
                      <div  id="dinamikageraklurusbab1">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/VMFGXVoSpBs" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab2">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/PfSYbNkDfjs" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab3">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/KBX6eKiY4ro" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab4">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/R5sHLj7gSf4" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab5">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/L4M8sYdmLXg" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab6">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/bssHbdzUTnI" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab7">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/DAha3_7CXA4" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikageraklurusbab8">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/lWzWbGd0KrU" frameborder="0" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="bab">

                          <div class="isi-bab text-center">
                          <hr>
                              <a id="dinamikageraklurustombolbab1" href="#">bab 1</a>
                              <a id="dinamikageraklurustombolbab2" href="#">bab 2</a>
                              <a id="dinamikageraklurustombolbab3" href="#">bab 3</a>
                              <a id="dinamikageraklurustombolbab4" href="#">bab 4</a>
                              <a id="dinamikageraklurustombolbab5" href="#">bab 5</a>
                              <a id="dinamikageraklurustombolbab6" href="#">bab 6</a>
                              <a id="dinamikageraklurustombolbab7" href="#">bab 7</a>
                              <a id="dinamikageraklurustombolbab8" href="#">bab 8</a>

                          </div>
                      </div>
                  </div>
              </div>

            </div>
        </div>
        </section>

        <section class="full-page-coba" id="dinamikarotasi">
        <div id="page-content-wrapper">
            <div class="container-fluid">

              <div class="row">
                  <div class="col-md-12">
                    <br>
                    <br>
                      <h3 class="text-center">dinamikarotasi</h3>
                      <div  id="dinamikarotasibab1">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/wq28CC448Xg" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab2">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/b5SCOTZ52JU" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab3">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/BjMalgw5Xfg" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab4">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/W-CmzO1Pib8" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab5">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/sOVFcsYauAg" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab6">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/udmNF77MpQM" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab7">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/_4EFu49V-A0" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab8">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/r4AZJtFbEoo" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab9">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/AgELhVO881o" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="dinamikarotasibab10">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/dbW8nA-yzRc" frameborder="0" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="bab">

                          <div class="isi-bab text-center">
                          <hr>
                          <a id="dinamikarotasitombolbab1" href="#">bab 1</a>
                          <a id="dinamikarotasitombolbab2" href="#">bab 2</a>
                          <a id="dinamikarotasitombolbab3" href="#">bab 3</a>
                          <a id="dinamikarotasitombolbab4" href="#">bab 4</a>
                          <a id="dinamikarotasitombolbab5" href="#">bab 5</a>
                          <a id="dinamikarotasitombolbab6" href="#">bab 6</a>
                          <a id="dinamikarotasitombolbab7" href="#">bab 7</a>
                          <a id="dinamikarotasitombolbab8" href="#">bab 8</a>
                          <a id="dinamikarotasitombolbab9" href="#">bab 9</a>
                          <a id="dinamikarotasitombolbab10" href="#">bab 10</a>
                          </div>
                      </div>
                  </div>
              </div>

            </div>
        </div>
        </section>

        <section class="full-page-coba" id="fisikamodern">
        <div id="page-content-wrapper">
            <div class="container-fluid">

              <div class="row">
                  <div class="col-md-12">
                    <br>
                    <br>
                      <h3 class="text-center">fisikamodern</h3>
                      <div  id="fisikamodernbab1">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RvyoKZ0yxAg" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab2">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/6GIjU9IYLxA" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab3">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/hWxyAOh4n9A" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab4">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/1dJkD6RO9Ho" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab5">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/LftSXl1dQ7U" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab6">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/vgJLhsg8NTE" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab7">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/IDKGPW6t4ic" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab8">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/oB_4UIrTqKs" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab9">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/KKQy74JqN7w" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab10">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/xjXIdQ8tFsY" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab11">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/CWWgECHpQLM" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab12">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/vq4XPRU44a0" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab13">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/0sb0zSKoioE" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab14">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/Ae1Djo5E61w" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab15">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/PZgBuNXn2fo" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab16">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/i16ykvzyn-Q" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab17">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/csX_3AuipVs" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab18">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/634yzkHeLYw" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab19">
                        <iframe width="420" height="315" src="https://www.youtube.com/embed/SrBzb1I3I7E" frameborder="0" allowfullscreen></iframe>
                      </div>
                      <div  id="fisikamodernbab20">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/kPAqP_ugSps" frameborder="0" allowfullscreen></iframe>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="bab">

                          <div class="isi-bab text-center">
                          <hr>
                          <a id="fisikamoderntombolbab1" href="#">bab 1</a>
                          <a id="fisikamoderntombolbab2" href="#">bab 2</a>
                          <a id="fisikamoderntombolbab3" href="#">bab 3</a>
                          <a id="fisikamoderntombolbab4" href="#">bab 4</a>
                          <a id="fisikamoderntombolbab5" href="#">bab 5</a>
                          <a id="fisikamoderntombolbab6" href="#">bab 6</a>
                          <a id="fisikamoderntombolbab7" href="#">bab 7</a>
                          <a id="fisikamoderntombolbab8" href="#">bab 8</a>
                          <a id="fisikamoderntombolbab9" href="#">bab 9</a>
                          <a id="fisikamoderntombolbab10" href="#">bab 10</a>
                          <a id="fisikamoderntombolbab11" href="#">bab 11</a>
                          <a id="fisikamoderntombolbab12" href="#">bab 12</a>
                          <a id="fisikamoderntombolbab13" href="#">bab 13</a>
                          <a id="fisikamoderntombolbab14" href="#">bab 14</a>
                          <a id="fisikamoderntombolbab15" href="#">bab 15</a>
                          <a id="fisikamoderntombolbab16" href="#">bab 16</a>
                          <a id="fisikamoderntombolbab17" href="#">bab 17</a>
                          <a id="fisikamoderntombolbab18" href="#">bab 18</a>
                          <a id="fisikamoderntombolbab19" href="#">bab 19</a>
                          <a id="fisikamoderntombolbab20" href="#">bab 20</a>
                          </div>
                      </div>
                  </div>
              </div>

            </div>
        </div>
        </section>

        <section class="full-page-coba" id="fluida">
        <div id="page-content-wrapper">
          <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                  <br>
                  <br>
                    <h3 class="text-center">fluida</h3>

                    <div  id="fluidabab1">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/drj-P9TqE_g" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="fluidabab2">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/8LBmsTc4DGs" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="fluidabab3">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/5AvIWPF-gkU" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="fluidabab4">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/v1unDUbckL0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="fluidabab5">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/dhmIFbx_xis" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="fluidabab6">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/yU7lRWuPq1Y" frameborder="0" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bab">

                        <div class="isi-bab text-center">
                        <hr>
                        <a id="fluidatombolbab1" href="#">bab 1</a>
                        <a id="fluidatombolbab2" href="#">bab 2</a>
                        <a id="fluidatombolbab3" href="#">bab 3</a>
                        <a id="fluidatombolbab4" href="#">bab 4</a>
                        <a id="fluidatombolbab5" href="#">bab 5</a>
                        <a id="fluidatombolbab6" href="#">bab 6</a>

                        </div>
                    </div>
                </div>
            </div>

          </div>
        </div>
        </section>

        <section class="full-page-coba" id="getarangelombangbunyi">
        <div id="page-content-wrapper">
          <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                  <br>
                  <br>
                    <h3 class="text-center">getarangelombangbunyi</h3>
                    <div  id="getarangelombangbunyibab1">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/RJ3rcu7IfuM" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab2">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/Tr4S-XeeKdU" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab3">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/CZ27e6TeTxs" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab4">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/sZMZoZ4L-Rc" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab5">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/rTPxpM3kl7Y" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab6">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/UxK-SBzbsjw" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab7">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/G_kzwtCluTU" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab8">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/7zI4jM-QPGk" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab9">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/d4yVkAr0Z4Q" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab10">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/xKW5SiGhVkA" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab11">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/ev-maba0gSE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab12">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/cW3Qc0CpsKg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab13">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/UYpxuwJ_jZE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab14">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/OcXEHNmxUJQ" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab15">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/bIxjVYMXs5Y" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab16">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/s-uhzImHTZg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab17">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/OfBrEWax84w" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="getarangelombangbunyibab18">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/TtALsZ46Hvs" frameborder="0" allowfullscreen></iframe>
                    </div>

            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bab">

                        <div class="isi-bab text-center">
                        <hr>
                        <a id="getarangelombangbunyitombolbab1" href="#">bab 1</a>
                        <a id="getarangelombangbunyitombolbab2" href="#">bab 2</a>
                        <a id="getarangelombangbunyitombolbab3" href="#">bab 3</a>
                        <a id="getarangelombangbunyitombolbab4" href="#">bab 4</a>
                        <a id="getarangelombangbunyitombolbab5" href="#">bab 5</a>
                        <a id="getarangelombangbunyitombolbab6" href="#">bab 6</a>
                        <a id="getarangelombangbunyitombolbab7" href="#">bab 7</a>
                        <a id="getarangelombangbunyitombolbab8" href="#">bab 8</a>
                        <a id="getarangelombangbunyitombolbab9" href="#">bab 9</a>
                        <a id="getarangelombangbunyitombolbab10" href="#">bab 10</a>
                        <a id="getarangelombangbunyitombolbab11" href="#">bab 11</a>
                        <a id="getarangelombangbunyitombolbab12" href="#">bab 12</a>
                        <a id="getarangelombangbunyitombolbab13" href="#">bab 13</a>
                        <a id="getarangelombangbunyitombolbab14" href="#">bab 14</a>
                        <a id="getarangelombangbunyitombolbab15" href="#">bab 15</a>
                        <a id="getarangelombangbunyitombolbab16" href="#">bab 16</a>
                        <a id="getarangelombangbunyitombolbab17" href="#">bab 17</a>
                        <a id="getarangelombangbunyitombolbab18" href="#">bab 18</a>

                        </div>
                    </div>
                </div>
            </div>

          </div>
          </div>
        </section>

        <section class="full-page-coba" id="induksimagnetikdanarusteganganbolakbalik">
        <div id="page-content-wrapper">
          <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                  <br>
                  <br>
                    <h3 class="text-center">induksimagnetikdanarusteganganbolakbalik</h3>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab1">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/UA5GOm2YuBc" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab2">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/KnZKU2FaQHg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab3">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/4Ws3dN1AiAU" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab4">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/ugHG3d8e9bo" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab5">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/OBXdsyP6cXQ" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab6">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/6-34WInJePg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab7">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/f9NwxZ6qZ0o" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab8">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/5kvFQ8RA-0w" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab9">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/LhD9DJqr8-g" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab10">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/GybsNKct-r0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab11">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/N__SHei9D_I" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab12">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/PQplYVfl3Us" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="induksimagnetikdanarusteganganbolakbalikbab13">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/WQygcf0wdP4" frameborder="0" allowfullscreen></iframe>
                    </div>

            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bab">

                        <div class="isi-bab text-center">
                        <hr>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab1" href="#">bab 1</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab2" href="#">bab 2</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab3" href="#">bab 3</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab4" href="#">bab 4</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab5" href="#">bab 5</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab6" href="#">bab 6</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab7" href="#">bab 7</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab8" href="#">bab 8</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab9" href="#">bab 9</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab10" href="#">bab 10</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab11" href="#">bab 11</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab12" href="#">bab 12</a>
                        <a id="induksimagnetikdanarusteganganbolakbaliktombolbab13" href="#">bab 13</a>

                        </div>
                    </div>
                </div>
            </div>

          </div>
          </div>
        </section>

        <section class="full-page-coba" id="kinematikageraklurus">
        <div id="page-content-wrapper">
          <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                  <br>
                  <br>
                    <h3 class="text-center">kinematikageraklurus</h3>
                    <div  id="kinematikageraklurusbab1">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/UyakJC0EPVI" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="kinematikageraklurusbab2">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/Skcu_EOrC10" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="kinematikageraklurusbab3">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/BuPOS6PUY9E" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="kinematikageraklurusbab4">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/vplgJ5Y4AG8" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="kinematikageraklurusbab5">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/NRpZx4zPryg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="kinematikageraklurusbab6">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/Pnze0Ogoh70" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="kinematikageraklurusbab7">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/To1yuoMSe4s" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="kinematikageraklurusbab8">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/cdCjHhyKwrg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="kinematikageraklurusbab9">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/l10pMaHnQ2c" frameborder="0" allowfullscreen></iframe>
                    </div>

            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bab">

                        <div class="isi-bab text-center">
                        <hr>
                        <a id="kinematikageraklurustombolbab1" href="#">bab 1</a>
                        <a id="kinematikageraklurustombolbab2" href="#">bab 2</a>
                        <a id="kinematikageraklurustombolbab3" href="#">bab 3</a>
                        <a id="kinematikageraklurustombolbab4" href="#">bab 4</a>
                        <a id="kinematikageraklurustombolbab5" href="#">bab 5</a>
                        <a id="kinematikageraklurustombolbab6" href="#">bab 6</a>
                        <a id="kinematikageraklurustombolbab7" href="#">bab 7</a>
                        <a id="kinematikageraklurustombolbab8" href="#">bab 8</a>
                        <a id="kinematikageraklurustombolbab9" href="#">bab 9</a>

                        </div>
                    </div>
                </div>
            </div>

          </div>
          </div>
        </section>

        <section class="full-page-coba" id="listrik">
        <div id="page-content-wrapper">
          <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                  <br>
                  <br>
                    <h3 class="text-center">listrik</h3>
                    <div  id="listrikbab1">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/XtQZH36NCK0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab2">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/4WjxZE4xGeU" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab3">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/rreDwnA5nyA" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab4">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/pjbxM0KVDXg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab5">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/PFppz3_5MDc" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab6">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/Q2GYmAd56D0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab7">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/AIS8gUX0cos" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab8">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/I4EiU-wIJYk" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab9">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/RrIXzXdLn7I" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab10">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/6WgG180Qb8U" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab11">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/u2x-G_t44nM" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab12">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/6WgG180Qb8U" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab13">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/nn4uCwnk_yA" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab14">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/LOepxuzjhPw" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab15">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/4kt2czT28vg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab16">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/hlwKjqit0WA" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab17">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/6Ec1dr7FNP8" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab18">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/TtALsZ46Hvs" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="listrikbab19">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/9blkipBAtgM" frameborder="0" allowfullscreen></iframe>
                    </div>

            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bab">

                        <div class="isi-bab text-center">
                        <hr>
                        <a id="listriktombolbab1" href="#">bab 1</a>
                        <a id="listriktombolbab2" href="#">bab 2</a>
                        <a id="listriktombolbab3" href="#">bab 3</a>
                        <a id="listriktombolbab4" href="#">bab 4</a>
                        <a id="listriktombolbab5" href="#">bab 5</a>
                        <a id="listriktombolbab6" href="#">bab 6</a>
                        <a id="listriktombolbab7" href="#">bab 7</a>
                        <a id="listriktombolbab8" href="#">bab 8</a>
                        <a id="listriktombolbab9" href="#">bab 9</a>
                        <a id="listriktombolbab10" href="#">bab 10</a>
                        <a id="listriktombolbab11" href="#">bab 11</a>
                        <a id="listriktombolbab12" href="#">bab 12</a>
                        <a id="listriktombolbab13" href="#">bab 13</a>
                        <a id="listriktombolbab14" href="#">bab 14</a>
                        <a id="listriktombolbab15" href="#">bab 15</a>
                        <a id="listriktombolbab16" href="#">bab 16</a>
                        <a id="listriktombolbab17" href="#">bab 17</a>
                        <a id="listriktombolbab18" href="#">bab 18</a>
                        <a id="listriktombolbab19" href="#">bab 19</a>
                        </div>
                    </div>
                </div>
            </div>

          </div>
          </div>
        </section>

        <section class="full-page-coba" id="momentumdanimpuls">
        <div id="page-content-wrapper">
          <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                  <br>
                  <br>
                    <h3 class="text-center">momentumdanimpuls</h3>
                    <div  id="momentumdanimpulsbab1">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/1a-gcd_VU5k" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="momentumdanimpulsbab2">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/pP1UcsQF7lc" frameborder="0" allowfullscreen></iframe>
                    </div>

            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bab">

                        <div class="isi-bab text-center">
                        <hr>
                        <a id="momentumdanimpulstombolbab1" href="#">bab 1</a>
                        <a id="momentumdanimpulstombolbab2" href="#">bab 2</a>

                        </div>
                    </div>
                </div>
            </div>

          </div>
          </div>
        </section>

        <section class="full-page-coba" id="optik">
        <div id="page-content-wrapper">
          <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                  <br>
                  <br>
                    <h3 class="text-center">optik</h3>
                    <div  id="optikbab1">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/IRk0MPl6gjE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab2">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/tCG_GLIDVvQ" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab3">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/_jtVbLHDb-w" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab4">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/qg2TTLW-vr0" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab5">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/4IkZ6_AFRyI" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab6">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/x3dyIFI0oic" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab7">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/K-eSP2uhv4E" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab8">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/0zk_OC2UECs" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab9">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/TNEl-W2nqbA" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab10">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/u7H7WArQanE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab11">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/fb_sbU8yQZM" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab12">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/LLUrygYj4f4" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab13">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/fQhNZqD-F5s" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab14">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/6-lRUQp47Lo" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab15">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/zli_K-ZG-iI" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab16">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/k2msLFIet9k" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="optikbab17">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/Y0bc10UUMzI" frameborder="0" allowfullscreen></iframe>
                    </div>

            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bab">

                        <div class="isi-bab text-center">
                        <hr>
                        <a id="optiktombolbab1" href="#">bab 1</a>
                        <a id="optiktombolbab2" href="#">bab 2</a>
                        <a id="optiktombolbab3" href="#">bab 3</a>
                        <a id="optiktombolbab4" href="#">bab 4</a>
                        <a id="optiktombolbab5" href="#">bab 5</a>
                        <a id="optiktombolbab6" href="#">bab 6</a>
                        <a id="optiktombolbab7" href="#">bab 7</a>
                        <a id="optiktombolbab8" href="#">bab 8</a>
                        <a id="optiktombolbab9" href="#">bab 9</a>
                        <a id="optiktombolbab10" href="#">bab 10</a>
                        <a id="optiktombolbab11" href="#">bab 11</a>
                        <a id="optiktombolbab12" href="#">bab 12</a>
                        <a id="optiktombolbab13" href="#">bab 13</a>
                        <a id="optiktombolbab14" href="#">bab 14</a>
                        <a id="optiktombolbab15" href="#">bab 15</a>
                        <a id="optiktombolbab16" href="#">bab 16</a>
                        <a id="optiktombolbab17" href="#">bab 17</a>

                        </div>
                    </div>
                </div>
            </div>

          </div>
          </div>
        </section>

        <section class="full-page-coba" id="suhudankalor">
        <div id="page-content-wrapper">
          <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                  <br>
                  <br>
                    <h3 class="text-center">suhudankalor</h3>
                    <div  id="suhudankalorbab1">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/tXL5tygN41g" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab2">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/fa48ic1Gb7Q" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab3">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/-zKxP69llIE" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab4">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/2j7m57kJMlQ" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab5">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/Mz6idUJzvJ4" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab6">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/zvMNxIOqLZg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab7">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/sZMZoZ4L-Rc" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab8">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/FUAfVm78l4E" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab9">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/amb1uP4FgyA" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab10">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/F3NDvJgw4H4" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab11">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/uHBIhNV1xds" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab12">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/NzkULACmwug" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab13">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/9qL-gB7pdYo" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab14">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/BioKM1-N7T4" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab15">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/3sLh3T6S6iw" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab16">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/fColJ6Zlgic" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab17">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/PPhu7m1j5Dg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab18">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/EQ3sKkxsWvM" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab19">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/2SmSel_jUI8" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="suhudankalorbab20">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/3wHdluCKxEc" frameborder="0" allowfullscreen></iframe>
                    </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bab">

                        <div class="isi-bab text-center">
                        <hr>
                        <a id="suhudankalortombolbab1" href="#">bab 1</a>
                        <a id="suhudankalortombolbab2" href="#">bab 2</a>
                        <a id="suhudankalortombolbab3" href="#">bab 3</a>
                        <a id="suhudankalortombolbab4" href="#">bab 4</a>
                        <a id="suhudankalortombolbab5" href="#">bab 5</a>
                        <a id="suhudankalortombolbab6" href="#">bab 6</a>
                        <a id="suhudankalortombolbab7" href="#">bab 7</a>
                        <a id="suhudankalortombolbab8" href="#">bab 8</a>
                        <a id="suhudankalortombolbab9" href="#">bab 9</a>
                        <a id="suhudankalortombolbab10" href="#">bab 10</a>
                        <a id="suhudankalortombolbab11" href="#">bab 11</a>
                        <a id="suhudankalortombolbab12" href="#">bab 12</a>
                        <a id="suhudankalortombolbab13" href="#">bab 13</a>
                        <a id="suhudankalortombolbab14" href="#">bab 14</a>
                        <a id="suhudankalortombolbab15" href="#">bab 15</a>
                        <a id="suhudankalortombolbab16" href="#">bab 16</a>
                        <a id="suhudankalortombolbab17" href="#">bab 17</a>
                        <a id="suhudankalortombolbab18" href="#">bab 18</a>
                        <a id="suhudankalortombolbab19" href="#">bab 19</a>
                        <a id="suhudankalortombolbab20" href="#">bab 20</a>
                        </div>
                    </div>
                </div>
            </div>

          </div>
          </div>
        </section>

        <section class="full-page-coba" id="usahadanenergi">
        <div id="page-content-wrapper">
          <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                  <br>
                  <br>
                    <h3 class="text-center">usahadanenergi</h3>
                    <h2>Silahkan <a href="{{ route('auth.login') }}">Log In</a> untuk melihat Video Tutorial ini</h2>
                    <div  id="usahadanenergibab1">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/e-_LQhyiiI8" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="usahadanenergibab2">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/4JK4BXfnC5c" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="usahadanenergibab3">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/5AvIWPF-gkU" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="usahadanenergibab4">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/xGJ5yOltLBg" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="usahadanenergibab5">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/JM5bpzAtB5c" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div  id="usahadanenergibab6">
                      <iframe width="420" height="315" src="https://www.youtube.com/embed/DAha3_7CXA4" frameborder="0" allowfullscreen></iframe>
                    </div>
                    {{-- <div  id="usahadanenergibab7">
                    </div>
                    <div  id="usahadanenergibab8">
                    </div>
                    <div  id="usahadanenergibab9">
                    </div>
                    <div  id="usahadanenergibab10">
                    </div>
                    <div  id="usahadanenergibab11">
                    </div>
                    <div  id="usahadanenergibab12">
                    </div>
                    <div  id="usahadanenergibab13">
                    </div>
                    <div  id="usahadanenergibab14">
                    </div>
                    <div  id="usahadanenergibab15">
                    </div>
                    <div  id="usahadanenergibab16">
                    </div>
                    <div  id="usahadanenergibab17">
                    </div>
                    <div  id="usahadanenergibab18">
                    </div>
                    <div  id="usahadanenergibab19">
                    </div>
                    <div  id="usahadanenergibab20">
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bab">

                        <div class="isi-bab text-center">
                        <hr>
                        <a id="usahadanenergitombolbab1" href="#">bab 1</a>
                        <a id="usahadanenergitombolbab2" href="#">bab 2</a>
                        <a id="usahadanenergitombolbab3" href="#">bab 3</a>
                        <a id="usahadanenergitombolbab4" href="#">bab 4</a>
                        <a id="usahadanenergitombolbab5" href="#">bab 5</a>
                        <a id="usahadanenergitombolbab6" href="#">bab 6</a>
                      
                        </div>
                    </div>
                </div>
            </div>

          </div>
        </div>
        </section>



        <div class="row" id="konten2001">
            <div class="col-lg-12">
                        <h2>Silahkan <a href="{{ route('auth.login') }}">Log In</a> untuk melihat Video Tutorial ini</h2>
            </div>
        </div>
        <div class="row" id="konten2002">
            <div class="col-lg-12" style="margin: 50px 0 0 75px">
              <iframe width="560" height="355" src="#" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>



</div>
@section('footer')
  <script type="text/javascript" src="/assets/js/konten/fullpage.js"></script>
@stop

    @stop
