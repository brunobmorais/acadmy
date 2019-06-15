/*FUNÇÃO VOLTAR NO NAVEGADO*/
function goBack() {
    window.history.back();
}

//FUNÇÃO MASCARAS
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mcep(v){
    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/^(\d{5})(\d)/,"$1-$2")         //Esse é tão fácil que não merece explicações
    return v
}
function mtel(v){
    v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function cnpj(v){
    v=v.replace(/\D/g,"")                           //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/,"$1.$2")             //Coloca ponto entre o segundo e o terceiro dígitos
    v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
    v=v.replace(/\.(\d{3})(\d)/,".$1/$2")           //Coloca uma barra entre o oitavo e o nono dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")              //Coloca um hífen depois do bloco de quatro dígitos
    return v
}
function mcpf(v){
    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                             //de novo (para o segundo bloco de números)
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
    return v
}
function mdata(v){
    v=v.replace(/\D/g,"");                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{2})(\d)/,"$1/$2");
    v=v.replace(/(\d{2})(\d)/,"$1/$2");

    v=v.replace(/(\d{2})(\d{2})$/,"$1$2");
    return v;
}
function mtempo(v){
    v=v.replace(/\D/g,"");                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{1})(\d{2})(\d{2})/,"$1:$2.$3");
    return v;
}
function mhora(v){
    v=v.replace(/\D/g,"");                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{2})(\d)/,"$1h$2");
    return v;
}
function mrg(v){
    v=v.replace(/\D/g,"");                                      //Remove tudo o que não é dígito
    v=v.replace(/(\d)(\d{7})$/,"$1.$2");    //Coloca o . antes dos últimos 3 dígitos, e antes do verificador
    v=v.replace(/(\d)(\d{4})$/,"$1.$2");    //Coloca o . antes dos últimos 3 dígitos, e antes do verificador
    v=v.replace(/(\d)(\d)$/,"$1-$2");               //Coloca o - antes do último dígito
    return v;
}
function mnum(v){
    v=v.replace(/\D/g,"");                                      //Remove tudo o que não é dígito
    return v;
}
function mvalor(v){
    v=v.replace(/\D/g,"");//Remove tudo o que não é dígito
    v=v.replace(/(\d)(\d{8})$/,"$1.$2");//coloca o ponto dos milhões
    v=v.replace(/(\d)(\d{5})$/,"$1.$2");//coloca o ponto dos milhares

    v=v.replace(/(\d)(\d{2})$/,"$1,$2");//coloca a virgula antes dos 2 últimos dígitos
    return v;
}

function cpfCnpj(v){

    //Remove tudo o que não é dígito
    v=v.replace(/\D/g,"")

    if (v.length < 14) { //CPF

        v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos//de novo (para o segundo bloco de números)
        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos

    } else { //CNPJ

        v = v.replace( /^(\d{2})(\d)/ , "$1.$2"); //Coloca ponto entre o segundo e o terceiro dígitos
        v = v.replace( /^(\d{2})\.(\d{3})(\d)/ , "$1.$2.$3"); //Coloca ponto entre o quinto e o sexto dígitos
        v = v.replace( /\.(\d{3})(\d)/ , ".$1/$2"); //Coloca uma barra entre o oitavo e o nono dígitos
        v = v.replace( /(\d{4})(\d)/ , "$1-$2"); //Coloca um hífen depois do bloco de quatro dígitos

    }

    return v
}
//FIM DE MASCARAS

//REMOVE OQUE NÃO FOR DIGITO
function removeCaracteres(str) {
    return str.replace(/[^\d]+/g,'')
}

// MÁSCARA DE VALORES
function txtBoxFormat(objeto, sMask, evtKeyPress) {
    var i, nCount, sValue, fldLen, mskLen,bolMask, sCod, nTecla;

    if(document.all) {
        // Internet Explorer
        nTecla = evtKeyPress.keyCode;
    } else if(document.layers) {
        // Nestcape
        nTecla = evtKeyPress.which;
    } else {
        nTecla = evtKeyPress.which;

        if ((nTecla == 8) || (nTecla == 13) || (nTecla == 0)) {
            return true;
        }
    }

    sValue = objeto.value;

    // Limpa todos os caracteres de formatação que
    // já estiverem no campo.
    sValue = sValue.toString().replace( "-", "" );
    sValue = sValue.toString().replace( "-", "" );
    sValue = sValue.toString().replace( ".", "" );
    sValue = sValue.toString().replace( ".", "" );
    sValue = sValue.toString().replace( "/", "" );
    sValue = sValue.toString().replace( "/", "" );
    sValue = sValue.toString().replace( ":", "" );
    sValue = sValue.toString().replace( ":", "" );
    sValue = sValue.toString().replace( "(", "" );
    sValue = sValue.toString().replace( "(", "" );
    sValue = sValue.toString().replace( ")", "" );
    sValue = sValue.toString().replace( ")", "" );
    sValue = sValue.toString().replace( " ", "" );
    sValue = sValue.toString().replace( " ", "" );
    fldLen = sValue.length;
    mskLen = sMask.length;

    i = 0;
    nCount = 0;
    sCod = "";

    if (objeto.value.length == 0) {
        mskLen = fldLen;
    } else {
        mskLen = fldLen - 1;
    }

    while (i <= mskLen) {
        bolMask = ((sMask.charAt(i) == "-") || (sMask.charAt(i) == ".") || (sMask.charAt(i) == "/") || (sMask.charAt(i) == ":"))
        bolMask = bolMask || ((sMask.charAt(i) == "(") || (sMask.charAt(i) == ")") || (sMask.charAt(i) == " "))

        if (bolMask) {
            sCod += sMask.charAt(i);
            mskLen++;
        } else {
            sCod += sValue.charAt(nCount);
            nCount++;
        }

        i++;
    }

    objeto.value = sCod;

    if (nTecla != 8) {
        // backspace
        if (sMask.charAt(i-1) == "9") {
            // apenas números...
            return ((nTecla > 47) && (nTecla < 58));
        } else {
            // qualquer caracter...
            return false;
        }
    } else {
        return true;
    }
}

function excluirItemTabela(id) {
    swal({
        title: 'Deseja excluir esse item?',
        text: 'Uma vez deletado, você não poderá recuperar este arquivo!',
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3F51B5',
        confirmButtonText: 'Sim',
        cancelButtonText: 'Não',
    })
        .then((result) => {
            if (result.value) {
                document.getElementById('id').value = id;
                document.getElementById('formExcluir').submit();
            }
        });
}

function ativarProgress(campo, progress) {
    if (campo != null) {
        campo.fadeOut(0);
    }
    progress.fadeIn(700);
}

function cancelarProgress(campo, progress) {
    if (campo != null) {
        campo.fadeIn(0);
    }
    progress.fadeOut(0);
}

function primeiraLetraMaiuscula(text) {
    var loweredText = text.toLowerCase();
    var words = loweredText.split(" ");
    for (var a = 0; a < words.length; a++) {
        var w = words[a];

        var firstLetter = w[0];

        if (w.length > 2) {
            w = firstLetter.toUpperCase() + w.slice(1);
        } else {
            w = firstLetter + w.slice(1);
        }

        words[a] = w;
    }
    return words.join(" ");
}

function minuscula(texto) {
    return texto.toLowerCase();
}

function maiuscula(texto) {
    return texto.toUpperCase();
}


