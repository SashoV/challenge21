<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>{{ $title }}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-custom">
        <div class="container col-md-8 col-md-offset-2">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="/images/brainster_logo.png" alt="logo_image"
                            width="50px"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="https://codepreneurs.brainster.co/">Академија за Програмирање</span></a></li>
                    <li><a href="https://marketpreneurs.brainster.co/">Академија за маркетинг</a></li>
                    <li><a href="https://design.brainster.co/">Академија за Дизајн</a></li>
                    <li><a href="https://blog.brainster.co/" class="oneRowLink">Блог</a></li>
                    <li><a href="#myModal2" data-toggle="modal" data-target="#myModal2">Вработи наши студенти</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Вработи наши студенти</h4>
                </div>
                <div class="modal-body">
                    <form method="POST"
                        action="https://yahoo.us10.list-manage.com/subscribe/post?u=8b27931f8db652b4b38a454d9&amp;id=1ea77f34ac"
                        id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                        target="_blank" novalidate>
                        <h5>Внесете Ваши информации за да стапиме во контакт:</h5>
                        <div class="form-group">
                            <label for="email">Е-мејл</label>
                            <input type="email" class="form-control" id="email" name="EMAIL" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Телефон</label>
                            <input type="text" class="form-control" id="phone" name="PHONE" value="" required>
                        </div>
                        <div class="form-group">
                            <label for="company">Компанија</label>
                            <input type="text" class="form-control" id="company" name="COMPANY" value="" required>
                        </div>
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                name="b_8b27931f8db652b4b38a454d9_1ea77f34ac" tabindex="-1" value=""></div>
                        <button type="submit" class="btn btn-default long-btn">Испрати</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>