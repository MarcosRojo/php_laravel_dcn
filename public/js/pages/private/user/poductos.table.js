"use strict";

var KTDatatablesExample = function() {

    $.fn.dataTable.Api.register('column().title()', function() {
        return $(this.header()).text().trim();
    });
    var initTable1 = function() {
        // begin first table
        var table = $('#table_productos').DataTable({
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
                url: '/productos/show',
                type: 'GET',
                data: {
                    // parameters for custom backend script demo
                    columnsDef: [
                        'producto_id', 'producto_descripcion',
                        'marcas_descripcion', 'modelo_descripcion',
                        'area_descripcion' , 'disponibilidad_id',
                    ],
                },
            },
            columns: [
                { data: 'marcas_descripcion' },
                { data: 'modelo_descripcion' },
                { data: 'producto_descripcion' },
                { data: 'area_descripcion' },
                { data: 'disponibilidad_id', orderable: false },
                { data: 'producto_id', orderable: false },
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
                { "width": "20%", "targets": 1 },
                { "width": "20%", "targets": 2 },
                {
                    targets: 4,
                    width: "20%",
                    render: function(data, type, full, meta) {
                        if(!data){
                            return `<div class="d-flex align-items-center me-2">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-3">
                            <div class="symbol-label bg-light-danger">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-danger">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"></path>
                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div>
                            <div class="fs-4 text-dark fw-bold">0</div>
                            <div class="fs-7 text-muted fw-bold">Sin existencia</div>
                        </div>
                        <!--end::Title-->
                    </div>`;
                        }else{
                            return `<div class="d-flex align-items-center me-2">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-3">
                                <div class="symbol-label bg-light-success">
                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-success">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor"></path>
                                            <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor"></path>
                                            <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Title-->
                            <div>
                                <div class="fs-4 text-dark fw-bold">1</div>
                                <div class="fs-7 text-muted fw-bold">Con disponibilidad</div>
                            </div>
                            <!--end::Title-->
                        </div>`
                        }

                    },
                },
                {
                    width: "20%",
                    targets: 5,
                    data: null,
                    orderable: false,
                    className: 'text-center',
                    render: function (data, type, row) {
                        return `
                        <a href="#" onclick="alertas(${data})" class="btn btn-icon btn-color-primary bg-body w-40px h-40px me-3" data-bs-toggle="modal" data-bs-target="#modal_update_producto">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eraser-fill" viewBox="0 0 16 16">
                                    <path d="M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828l6.879-6.879zm.66 11.34L3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293l.16-.16z"/>
                                </svg>
                            </span>
                        </a>
                        `;
                    },
                },

             ],
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
        const t = $('#table_productos').DataTable();
        $('#enviar_form_producto').on( 'click', function () {
        table.ajax.reload()
        } );
        $('#send_form_update_producto').on( 'click', function () {
            table.ajax.reload()
            } );
        var order = table.order( [ 5, 'asc' ] ).draw();


    // Automatically add a first row of data

    };
    return {
        //main function to initiate the module
        init: function() {
            initTable1();
        },

    };
}();

function alertas(producto_id){
    $('#update_modelo').html('');
    fetch(`/productos/store/${producto_id}`)
    .then(res => res.json())
    .then(res => {
        res.forEach(element => {
            document.getElementById("producto_id").value = element.producto_id;
            $("#update_marca").select2("val", `${element.marca_id}`);
            $("#update_modelo").append(`<option value="${element.modelo_id}">${element.modelo_descripcion}</option>`);
            $("#update_area").select2("val", `${element.area_id}`);
            document.getElementById("update_descripcion").value = element.producto_descripcion
        });
    })
}

$("#update_modelo").on("select2:unselecting", function (e) {
    let marca_id = document.getElementById("update_marca").value
    $('#update_modelo').html('');
    fetch(`modelos/${marca_id}`, {
        method: 'GET',
    }).then(response => response.json())
    .then(response => {
        response.forEach(element => {
            $("#update_modelo").append(`<option value="${element.id}">${element.descripcion}</option>`);
        });
    })
})


$( document ).ready(function() {
    KTDatatablesExample.init();

});

