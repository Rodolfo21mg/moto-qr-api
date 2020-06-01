<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moto - QR</title>

    <!-- Bootstrap -->
    <!-- Última versão CSS compilada e minificada -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="form-row">
        <div style="text-align:center;">
            <img src="../logo/logo.PNG" alt="40px" height="80px">
        </div>
    </div>
    <div class="form-row">
        <div style="text-align:center;">
        <img style="border-radius: 50%" src="../profile/{{ $usuario->profile}}" alt="40px" height="180px">
        </div>
    </div>
    <div class="form-group col-md-12">
        <div class="card">
            <div class="card-body" style="text-align: center">
                <h4>REFERÊNCIAS PESSOAIS</h4>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control" id="inputEmail4" value="{{ $usuario->nome}}" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">CPF</label>
            <input type="text" class="form-control" id="inputPassword4" value="{{ $usuario->cpf}}" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputCity">Endereço</label>
            <input type="text" class="form-control" value="{{ $usuario->endereco}}" id="inputCity" readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Idade</label>
            <input type="text" class="form-control" value="{{ $usuario->idade}}" id="inputCity" readonly>
        </div>
        <div class="form-group col-md-6">
            <label for="inputCity">Naturalidade</label>
            <input type="text" class="form-control" value="{{ $usuario->naturalidade}}" id="inputCity" readonly>
        </div>
    </div>
    <div class="form-group col-md-12">
        <div class="card">
            <div class="card-body" style="text-align: center">
                <h4>REFERÊNCIAS MÉDICAS</h4>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputCity">Tipo Sanguíneo</label>
            <input type="text" class="form-control" value="{{ $usuario->sangue}}" id="inputCity" readonly>
        </div>

        <div class="form-group col-md-6">
            <label for="inputCity">Convênio Médico</label>
            <input type="text" class="form-control" value="{{ $usuario->conveniomed}}" id="inputCity" readonly>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputCity">Observações Médicas</label>
                <textarea  type="text" class="form-control" value="" id="inputCity" row="3" readonly>{{ $usuario->obsmed}}</textarea>
            </div>
        </div>
    </div>
    <div class="form-group col-md-12">
        <div class="card">
            <div class="card-body" style="text-align: center">
                <h4>AJUDE O MOTOCICLISTA</h4>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12" style="text-align:center">
            <button type="submit" class="btn btn-danger">Contatos de Emergência</button>
            <button type="submit" class="btn btn-primary">Upload de Fotos</button>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="inputCity">*Contatos de Emergência: uma mensagem é enviada a contatos cadastrados pelo motociclista.</label>
        </div>
        <div class="form-group col-md-12">
            <label for="inputCity">*Upload de Fotos: envie fotos dos veículos envolvidos. Não envie fotos das vítimas envolvidas no acidente.</label>
        </div>
    </div>
    </div>
    <div class="form-group form-row col-md-12">
        <div class="card">
            <div class="card-body" style="text-align: center">
                Conheça a Moto-QR através do site:<a href="http://motoqr-com-br.umbler.net/public/">
                    <h5>www.motoqr.com.br</h5>
                </a>
            </div>
        </div>
    </div>

    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>