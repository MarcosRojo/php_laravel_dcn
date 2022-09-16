"use strict";

var KTDatatablesExample = function() {

    $.fn.dataTable.Api.register('column().title()', function() {
        return $(this.header()).text().trim();
    });
    var initTable1 = function() {
        // begin first table
        var table = $('#kt_datatable').DataTable({
            responsive: true,
            // Pagination settings
            dom: `<'row'<'col-sm-12'tr>>
			<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
            // read more: https://datatables.net/examples/basic_init/dom.html

            lengthMenu: [5, 10, 25, 50],

            pageLength: 10,

            language: {
                'lengthMenu': 'Display _MENU_',
            },
            searchDelay: 500,
            processing: true,
            serverSide: true,
            ajax: {
                url: '/marcas/show',
                type: 'GET',
                data: {
                    // parameters for custom backend script demo
                    columnsDef: [
                        'id', 'descripcion', 'status',
                    ],
                },
            },
            columns: [
                { data: 'descripcion' },
                { data: 'status' },
                { data: 'id', orderable: false },
            ],
            initComplete: function() {/*
                this.api().columns().every(function() {
                    var column = this;
                    switch (column.title()) {
                        case 'Ubicacion':
                            column.data().unique().sort().each(function(d, j) {
                                $('.datatable-input[data-col-index="5"]').append('<option value="' + d + '">' + d + '</option>');
                            });
                            break;
                    }

                }); */
            },
            columnDefs: [
                {
                    targets: 2,
                    data: null,
                    orderable: false,
                    className: 'text-end',
                    render: function (data, type, row) {
                        return `
                        <a href="#" class="btn btn-icon btn-color-primary bg-body w-40px h-40px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                            <!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16 14C16.4 13.6 16.4 12.9 16 12.5C15.6 12.1 15.4 12.6 15 13L11 16L9 15C8.6 14.6 8.4 14.1 8 14.5C7.6 14.9 8.1 15.6 8.5 16L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="currentColor"></path>
                                    <path d="M10.4343 15.4343L9.25 14.25C8.83579 13.8358 8.16421 13.8358 7.75 14.25C7.33579 14.6642 7.33579 15.3358 7.75 15.75L10.2929 18.2929C10.6834 18.6834 11.3166 18.6834 11.7071 18.2929L16.25 13.75C16.6642 13.3358 16.6642 12.6642 16.25 12.25C15.8358 11.8358 15.1642 11.8358 14.75 12.25L11.5657 15.4343C11.2533 15.7467 10.7467 15.7467 10.4343 15.4343Z" fill="currentColor"></path>
                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <a href="#" class="btn btn-icon btn-color-danger bg-body w-40px h-40px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor"></path>
                                    <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor"></rect>
                                    <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor"></rect>
                                    <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor"></rect>
                                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        `;
                    },
                },
                /*{
                    targets: 6,
                    render: function(data, type, full, meta) {
                        return `
                        <button  class="btn btn-lg btn-hover-bg-success btn-text-success btn-hover-text-white border-0 font-weight-bold mr-2" data-toggle="modal" data-target="#modal_inmueble">
                        Mas informacion...
                        </button>
                    `;
                    },
                },
                { "width": "100px", "targets": [7] },
                {
                    targets: 7,
                    render: function(data, type, full, meta) {
                        return `<div class="dropdown dropdown-inline">
                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown" title="Documentos">
                            <span class="svg-icon svg-icon-md">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000"/>
                                    </g>
                                </svg>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <ul class="navi flex-column navi-hover py-2">
                                <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                    Seleccione una Opcion:
                                </li>
                                <li class="navi-item">
                                    <a  data-toggle="modal" data-target="#modal_ficha_inmueble"  class="navi-link">
                                        <span class="navi-icon"><i class="la la-clipboard-list"></i></span>
                                        <span class="navi-text">Ver ficha</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    `;
                    },
                },
             */],
        });
        var filter = function() {
            var val = $.fn.dataTable.util.escapeRegex($(this).val());
            table.column($(this).data('col-index')).search(val ? val : '', false, false).draw();
        };

        var asdasd = function(value, index) {
            var val = $.fn.dataTable.util.escapeRegex(value);
            table.column(index).search(val ? val : '', false, true);
        };
        $('#kt_search').on('click', function(e) {
            e.preventDefault();
            var params = {};
            $('.datatable-input').each(function() {
                var i = $(this).data('col-index');
                if (params[i]) {
                    params[i] += '|' + $(this).val();
                } else {
                    params[i] = $(this).val();
                }
            });
            $.each(params, function(i, val) {
                // apply search params to datatable
                table.column(i).search(val ? val : '', false, false);
            });
            table.table().draw();
        });
        $('#kt_reset').on('click', function(e) {
            e.preventDefault();
            $('.datatable-input').each(function() {
                $(this).val('');
                table.column($(this).data('col-index')).search('', false, false);
            });
            table.table().draw();
        });
        const t = $('#kt_datatable').DataTable();


    $('#registrar_marca').on( 'click', function () {
        table.ajax.reload()
    } );

    // Automatically add a first row of data

    };
    return {
        //main function to initiate the module
        init: function() {
            initTable1();
        },

    };
}();


// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesExample.init();
});


