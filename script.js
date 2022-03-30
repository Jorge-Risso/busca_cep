
 function buscaDados(cep){
    let cidade = document.getElementById('cidade');
    let bairro = document.getElementById('bairro');
    let rua = document.getElementById('rua');
    let url ='https://viacep.com.br/ws/'+cep+'/json/unicode'
    let xmlHttp = new XMLHttpRequest();

    xmlHttp.open("GET", url)

    xmlHttp.onreadystatechange = () =>{
        if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
            let dadosTxt = xmlHttp.responseText
            let dadosJson = JSON.parse(dadosTxt)
            console.log(dadosJson)
            cidade.value = dadosJson['localidade']
            bairro.value = dadosJson['bairro']
            rua.value = dadosJson['logradouro']
        }
    }
    xmlHttp.send()
 }

