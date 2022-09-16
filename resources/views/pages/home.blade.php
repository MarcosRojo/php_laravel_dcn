@extends('layouts.app')

@section('template_title', 'Bienvenido | DCN Network')
@section('template_section_title', 'Inicio')

@section('template_linked_css')

@endsection

@section('content')
<div class="row g-5 g-lg-10">
    <!--begin::Col-->
    <div class="col-xl-4 mb-xl-10">
        <!--begin::Mixed Widget 19-->
        <div class="card h-md-100">
            <!--begin::Beader-->
            <div class="card-header border-0 py-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Weekly Sales Stats</span>
                    <span class="text-muted fw-semibold fs-7">890,344 Sales</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62cfb38be3820">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62cfb38be3820" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0 d-flex flex-column">
                <!--begin::Items-->
                <div class="card-px pt-5 pb-10 flex-grow-1">
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label">
                                <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Top Authors</a>
                                <span class="text-muted fw-semibold d-block fs-7">Mark, Rowling, Esther</span>
                            </div>
                            <span class="badge badge-light fw-bold my-2">+82$</span>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label">
                                <img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Popular Authors</a>
                                <span class="text-muted fw-semibold d-block fs-7">Randy, Steve, Mike</span>
                            </div>
                            <span class="badge badge-light fw-bold my-2">+280$</span>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <span class="symbol-label">
                                <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">New Users</a>
                                <span class="text-muted fw-semibold d-block fs-7">John, Pat, Jimmy</span>
                            </div>
                            <span class="badge badge-light fw-bold my-2">+4500$</span>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Items-->
                <!--begin::Chart-->
                <div id="kt_charts_mixed_widget_19_chart" class="card-rounded-bottom" style="height: 150px"></div>
                <!--end::Chart-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Mixed Widget 19-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-4">
        <!--begin::Row-->
        <div class="row g-5 g-lg-10">
            <!--begin::Col-->
            <div class="col-lg-6 mb-5 mb-lg-10">
                <!--begin::Tiles Widget 5-->
                <a href="#" class="card bg-danger h-150px">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column justify-content-between">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1 flex-grow-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="d-flex flex-column">
                            <div class="text-white fw-bold fs-1 mb-0 mt-5">3,900</div>
                            <div class="text-white fw-semibold fs-6">Author Sales</div>
                        </div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tiles Widget 5-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6 mb-5 mb-lg-10">
                <!--begin: Statistics Widget 6-->
                <a href="#" class="card bg-body h-150px">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column py-6 px-6">
                        <div class="d-flex flex-column flex-grow-1 mb-5">
                            <span class="text-gray-500 fw-semibold me-2 fs-7">Author Stats</span>
                            <span class="fw-bold fs-1 text-gray-900">4.9M</span>
                        </div>
                        <div class="progress h-7px bg-info bg-opacity-25">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <!--end:: Body-->
                </a>
                <!--end: Statistics Widget 6-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 g-lg-10">
            <!--begin::Col-->
            <div class="col-lg-6 mb-5 mb-lg-10">
                <!--begin::Tiles Widget 1-->
                <div class="card h-150px bgi-no-repeat bgi-size-cover h-150px" style="background-image:url('assets/media/stock/600x600/img-12.jpg')">
                    <!--begin::Body-->
                    <div class="card-body p-6">
                        <!--begin::Title-->
                        <a href="#" class="text-black text-hover-primary fw-bold fs-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Properties</a>
                        <!--end::Title-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Tiles Widget 1-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6 mb-5 mb-lg-10">
                <!--begin::Tiles Widget 5-->
                <a href="#" class="card bg-primary h-150px">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column justify-content-between">
                        <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                        <span class="svg-icon svg-icon-white svg-icon-2hx ms-n1 flex-grow-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3" d="M10.9607 12.9128H18.8607C19.4607 12.9128 19.9607 13.4128 19.8607 14.0128C19.2607 19.0128 14.4607 22.7128 9.26068 21.7128C5.66068 21.0128 2.86071 18.2128 2.16071 14.6128C1.16071 9.31284 4.96069 4.61281 9.86069 4.01281C10.4607 3.91281 10.9607 4.41281 10.9607 5.01281V12.9128Z" fill="currentColor" />
                                <path d="M12.9607 10.9128V3.01281C12.9607 2.41281 13.4607 1.91281 14.0607 2.01281C16.0607 2.21281 17.8607 3.11284 19.2607 4.61284C20.6607 6.01284 21.5607 7.91285 21.8607 9.81285C21.9607 10.4129 21.4607 10.9128 20.8607 10.9128H12.9607Z" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <div class="d-flex flex-column">
                            <div class="text-white fw-bold fs-1 mb-0 mt-5">75%</div>
                            <div class="text-white fw-semibold fs-6">Success Rate</div>
                        </div>
                    </div>
                    <!--end::Body-->
                </a>
                <!--end::Tiles Widget 5-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--begin::Engage widget 4-->
        <a href="#" class="card bgi-no-repeat h-150px mb-5 mb-lg-10" style="background-color: #4AB58E; background-position: calc(100% + 1rem) bottom; background-size: 25% auto; background-image:url('assets/media/svg/humans/custom-1.svg')">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column align-items-start justify-content-center">
                <h3 class="text-white fw-bold mb-3">30% Off Themes</h3>
                <p class="text-white fs-7">Get your discounted themes of the month
                <br />No hassle, no worries, no fuss
                <br />Instant rewards, everyday</p>
            </div>
            <!--end::Body-->
        </a>
        <!--end::Engage widget 4-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-4 mb-xl-10">
        <!--begin::Engage widget 3-->
        <div class="card bgi-no-repeat h-xl-100 mb-5 mb-lg-10" style="background-color: #1B283F; background-position: 0 calc(100% + 0.5rem); background-size: 100% auto; background-image:url('assets/media/svg/general/rhone.svg')">
            <!--begin::Body-->
            <div class="card-body">
                <h3 class="text-white fw-bold my-7">Create CRM Reports</h3>
                <p class="text-muted fs-6 mb-7">Cause marketing is marketing
                <br />done by a for-profit business
                <br />that seeks to increase profits
                <br />to better society</p>
                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign" class="btn btn-danger gw-bold px-6 py-3">Create Campaign</a>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Engage widget 3-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->
@endsection
@push('scripts_page')

@endpush
