@extends('layouts.app')

@section('template_title', 'Dsiponibilidad/Existencia | DCN Network')
@section('template_section_title', 'Disponibilidad/Existencia | Productos')

@section('template_linked_css')
<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}" />
<div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
    <!--begin::Nav-->
    <div class="stepper-nav py-5">
        <!--begin::Step 1-->
        <div class="stepper-item current" data-kt-stepper-element="nav">
            <h3 class="stepper-title">Detalles del Item</h3>
        </div>
        <!--end::Step 1-->
        <!--begin::Step 2-->
        <div class="stepper-item" data-kt-stepper-element="nav">
            <h3 class="stepper-title">Ubicacion</h3>
        </div>
        <!--end::Step 2-->
        <!--begin::Step 3-->
        <div class="stepper-item" data-kt-stepper-element="nav">
            <h3 class="stepper-title">Seriales</h3>
        </div>
        <!--end::Step 3-->
        <!--begin::Step 4-->
        <div class="stepper-item" data-kt-stepper-element="nav">
            <h3 class="stepper-title">Otros Detalles</h3>
        </div>
        <!--end::Step 4-->
        <!--begin::Step 5-->
        <div class="stepper-item" data-kt-stepper-element="nav">
            <h3 class="stepper-title">completado</h3>
        </div>
        <!--end::Step 5-->
    </div>
    <!--end::Nav-->
    <!--begin::Form-->
    <form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="kt_create_account_form">
        <!--begin::Step 1-->
        <div class="current" data-kt-stepper-element="content">
            <!--begin::Wrapper-->
            <div class="w-100">
                <!--begin::Heading Titulo dtalles de ingreso-->
                <div class="pb-10 pb-lg-12">
                    <!--begin::Title-->
                    <h2 class="fw-bold text-dark">Detalle de Ingreso</h2>
                    <!--end::Title-->
                    <!--begin::Notice-->
                    <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                    <a href="#" class="link-primary fw-bold">Help Page</a>.</div>
                    <!--end::Notice-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group "PRodcuto a anexar disponibilidad"-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label required">Producto</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="producto" id="producto" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Selecccione" data-allow-clear="true" data-hide-search="false">
                        <option></option>
                        @foreach ( $datos_vista["productos"] as $productos)
                            <option value="{{ $productos->producto_id}}">( {{ $productos->marcas_descripcion }} ) / {{ $productos->modelo_descripcion }}</option>

                        @endforeach
                    </select>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Input group-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-6 fw-semibold form-label">Unidades</label>
                            <div class="fs-7 fw-semibold text-muted">El producto posee unidades de descuento?</div>
                        </div>
                        <!--end::Label-->
                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" name="checkbox_unidades" id="checkbox_unidades" />
                            <span class="form-check-label fw-semibold text-muted">SI POSEE</span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row row mb-10">
                        <!--begin::Col-->
                        <div class="col-9">
                            <input name="cantidades" id="cantidades" type="text" class="form-control form-control-solid" value="" />
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-3">
                            <select name="tipo_medicion_cantidades" id="tipo_medicion_cantidades" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="..." data-allow-clear="true" data-hide-search="true">
                                <option></option>
                                <option value="und">Unidades</option>
                                <option value="mt">Mt</option>
                                <option value="lts">Lts</option>
                                <option value="kgs">Kgs</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row row mb-10">
                    <!--begin::Col-->
                    <div class="col-9">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3 required">
                                <span>Precio</span>
                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Enter the contact's city of residence (optional)."></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="precio_producto" id="precio_producto"  class="form-control form-control-solid"/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-3">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span class="required">Moneda</span>
                            </label>
                            <!--end::Label-->
                            <div class="w-100">
                                <!--begin::Select2-->
                                <select name="tipo_moneda" id="tipo_moneda" class="form-select form-select-lg form-select-solid" data-control="select2control="select2" data-placeholder="..." data-allow-clear="true" data-hide-search="true">
                                    <option></option>
                                    <option value="bs">Bs.</option>
                                    <option value="ref">Ref.</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label required">Asignado a...</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="asignacion" id="asignacion" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Sin Asignar" data-allow-clear="true" data-hide-search="false">
                        <option></option>
                    </select>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Step 1-->
        <!--begin::Step 2-->
        <div data-kt-stepper-element="content">
            <!--begin::Wrapper-->
            <div class="w-100">
                <!--begin::Heading-->
                <div class="pb-10 pb-lg-15">
                    <!--begin::Title-->
                    <h2 class="fw-bold text-dark">Ubicacion</h2>
                    <!--end::Title-->
                    <!--begin::Notice-->
                    <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                    <a href="#" class="link-primary fw-bold">Help Page</a>.</div>
                    <!--end::Notice-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label required">Interna o Externa</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <select name="ubicacion" id="ubicacion" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Seleccione..." data-allow-clear="true" data-hide-search="true">
                        <option></option>
                        <option value="true">Interna</option>
                        <option value="false">Externa</option>
                        <option></option>
                    </select>
                    <!--end::Input-->
                </div>
                <div id="ubicacion_interna_form" hidden>
                    <div class="pb-10 pb-lg-15">
                        <!--begin::Title-->
                        <h2 class="fw-bold text-dark">Ubicacion Interna</h2>
                        <!--end::Title-->
                    </div>
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label required">Ubicacion</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="ubicacion_interna" id="ubicacion_interna" class="form-select form-select-lg form-select-solid" data-control="select2"  data-placeholder="Selecccione" data-allow-clear="true" data-hide-search="false">
                            <option></option>
                        </select>
                        <!--end::Input-->
                    </div>
                </div>
                <div id="ubicacion_externa_form" hidden>
                    <div class="pb-10 pb-lg-15">
                        <!--begin::Title-->
                        <h2 class="fw-bold text-dark">Ubicacion Externa</h2>
                        <!--end::Title-->
                    </div>
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label required">Estado</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="estado" id="estado" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Selecccione" data-allow-clear="true" data-hide-search="false">
                            <option></option>
                            @foreach ( $datos_vista["estados_venezuela"] as $estados_venezuela)
                                <option value={{ $estados_venezuela->id }}> {{$estados_venezuela->estado}}</option>
                            @endforeach
                        </select>
                        <!--end::Input-->
                    </div>
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label required">Municipio</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="municipio" id="municipio" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Selecccione" data-allow-clear="true" data-hide-search="false">
                            <option></option>
                        </select>
                        <!--end::Input-->
                    </div>
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="form-label required">parroquia</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <select name="parroquia" id="parroquia" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Selecccione" data-allow-clear="true" data-hide-search="false">
                            <option></option>
                        </select>
                        <!--end::Input-->
                    </div>
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center form-label">
                            <span class="required">Direccion larga</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-semibold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bold mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input name="ubicacion_externa" id="ubicacion_externa" class="form-control form-control-lg form-control-solid" value="" />
                        <!--end::Input-->
                    </div>
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Step 2-->
        <!--begin::Step 3-->
        <div data-kt-stepper-element="content">
            <!--begin::Wrapper-->
            <div class="w-100">
                <!--begin::Heading-->
                <div class="pb-10 pb-lg-12">
                    <!--begin::Title-->
                    <h2 class="fw-bold text-dark">Seriales</h2>
                    <!--end::Title-->
                    <!--begin::Notice-->
                    <div class="text-muted fw-semibold fs-6">If you need more info, please check out
                    <a href="#" class="link-primary fw-bold">Help Page</a>.</div>
                    <!--end::Notice-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="form-label required">Serial unico</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input name="codigo_unico" id="codigo_unico" class="form-control form-control-lg form-control-solid"/>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center form-label">
                        <span class="required">Mac</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-semibold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bold mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input name="codigo_mac" id="codigo_mac" class="form-control form-control-lg form-control-solid"/>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--end::Input group-->
                <div class="fv-row mb-10">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center form-label">
                        <span class="codigo_ponk">Ponk</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-semibold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bold mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
                    </label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input name="codigo_ponk" id="codigo_ponk" class="form-control form-control-lg form-control-solid"/>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Step 3-->
        <!--begin::Step 4-->
        <div data-kt-stepper-element="content">
            <!--begin::Wrapper-->
            <div class="w-100">
                <!--begin::Heading-->
                <div class="pb-10 pb-lg-15">
                    <!--begin::Title-->
                    <h2 class="fw-bold text-dark">Observaciones</h2>
                    <!--end::Title-->
                    <!--begin::Notice-->
                    <div class="text-muted fw-semibold fs-6">Si el producto tiene alguna observacion que resalta porfavor describa de forma detalla en el siguente cuadro de texto
                    <a href="#" class="text-primary fw-bold">Help Page</a>.</div>
                    <!--end::Notice-->
                </div>
                <!--end::Heading-->
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-7 fv-row">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                        <span class="required">Observacion</span>
                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
                    </label>
                    <!--end::Label-->
                    <input type="text" name="observacion" id="observacion" class="form-control form-control-solid"/>
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Step 4-->
        <!--begin::Step 5-->
        <div data-kt-stepper-element="content">
            <!--begin::Wrapper-->
            <div class="w-100">
                <!--begin::Heading-->
                <div class="pb-8 pb-lg-10">
                    <!--begin::Title-->
                    <h2 class="fw-bold text-dark">Your Are Done!</h2>
                    <!--end::Title-->
                    <!--begin::Notice-->
                    <div class="text-muted fw-semibold fs-6">If you need more info, please
                    <a href="../../demo16/dist/authentication/sign-in/basic.html" class="link-primary fw-bold">Sign In</a>.</div>
                    <!--end::Notice-->
                </div>
                <!--end::Heading-->
                <!--begin::Body-->
                <div class="mb-0">
                    <!--begin::Text-->
                    <div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as much an art as it is a science and probably warrants its own post, but for all advise is with what works for your great &amp; amazing audience.</div>
                    <!--end::Text-->
                    <!--begin::Alert-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                        <!--begin::Icon-->
                        <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1">
                            <!--begin::Content-->
                            <div class="fw-semibold">
                                <h4 class="text-gray-900 fw-bold">We need your attention!</h4>
                                <div class="fs-6 text-gray-700">To start using great tools, please, please
                                <a href="#" class="fw-bold">Create Team Platform</a></div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                    <!--end::Alert-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Step 5-->
        <!--begin::Actions-->
        <div class="d-flex flex-stack pt-15">
            <!--begin::Wrapper-->
            <div class="mr-2">
                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                <span class="svg-icon svg-icon-4 me-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                        <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->Back</button>
            </div>
            <!--end::Wrapper-->
            <!--begin::Wrapper-->
            <div>
                <button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                    <span class="indicator-label">Submit
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                        </svg>
                    </span>
                    <!--end::Svg Icon--></span>
                    <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                <span class="svg-icon svg-icon-4 ms-1 me-0">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon--></button>
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</div>
@endsection
@push('scripts_page')
<script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('js/pages/private/user/registro_disponibilidad_existencia.js')}}"></script>
@endpush
