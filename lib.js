
//FAZER LOGIN
function login() {

    var online = navigator.onLine;
    if(online) {
        var forms = document.getElementsByClassName("needs-validation");
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.classList.add("was-validated");
        });

        if (document.querySelector("#senha").checkValidity() === true && document.querySelector("#email").checkValidity() === true) {

            var email = document.getElementById("email").value;
            var senha = document.getElementById("senha").value;

            $.cardProgress('#cadastroLogin');
            $.ajax({
                type: "POST",
                url: "loga.php",
                data: "email=" + email + "&senha=" + senha,
                dataType: "json"
            }).done(function (retorno) {
                $.cardProgressDismiss('#cadastroLogin');
                if (retorno.error == '0') {
                    $.cardProgressDismiss('#cadastroLogin');
                    window.location.href = retorno.redireciona;
                } else {
                    $.cardProgressDismiss('#cadastroLogin');
                    iziToast.error({title: 'Erro!', message: retorno.msg, position: 'bottomRight'});
                }
            }).fail(function (retorno) {
                $.cardProgressDismiss('#cadastroLogin');
                iziToast.error({title: 'Erro!', message: 'Tente novamente mais tarde', position: 'bottomRight'});

            });
        }
    } else {
        iziToast.error({title: 'Erro!', message: 'Sem internet', position: 'bottomRight'});

    }
}