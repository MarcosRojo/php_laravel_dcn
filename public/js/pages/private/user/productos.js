
import parseError from '../../../helper/helpers.js'

// Define form element
const form = document.getElementById('form_crear_producto');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
            'marca': {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            'modelo': {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            'area': {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            'descripcion': {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.fv-row',
                eleInvalidClass: '',
                eleValidClass: ''
            })
        }
    }
);

// Submit button handler
const submitButton = document.getElementById('enviar_form_producto');
submitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            if (status == 'Valid') {
                var inputs = form.getElementsByTagName('input');
                var select = form.getElementsByTagName('select');
                let formulario_producto = new FormData;
                for (var index = 0; index < inputs.length; ++index) {
                    formulario_producto.append(inputs[index].name, inputs[index].value)
                }
                for (var index = 0; index < select.length; ++index) {
                    formulario_producto.append(select[index].name, select[index].value)
                }
                formulario_producto.append("_token", document.getElementById("_token").value);
                fetch("/productos/create", {
                    method: "POST",
                    body: formulario_producto,
                }).then( response => response.json())
                .then( response => {
                    if(response.result == "success"){
                        const swalWithBootstrapButtons = Swal.mixin({
                            customClass: {
                              confirmButton: 'btn btn-success',
                              cancelButton: 'btn btn-primary'
                            },
                            buttonsStyling: false
                          })

                          swalWithBootstrapButtons.fire({
                            title: response.msj,
                            text: "Desea Cargar un nuevo producto?",
                            icon: response.result,
                            showCancelButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Si',
                            cancelButtonText: 'No',
                          }).then((result) => {
                            if (result.isConfirmed) {
                              swalWithBootstrapButtons.fire(
                                'Cofirmado!',
                                'Se continuara con la cargar de un nuevo producto.',
                                'success'
                              )
                            } else if (
                              result.dismiss === Swal.DismissReason.cancel
                            ) {
                              swalWithBootstrapButtons.fire(
                                'Cancelado',
                                'Se continuara con la carga de un nuevo producto',
                                'success'
                              )
                                const modal_closer = document.getElementById('close_modal');
                                modal_closer.click();
                            }
                          })
                    }else{
                        Swal.fire({
                            title: response.msj,
                            text: parseError(response.errors),
                            icon: response.result,
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }

                })

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    submitButton.disabled = false;

                    // Show popup confirmation


                    //form.submit(); // Submit form
                }, 2000);
            }
        });
    }
});

$('#marca').on('select2:select', function (e) {
    const data = e.params.data;
    const marca_id = data.id;
    const select = document.getElementById('modelo');
    fetch(`/modelos/${marca_id}`, {
            method: 'get',
        }).then(response => response.json())
        .then(modelos => {
            var i, L = select.options.length - 0;
            for(i = L; i >= 1; i--) {
                select.remove(i);
            }
            modelos.forEach( element => {
                select.options.add(new Option(element.descripcion,element.id))
            });
        }).catch(errors =>{
            alert(`Ocurrio un error, comuniquese con el departamendo de sistemas, ${errors}`)
        })
});


//-----------------------------------update_form_productos-----------------//
const updateForm = document.getElementById('form_update_producto');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator_update = FormValidation.formValidation(
    updateForm,
    {
        fields: {
            'marca': {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            'modelo': {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            'area': {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            'descripcion': {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
        },

        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.fv-row',
                eleInvalidClass: '',
                eleValidClass: ''
            })
        }
    }
);

// Submit button handler
const submitUpdateButton = document.getElementById('send_form_update_producto');
submitUpdateButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator_update) {
        validator_update.validate().then(function (status) {
            if (status == 'Valid') {
                var inputs = updateForm.getElementsByTagName('input');
                var select = updateForm.getElementsByTagName('select');
                let formulario_update_producto = new FormData;
                for (var index = 0; index < inputs.length; ++index) {
                    formulario_update_producto.append(inputs[index].name, inputs[index].value)
                }
                for (var index = 0; index < select.length; ++index) {
                    formulario_update_producto.append(select[index].name, select[index].value)
                }
                formulario_update_producto.append("_token", document.getElementById("_token").value);
                formulario_update_producto.append("producto_id", document.getElementById("producto_id").value);
                fetch("/productos/update", {
                    method: "POST",
                    body: formulario_update_producto,
                }).then( response => response.json())
                .then( response => {
                    if(response.result == "success"){
                        const swalWithBootstrapButtons = Swal.mixin({
                            customClass: {
                              confirmButton: 'btn btn-success',
                              cancelButton: 'btn btn-primary'
                            },
                            buttonsStyling: false
                          })

                          swalWithBootstrapButtons.fire({
                            title: response.msj,
                            icon: response.result,
                            showCancelButton: true,
                            allowOutsideClick: false,
                            confirmButtonText: 'Si',
                          }).then((result) => {
                            if (result.isConfirmed) {
                                let modal_closer_editar = document.getElementById('close_modal_editar');
                                modal_closer_editar.click();
                            }
                          })
                    }else{
                        Swal.fire({
                            title: response.msj,
                            text: parseError(response.errors),
                            icon: response.result,
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                })

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    submitButton.disabled = false;

                    // Show popup confirmation


                    //form.submit(); // Submit form
                }, 2000);
            }
        });
    }
});

$('#update_marca').on('select2:select', function (e) {
    $('#update_modelo').html('');
    const data = e.params.data;
    const marca_id = data.id;
    const select = document.getElementById('update_modelo');
    fetch(`/modelos/${marca_id}`, {
            method: 'get',
        }).then(response => response.json())
        .then(modelos => {
            var i, L = select.options.length - 0;
            for(i = L; i >= 1; i--) {
                select.remove(i);
            }
            modelos.forEach( element => {
                select.options.add(new Option(element.descripcion,element.id))
            });
        }).catch(errors =>{
            alert(`Ocurrio un error, comuniquese con el departamendo de sistemas, ${errors}`)
        })
});
