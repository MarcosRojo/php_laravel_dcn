
import parseError from '../../../helper/helpers.js'

"use strict"

// Define form element
const form = document.getElementById('form_nueva_marca');

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    form,
    {
        fields: {
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
const submitButton = document.getElementById('registrar_marca');
submitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();

    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            if (status == 'Valid') {
                let formulario_marca = new FormData;
                formulario_marca.append("_token", document.getElementById("_token").value);
                formulario_marca.append("descripcion", document.getElementById("descripcion").value);
                fetch("/marcas/create", {
                    method: "POST",
                    body: formulario_marca,
                }).then( response => response.json())
                .then( response => {
                    if(response.result == "succes"){
                        Swal.fire({
                            text: "Form has been successfully submitted!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
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
                .catch(error =>{
                    console.log(error);
                });

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





