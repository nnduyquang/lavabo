<div class="container-fluid mt-5" id="p_2">
    <div class="container">
        <div class="row">
            <div class="col-md-9 order-md-1 order-0">

                    @include('frontend.blogs.b_1')

            </div>

            <div class="col-md-3 order-md-0 order-1">

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="border  p-3">
                            <h4 class="border-bottom pb-2">TÌM KIẾM </h4>

                            <input type="text" placeholder="Search here">

                            <button>TÌM KIẾM</button>

                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="border  p-3">
                            <h4 class="border-bottom pb-2">TIN LIÊN QUAN </h4>

                            <ul>
                                @for ($i = 0; $i < 5; $i++)
                                    <li>
                                        <div class="">
                                            <div class="pr-2 float-left">
                                                <div class="img-ttlq" style="background-image:url({{URL::asset('http://webaashi.com/TF/html/aashi-faucets/assets/img/all/wa-blog-detail.jpg')}});">

                                                </div>
                                            </div>
                                            <h5><a href="">MAURIS ET PULVINAR CIDUNT CHECK !@# CHLA HJSLKH CHÁ JH</a></h5>
                                        </div>
                                    </li>
                                @endfor
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="border  p-3">
                            <h4 class="border-bottom pb-2">THƯƠNG HIỆU </h4>

                            <ul>
                                @for ($i = 0; $i < 6; $i++)
                                    <li>
                                        <div class="d-flex justify-content-between">
                                            <a href="">
                                                <h6>Brand {{$i}}</h6>
                                            </a>
                                            <a href="">
                                                ({{$i*10}})
                                            </a>
                                        </div>
                                    </li>
                                @endfor
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <div class="border  p-3">
                            <h4 class="border-bottom pb-2">TAGS </h4>

                            <div class="tags-list">
                                @for ($i = 0; $i < 3; $i++)
                                    <a href="">Tags {{$i}} </a>
                                    <a href="">Videos {{$i}}</a>
                                    <a href="">Lavabo {{$i}}</a>
                                @endfor
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
