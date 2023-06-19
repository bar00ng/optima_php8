@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Project
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Anggaran</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Status</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                        Progress</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($lop))
                                    @foreach ($lop as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div> &nbsp;</div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $item->nama_lop }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                                <p class="text-sm font-weight-bold mb-0">
                                                    @if ($item->rab_ondesk !== '')
                                                        @if (strpos($item->keterangan_rab, 'dari 20 Jt') == false)
                                                            {{ 'Rp ' . number_format($item->rab_ondesk, 0, '.', '.') }}
                                                        @else
                                                            {{ $item->rab_ondesk }}
                                                        @endif
                                                    @else
                                                        {{ '-' }}
                                                    @endif
                                            </td>
                                            <td>
                                                @if ($item->status == 'Survey + RAB')
                                                    <a href="{{ route('lop.formSurvey', ['lop_id' => $item->id]) }}">
                                                        <span class="text-xs font-weight-bold">Survey + RAB</span>
                                                    </a>
                                                @elseif($item->status == 'Alokasi Mitra')
                                                    <a href="{{ route('lop.formAlokasiMitra', ['lop_id' => $item->id]) }}">
                                                        <span class="text-xs font-weight-bold">Alokasi Mitra</span>
                                                    </a>
                                                @else
                                                    <span class="text-xs font-weight-bold">{{ $item->status }}</span>
                                                @endif
                                            </td>
                                            <td class="align-middle text-center">
                                                @if ($item->status == 'Survey + RAB')
                                                    <div class="d-flex align-items-center justify-content-center"> <span
                                                            class="me-2 text-xs font-weight-bold">20%</span>
                                                        <div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-gradient-info"
                                                                    role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                                    aria-valuemax="100" style="width: 20%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif($item->status == 'Alokasi Mitra')
                                                    <div class="d-flex align-items-center justify-content-center"> <span
                                                            class="me-2 text-xs font-weight-bold">40%</span>
                                                        <div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-gradient-info"
                                                                    role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                                    aria-valuemax="100" style="width: 40%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif($item->status == 'Persiapan')
                                                    <div class="d-flex align-items-center justify-content-center"> <span
                                                            class="me-2 text-xs font-weight-bold">60%</span>
                                                        <div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-gradient-info"
                                                                    role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                                    aria-valuemax="100" style="width: 60%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif($item->status == 'Instalasi')
                                                    <div class="d-flex align-items-center justify-content-center"> <span
                                                            class="me-2 text-xs font-weight-bold">80%</span>
                                                        <div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-gradient-info"
                                                                    role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                                    aria-valuemax="100" style="width: 80%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @elseif($item->status == 'Selesai Fisik')
                                                    <div class="d-flex align-items-center justify-content-center"> <span
                                                            class="me-2 text-xs font-weight-bold">100%</span>
                                                        <div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-gradient-info"
                                                                    role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100" style="width: 100%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="d-flex align-items-center justify-content-center"> <span
                                                            class="me-2 text-xs font-weight-bold">0%</span>
                                                        <div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-gradient-info"
                                                                    role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                                    aria-valuemax="100" style="width: 0%;"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="align-middle">
                                                <a href="{{ $item->status == 'Survey + RAB' || $item->status == 'Alokasi Mitra' ? '#' : route('lop.konstruksi', ['lop_id' => $item->id]) }}"
                                                    class="text-secondary font-weight-bold text-sm" data-toggle="tooltip"
                                                    data-original-title="Konstruksi" style="margin-right: 5px;">
                                                    Konstruksi
                                                </a>

                                                <a href="{{ route('lop.go-live', ['lop_id' => $item->id]) }}"
                                                    class="text-secondary font-weight-bold text-sm" data-toggle="tooltip"
                                                    data-original-title="GoLive">
                                                    GoLive
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="align-middle text-center" colspan="4">
                                            <span class="text-secondary text-xs font-weight-bold">List LOP Kosong</span>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
