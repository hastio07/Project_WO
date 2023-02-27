@extends('layouts.Admins')
@section('title','Dashboard')

@section('content')

<div class="title">
    Dashboard
</div>
<div class="content-wrapper">
    <div class="row same-height">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Interest</h4>
                </div>
                <div class="card-body">
                    <div class="isi">isi</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Jadwal Kegiatan</h4>
                </div>
                <div class="card-body">
                    <ul class="timeline-xs">
                        <li class="timeline-item success">
                            <div class="margin-left-15">
                                <div class="text-muted text-small">
                                    Minggu, 1 januari 2023
                                </div>
                                <p>
                                    <a class="text-info" href="">
                                        Bambang
                                    </a>
                                    has completed his account.
                                </p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="margin-left-15">
                                <div class="text-muted text-small">
                                    senin, 2 januari 2023
                                </div>
                                <p>
                                    Staff Meeting
                                </p>
                            </div>
                        </li>
                        <li class="timeline-item danger">
                            <div class="margin-left-15">
                                <div class="text-muted text-small">
                                    Minggu, 3 januari 2023
                                </div>
                                <p>
                                    Completed new layout.
                                </p>
                            </div>
                        </li>
                        <li class="timeline-item info">
                            <div class="margin-left-15">
                                <div class="text-muted text-small">
                                    Minggu, 4 januari 2023
                                </div>
                                <p>
                                    Contacted
                                    <a class="text-info" href="">
                                        Microsoft
                                    </a>
                                    for license upgrades.
                                </p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="margin-left-15">
                                <div class="text-muted text-small">
                                    Minggu, 5 januari 2023
                                </div>
                                <p>
                                    Started development new site
                                </p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="margin-left-15">
                                <div class="text-muted text-small">
                                    Minggu,6 januari 2023
                                </div>
                                <p>
                                    Lunch with
                                    <a class="text-info" href="">
                                        Mba Inem
                                    </a>
                                    .
                                </p>
                            </div>
                        </li>
                        <li class="timeline-item warning">
                            <div class="margin-left-15">
                                <div class="text-muted text-small">
                                    Minggu,7 januari 2023
                                </div>
                                <p>
                                    server Maintenance.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="settings">
    <div class="settings-icon-wrapper">
        <div class="settings-icon">
            <i class="ti ti-settings"></i>
        </div>
    </div>
</div>
</div>
@endsection