@extends('Layout.main')
@section('js')
    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection

@section('src')
    <div class="navbar-nav align-items-center">
        <div class="nav-item d-flex align-items-center p-1">
            <box-icon name='home-smile'></box-icon>
            <h4 class="card-header p-1 m-1"> Dahsboard</h4>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="mt-5">
            <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card card-border-shadow-primary h-100">
                        <div class="card-body">
                            <p class="mb-0">
                                <span class="fw-medium me-1 mb-2">Total Token</span>
                            </p>
                            <div class="d-flex align-items-center mb-2 mt-3 pb-1">
                                <div class="avatar me-2">
                                    <span class="avatar-initial rounded bg-label-primary"><i class='bx bxs-plug'></i>
                                    </span>
                                </div>
                                <h4 class="ms-1 mb-0 fs-4" id="token">{{ $pulsa->pulsa }} <span>Wh</span></h4>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card card-border-shadow-warning h-100">
                        <div class="card-body">
                            <p class="mb-0">
                                <span class="fw-medium me-1 mb-2">Total Arus</span>
                            </p>

                            <div class="d-flex align-items-center mb-2 pb-1 mt-3">
                                <div class="avatar me-2">
                                    <span class="avatar-initial rounded bg-label-warning"><i class='bx bx-pulse'></i></span>
                                </div>
                                <h4 class="ms-1 mb-0 fs-4" id="arus">{{ $data->rata_arus }} <span>A</span></h4>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card card-border-shadow-warning h-100">
                        <div class="card-body">
                            <p class="mb-0">
                                <span class="fw-medium me-1 mb-2">Total Daya</span>
                            </p>

                            <div class="d-flex align-items-center mb-2 pb-1 mt-3">
                                <div class="avatar me-2">
                                    <span class="avatar-initial rounded bg-label-secondary"><i
                                            class='bx bx-wallet-alt'></i></span>
                                </div>
                                <h4 class="ms-1 mb-0 fs-4" id="daya">{{ $data->rata_daya }} <span>W</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                    <div class="card card-border-shadow-warning h-100">
                        <div class="card-body">
                            <p class="mb-0">
                                <span class="fw-medium me-1 mb-2">Voltase</span>
                            </p>

                            <div class="d-flex align-items-center mb-2 pb-1 mt-3">
                                <div class="avatar me-2">
                                    <span class="avatar-initial rounded bg-label-danger"><i
                                            class='bx bx-bulb'></i></i></span>
                                </div>
                                <h4 class="ms-1 mb-0 fs-4" id="voltase">{{ $data->rata_voltage }} <span>V</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mt-3 mb-4">
            <div class="card-body">

                {!! $chart->container() !!}

            </div>
        </div>
    </div>
@endsection
