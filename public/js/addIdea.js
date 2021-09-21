// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')
    var ok = false;
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    ok = false;
                } else {
                    ok = true;
                }

                form.classList.add('was-validated')
            }, false)
        })
    if( ok ) {
        window.location = '{{ path("view_idea") }}';
    }
})()
