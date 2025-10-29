{{-- resources/views/events/index.blade.php --}}
@extends('layouts.app')

@section('breadcrumb')
    <x-breadcrumb 
        :items="[
            ['label' => 'Home', 'url' => route('dashboard')],
            ['label' => 'Reservations', 'url' => route('reserve.index')]
        ]"
    />
@endsection

@section('content')
    <!--begin::Content wrapper-->
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container container-fluid">
                <!--begin::Toolbar-->
                <div class="d-flex flex-wrap flex-stack mb-6">
                    <!--begin::Heading-->
                    <h3 class="fw-bold my-2">Reservations</h3>
                    <!--end::Heading-->
                </div>
                <!--end::Toolbar-->
                
                @if($items->isEmpty())
                    <div class="row g-5 g-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4">
                            <!--begin::Engage widget 1-->
                            <div class="card h-md-100" dir="ltr">
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column flex-center">
                                    <!--begin::Heading-->
                                    <div class="mb-2">
                                        <!--begin::Title-->
                                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">No Reservation is scheduled at this time. 
                                        </h1>
                                        <!--end::Title-->
                                        <!--begin::Illustration-->
                                        <div class="py-10 text-center">
                                            <img src="{{ asset('template/assets/media/svg/illustrations/easy/2.svg') }}" class="theme-light-show w-200px" alt="" />
                                            <img src="{{ asset('template/assets/media/svg/illustrations/easy/2-dark.svg') }}" class="theme-dark-show w-200px" alt="" />
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Links-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Engage widget 1-->
                        </div>
                        <!--end::Col-->
                    </div>
                @else
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Card title-->
                            <!--begin::Card toolbar-->
                            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                <div class="w-100 mw-150px">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                                        <option></option>
                                        <option value="all">All</option>
                                        <option value="published">Published</option>
                                        <option value="scheduled">Scheduled</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                    <!--end::Select2-->
                                </div>
                                <!--begin::Add product-->
                                <!--end::Add product-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-180px">Name</th>
                                        <th class="text-start min-w-120px">Service</th>
                                        <th class="text-start min-w-130px">Team</th>
                                        <th class="text-start min-w-120px">Date</th>
                                        <th class="text-start min-w-180px">Pickup address</th>
                                        <th class="text-start min-w-220px">Delivery address</th>
                                        <th class="text-start min-w-200px">Details</th>
                                        <th class="text-end min-w-100px">Status</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach($items as $item)
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex justify-content-start flex-column">
                                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ $item->name }}</a>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">{{ $item->email }}</span>
                                                        <span class="text-gray-400 fw-semibold d-block fs-7">{{ $item->contact_number }}</span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-start pe-0">
                                                <span>
                                                    @switch($item->service)
                                                        @case('residential') Déménagement résidentiel @break
                                                        @case('residential_pack') Déménagement résidentiel avec emballage @break
                                                        @case('commercial') Déménagement commercial @break
                                                        @case('longue_distance') Transport longue distance @break
                                                        @case('installations') Installations spéciales @break
                                                        @default Service inconnu
                                                    @endswitch
                                                </span>
                                            </td>

                                            <td class="text-start pe-0">
                                                @if($item->equipe)
                                                    <span>
                                                        @switch($item->equipe)
                                                            @case('equipe_1') Service conducteur seulement @break
                                                            @case('equipe_2') Équipe de 2 personnes @break
                                                            @case('equipe_3') Équipe de 3 personnes @break
                                                            @case('equipe_4') 2 Équipes de 3 personnes @break
                                                            @default Non assignée
                                                        @endswitch
                                                    </span>
                                                @endif
                                            </td>

                                            <td class="text-start pe-0">
                                                {{ \Carbon\Carbon::parse($item->reserve_date)->format('M d, Y · H:i') }}
                                            </td>


                                            <td class="text-start pe-0">
                                                <span>
                                                    {{ $item->no_rue_depart }},
                                                    {{ $item->ville_depart }},
                                                    {{ $item->code_postal_depart }}
                                                </span>
                                            </td>

                                            <td class="text-start pe-0">
                                                @if($item->no_rue_destination || $item->ville_destination)
                                                    <span>
                                                        {{ $item->no_rue_destination ?? '' }},
                                                        {{ $item->ville_destination ?? '' }},
                                                        {{ $item->code_postal_destination ?? '' }}
                                                    </span>
                                                @endif
                                            </td>

                                            <td class="text-start pe-0">
                                                <span>{{ $item->event_description }}</span>
                                            </td>

                                            <td class="text-end pe-0">
                                                @php
                                                    $state = $item->status == 'paid' ? 'Paid' : 'Pending';
                                                    $style = $item->status == 'paid' ? 'primary' : 'danger';
                                                @endphp
                                                <!--begin::Badges-->
                                                <div class="badge badge-light-{{ $style }}">{{ $state }}</div>
                                                <!--end::Badges-->
                                            </td>
                                            <!--end::Status=-->
                                        </tr>
                                        <!--end::Table row-->
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                @endif
                
            </div>
        </div>
    </div>
@endsection