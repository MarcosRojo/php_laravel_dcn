@extends('layouts.app')

@section('template_title', 'Productos | DCN Network')
@section('template_section_title', 'Ingreso | Productos')

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
                                    <h3 class="card-label">Listado de Productos</h3>
                                </div>
                                <div class="card-toolbar">
                                    <!--begin::Dropdown-->
                                    <!--end::Dropdown-->
                                    <!--begin::Button-->
                                    <a href="#" class="btn btn-primary font-weight-bolder" data-bs-toggle="modal" data-bs-target="#modal_create_producto">
                                        <i class="la la-plus"></i>Nuevo Producto</a>
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
    <!--begin::Modal - Create Producto-->
    <div class="modal fade" id="modal_create_producto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-1000px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Title-->
                    <h2>Crear Nuevo Producto</h2>
                    <!--end::Title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span id="close_modal" class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y m-5">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
                        <!--begin::Nav-->
                        <div class="stepper-nav py-5">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Datos Principales</h3>
                            </div>
                            <!--end::Step 1-->
                        </div>
                        <!--end::Nav-->
                         <!--begin::Form_productos-->
                        <div class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="form_crear_producto">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Detalles del Producto</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Si requieres de ayuda u/o informacion para este registro no dude enconsultar manual de registro de producto en la siguente pagina
                                        <a href="#" class="link-primary fw-bold">Pagina de ayuda</a>.</div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex form-label required">Marca</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="marca" id="marca" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Seleccione..." data-allow-clear="true" data-hide-search="true">
                                            <option></option>
                                            @foreach ( $datos_vista["marcas"] as $marcas)
                                                <option value="{{ $marcas["id"] }}">{{ $marcas["descripcion"] }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex form-label required">Modelo</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="modelo" id="modelo"  class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Seleccione..." data-allow-clear="true" data-hide-search="true">
                                            <option value=""></option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex form-label required">Area</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="area" id="area" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Seleccione..." data-allow-clear="true" data-hide-search="true">
                                            <option></option>
                                            @foreach ( $datos_vista["areas"] as $areas)
                                                <option value="{{ $areas["id"] }}">{{ $areas["descripcion"] }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex form-label ">Descripcion</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" id="descripcion" name="descripcion" class="form-control form-control-lg form-control-solid" name="account_name" placeholder="" value="">
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Actions-->
                            <div class="d-flex pt-15 flex-row-reverse">
                                <!--begin::Wrapper-->
                                <div class="">
                                    <button id="enviar_form_producto" type="button" class="btn btn-lg btn-primary me-3" >
                                        <span class="indicator-label">enviar
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form_productos-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create Producto-->
    <!--begin::Modal - Update Producto-->
    <div class="modal fade" id="modal_update_producto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-1000px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Title-->
                    <h2>Editar Producto</h2>
                    <!--end::Title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span id="close_modal_editar" class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y m-5">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
                        <!--begin::Nav-->
                        <div class="stepper-nav py-5">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Datos Principales</h3>
                            </div>
                            <!--end::Step 1-->
                        </div>
                        <!--end::Nav-->
                         <!--begin::Form_productos-->
                        <div class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="form_update_producto">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold text-dark">Detalles del Producto</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">Si requieres de ayuda u/o informacion para este registro no dude enconsultar manual de registro de producto en la siguente pagina
                                        <a href="#" class="link-primary fw-bold">Pagina de ayuda</a>.</div>
                                        <!--end::Notice-->
                                    </div>
                                    <input type="text" id="producto_id" hidden disabled readonly>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex form-label required">Marca</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="update_marca" id="update_marca" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Seleccione..." data-allow-clear="true" data-hide-search="true">
                                            <option></option>
                                            @foreach ( $datos_vista["marcas"] as $marcas_editar)
                                                <option value="{{ $marcas_editar["id"] }}">{{ $marcas_editar["descripcion"] }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex form-label required">Modelo</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="update_modelo" id="update_modelo"  class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Seleccione..." data-allow-clear="true" data-hide-search="true">
                                            <option value=""></option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex form-label required">Area</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="update_area" id="update_area" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Seleccione..." data-allow-clear="true" data-hide-search="true">
                                            <option></option>
                                            @foreach ( $datos_vista["areas"] as $areas_editar)
                                                <option value="{{ $areas_editar["id"] }}">{{ $areas_editar["descripcion"] }}</option>
                                            @endforeach
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-flex form-label ">Descripcion</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" id="update_descripcion" name="update_descripcion" class="form-control form-control-lg form-control-solid" name="account_name" placeholder="" value="">
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Actions-->
                            <div class="d-flex pt-15 flex-row-reverse">
                                <!--begin::Wrapper-->
                                <div class="">
                                    <button id="send_form_update_producto" type="button" class="btn btn-lg btn-primary me-3" >
                                        <span class="indicator-label">Editar
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form_productos-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Update Producto-->
</div>
@endsection
@push('scripts_page')
<script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('js/pages/private/user/productos.js')}}" type="module"></script>
<script src="{{ asset('js/pages/private/user/poductos.table.js') }}" ></script>
@endpush
