@extends('layouts.app')

@section('template_title', 'Dsiponibilidad/Existencia | DCN Network')
@section('template_section_title', 'Disponibilidad/Existencia | Productos')

@section('template_linked_css')
<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
<div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
    <!--begin::Container-->
    <div class="container d-flex flex-column flex-lg-row" id="kt_docs_content_container">
        <!--begin::Card-->
        <div class="card card-docs flex-row-fluid mb-2">
            <!--begin::Card Body-->
            <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                <!--begin::Section-->
                <div class="pb-10">
                    <!--begin::Heading-->
                    <!--end::Heading-->
                    <!--begin::Datatable-->
                    <div class="content flex-column-fluid" id="kt_content">
                        <!--begin::Notice-->
                        <!--end::Notice-->
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <div class="card-header">
                                <div class="card-title">
                                    <span class="card-icon">
                                            <i class="flaticon2-layers text-primary"></i>
                                        </span>
                                    <h3 class="card-label">Existencia, Disponibilidad</h3>
                                </div>
                                <div class="card-toolbar">
                                    <!--begin::Dropdown-->
                                    <!--end::Dropdown-->
                                    <!--begin::Button-->
                                    <a href="#" class="btn btn-primary font-weight-bolder" data-bs-toggle="modal" data-bs-target="#modal_create_diponibilidad">
                                        <i class="la la-plus"></i>Reponer Disponibilidad</a>
                                    <!--end::Button-->
                                </div>
                            </div>
                            <div class="card-body">
                                <!--begin: Search Form-->
                                <form class="mb-15">
                                    <div class="row mb-6">
                                        <div class="col-lg-3 mb-lg-0 mb-6">
                                            <label>Producto</label>
                                            <input type="text" class="form-control datatable-input" data-col-index="0" />
                                        </div>
                                    </div>
                                    <div class="row mt-8">
                                        <div class="col-lg-12">
                                            <button class="btn btn-primary btn-primary--icon" id="kt_search">
                                                <span>
                                                    <i class="la la-search"></i>
                                                    <span>Buscar</span>
                                                </span>
                                            </button>&#160;&#160;
                                            <button class="btn btn-secondary btn-secondary--icon" id="kt_reset">
                                                <span>
                                                    <i class="la la-close"></i>
                                                    <span>Reiniciar</span>
                                                </span>
                                            </button></div>
                                    </div>
                                </form>
                                <!--begin: Datatable-->
                                <!--begin: Datatable-->
                                <table class="table align-middle table-row-dashed " id="table_productos">
                                    <thead>
                                        <tr>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Descripcion</th>
                                            <th>Area</th>
                                            <th>Serial unico</th>
                                            <th>ubicacion</th>
                                            <th>Disponibilidad</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Descripcion</th>
                                            <th>Area</th>
                                            <th>serial unico</th>
                                            <th>ubicacion</th>
                                            <th>Disponibilidad</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!--end: Datatable-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Datatable-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Sidebar nav-->
        </div>
        <!--end::Sidebar wrapper-->
    </div>
    <!--end::Container-->
</div>
@endsection
@push('scripts_page')
<script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
@endpush
