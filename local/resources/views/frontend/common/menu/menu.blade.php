<div id="menu" class="container-fluid p-0 d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top-logo d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="{{URL::asset('images/logo/americanstandar.jpg')}}" alt="" class="logo">
                        <div class="search-box">
                            <input type="text" placeholder="Nhập nội dung tìm kiếm...!">
                            <button><i class="fas fa-feather-alt"></i></button>
                        </div>
                    </div>
                    <div class="d-flex hotline align-items-center">
                        {{--<i class="fas fa-phone pr-2"></i>--}}
                        {{--<i class="fab fa-facebook-f"></i>--}}
                        {{--<i class="fab fa-instagram"></i>--}}
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone"></i>
                            <div>
                                <p>(+84) 986-868-868</p>
                                {{--<p>(+84) 986-868-868</p>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex position-relative justify-content-between align-items-center">
                    <ul class="main-menu-ul">
                        <li><a href="{{URL::asset('/')}}" class="{{ request()->is('/') ? 'active' : '/' }}">TRANG CHỦ</a></li>
                        <li  class="dropdown-overlay">
                            <a href="{{URL::asset('san-pham.html')}}" class="{{ request()->is('san-pham*') ? 'active' : '/' }}">SẢN PHẨM</a>
                            <ul class="dropdown-content">
                                <li><a href="">SẢN PHẨM 1</a></li>
                                <li><a href="">SẢN PHẨM 1</a></li>
                                <li><a href="">SẢN PHẨM 1</a></li>
                                <li><a href="">SẢN PHẨM 1</a></li>
                                <li><a href="">SẢN PHẨM 1</a></li>
                            </ul></li>
                        <li><a href="{{URL::asset('tin-tuc.html')}}" class="{{ request()->is('tin-tuc*') ? 'active' : '/' }}">KHUYẾN MÃI</a>

                        </li>
                        <li><a href="{{URL::asset('lien-he.html')}}" class="{{ request()->is('lien-he*') ? 'active' : '/' }}">LIÊN HỆ</a></li>
                        <li><a href="{{URL::asset('gioi-thieu.html')}}" class="{{ request()->is('gioi-thieu*') ? 'active' : '/' }}">GIỚI THIỆU</a></li>
                    </ul>
                    <div class="sc-nw d-flex">
                        <div class="mr-3">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="mr-3">
                            <i class="fas fa-percent"></i>
                        </div>
                        <div>
                            <i class="fab fa-hotjar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


