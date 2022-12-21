@extends('layout.app')
@section('content')
<div class="hero">
    <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="DC logo">
</div>



<section class="comics_card ">
    <div class="container text-center">
        <button class="btn btn-primary text-uppercase p-2 rounded-0">current series</button>
        <div class="row flex row-cols-12 row-cols-sm-12 row-cols-md-12 row-cols-lg-12 g-4">
            <div class="col-12 flex">
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>Action Comics</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>American Vampire 1976</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>Aquaman</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>Batgirl</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>Batman</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>Batman Beyond</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>Batman/Superman</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>Batman/Superman Annual</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>Batman: The Joker War Zone</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>Batman: Three Jokers</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>Batman: White Knight Presents: Harley Quinn</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-head">
                        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq" alt="DC logo">
                    </div>
                    <div class="card-body">
                        <h5>Catwoman</h5>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary mt-4 px-5 rounded-0 text-uppercase">load more</button>
    </div>
</section>
@endsection