<div class="page-breadcrumb bg-white">
    <div class="page-body">
        <div class="container-xl">
            <div class="col-lg-12">
                <div class="row row-cards">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body p-2 text-center">
                                <div class="text-end text-green">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        6%
                                        <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <polyline points="3 17 9 11 13 15 21 7"></polyline>
                                            <polyline points="14 7 21 7 21 14"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="h1 m-0">Rp. {{ number_format($total) }} </div>
                                <div class="text-muted mb-3">Sales</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body p-2 text-center">
                                <div class="text-end text-red">
                                    <span class="text-red d-inline-flex align-items-center lh-1">
                                        -2%

                                    </span>
                                </div>
                                <div class="h1 m-0">95</div>
                                <div class="text-muted mb-3">Daily Earnings</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body p-2 text-center">
                                <div class="text-end text-green">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        9%
                                        <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <polyline points="3 17 9 11 13 15 21 7"></polyline>
                                            <polyline points="14 7 21 7 21 14"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="h1 m-0">{{ $carts->count() }}</div>
                                <div class="text-muted mb-3">In Cart (Waiting to Checkout)</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body p-2 text-center">
                                <div class="text-end text-green">
                                    <span class="text-green d-inline-flex align-items-center lh-1">
                                        9%
                                        <!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <polyline points="3 17 9 11 13 15 21 7"></polyline>
                                            <polyline points="14 7 21 7 21 14"></polyline>
                                        </svg>
                                    </span>
                                </div>
                                <div class="h1 m-0">{{ $products->count() }}</div>
                                <div class="text-muted mb-3">Products</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
