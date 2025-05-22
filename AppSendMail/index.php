<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>App Send Mail</title>
</head>
<body>
    <div class="container">
        <div class="py-3 text-center">
            <img src="logo.png" width="72" height="72" class="d-block mx-auto mb-2">
            <h2>Send Mail</h2>
            <p class="lead">Seu app de envio de e-mails particular!</p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body font-weight-bold">
                    <form action="">
                        <div class="form-group">
                            <label for="para">para</label>
                            <input type="text" id="para" class="form-control" placeholder="XXX@dominio.com">
                        </div>
                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <input type="text" id="assunto" class="form-control" placeholder="Assunto do e-mail">
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensgaem</label>
                            <textarea id="mensagem" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>