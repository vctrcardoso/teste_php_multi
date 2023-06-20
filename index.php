<!DOCTYPE html>
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Multidados TI</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta name="MobileOptimized" content="320">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<?php
$data = include './DataRequest.php';
$data = new DataRequest;
?>

<body class="page-header-fixed">
    <!-- BEGIN HEADER -->
    <?php include('cabecalho.php'); ?>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <?php include('menu.php'); ?>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">

            <div class="page-content">
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                Widget settings form goes here
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn blue">Save changes</button>
                                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <!-- BEGIN PAGE HEADER-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                        <h3 class="page-title">
                            Dashboard <small>tudo que você precisa à um click.</small>
                        </h3>

                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="pull-right">
                                <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                                    <i class="fa fa-calendar"></i>
                                    <span>
                                    </span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                            </li>
                        </ul>
                        <!-- END PAGE TITLE & BREADCRUMB-->
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <!-- BEGIN DASHBOARD STATS -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="dashboard-stat blue">
                            <div class="visual">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <?php echo $data->dadosClientes('c'); ?>
                                </div>
                                <div class="desc">
                                    Clientes
                                </div>
                            </div>
                            <a class="more" href="#" onclick="changeTable('blue', 'dadosClientes')">
                                Visualizar <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="dashboard-stat green">
                            <div class="visual">
                                <i class="fa fa-group"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <?php echo $data->dadosUsuarios('c'); ?>
                                </div>
                                <div class="desc">
                                    Usuários
                                </div>
                            </div>
                            <a class="more" href="#" onclick="changeTable('green', 'dadosUsuarios')">
                                Visualizar <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="dashboard-stat purple">
                            <div class="visual">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="details">
                                <div class="number">
                                    <?php echo $data->dadosFornecedores('c'); ?>
                                </div>
                                <div class="desc">
                                    Fornecedores
                                </div>
                            </div>
                            <a class="more" href="#" onclick="changeTable('purple', 'dadosFornecedores')">
                                Visualizar <i class="m-icon-swapright m-icon-white"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END DASHBOARD STATS -->
                <div class="clearfix">
                </div>
                <!--Tabela-->
                <div class="row">
                    <div class="col-md-12">
                        <!-- BEGIN SAMPLE TABLE PORTLET-->
                        <div class="portlet box grey">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-folder-open"></i>Tabela Simples
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead id="titulo">
                                            <tr>
                                                <th>
                                                    #
                                                </th>
                                                <th>
                                                    Nome
                                                </th>
                                                <th>
                                                    Sobrenome
                                                </th>
                                                <th>
                                                    Usuario
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="tabela">
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Mark
                                                </td>
                                                <td>
                                                    Otto
                                                </td>
                                                <td>
                                                    makr124
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-success">
                                                        Aprovado
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Jacob
                                                </td>
                                                <td>
                                                    Nilson
                                                </td>
                                                <td>
                                                    jac123
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-info">
                                                        Pendente
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Larry
                                                </td>
                                                <td>
                                                    Cooper
                                                </td>
                                                <td>
                                                    lar
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning">
                                                        Suspenso
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    Sandy
                                                </td>
                                                <td>
                                                    Lim
                                                </td>
                                                <td>
                                                    sanlim
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-danger">
                                                        Bloqueado
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END SAMPLE TABLE PORTLET-->
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <?php include('rodape.php'); ?>
    <!-- END FOOTER -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery.cockie.min.js" type="text/javascript"></script>
    <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/scripts/app.js" type="text/javascript"></script>
    <script src="assets/scripts/index.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        function changeTable(color, metodo) {

            var lastClass = $('.box').attr('class').split(' ').pop();
            let box = $('.box').removeClass(lastClass).addClass(color);
            $.ajax({
                url: 'DataRequest.php',
                method: 'post',
                data: {
                    metodo: metodo
                },
                success: function(response) {
                    let html = '<tr>';
                    let dados = $.parseJSON(response);
                    $('#tabela').empty();
                    $('#titulo').empty();
                    let key = dados.map(inner => Object.keys(inner))[0];
                    $('#titulo').append('<th>#</th>');
                    for (i = 0; i < key.length; i++) {
                        $('#titulo').append($('<th />', {text : key[i]}));
                    }

                    for (i = 0; i < dados.length; i++) {
                        if (key.length == 5) {
                            $('#tabela').append('<tr><td>' + i + '</td>' +
                                '<td>' + dados[i].nome + '</td>' +
                                '<td>' + dados[i].cpf + '</td>' +
                                '<td>' + dados[i].endereco + '</td>' +
                                '<td>' + dados[i].telefone + '</td>' +
                                '<td>' + (dados[i].usuario == undefined ? dados[i].email : dados[i].usuario) + '</td></tr>');
                        } else {
                            $('#tabela').append('<tr><td>' + i + '</td>' +
                                '<td>' + dados[i].nome + '</td>' +
                                '<td>' + dados[i].cpf + '</td>' +
                                '<td>' + dados[i].cidade + '</td>' +
                                '<td>' + dados[i].email + '</td></tr>');
                        }

                    }



                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }
        jQuery(document).ready(function() {
            App.init(); // initlayout and core plugins
            Index.init();
        });
    </script>
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>