@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Ficha del Ticket
@endsection

@section('contentheader_title')
    FICHA DEL TICKET
@endsection

@section('main-content')

    <section class="invoice">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-road"></i> RUTA: {{  $fc -> name }}
                    <small class="pull-right">Fecha: {{  $fc -> created_at }}</small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-3 invoice-col">
                <img src="/img/logo_saopse.png" alt="">
            </div>
            <!-- /.col -->
            <div class="col-sm-5 invoice-col">
                <strong>ANTECEDENTES:</strong>
                <table class="table table-striped">
                    <tr>
                        <td><b>ID</b></td>
                        <td>:</td>
                        <td>{{  $fc -> id_complaints }}</td>
                    </tr>
                    <tr>
                        <td><b>FOLIO</b></td>
                        <td>:</td>
                        <td>{{  $fc -> id_complaints }}</td>
                    </tr>
                    <tr>
                        <td><b>TIPO TICKET</b></td>
                        <td>:</td>
                        <td>{{  $fc -> type_contact }}</td>
                    </tr>
                    <tr>
                        <td><b>ESTADO</b></td>
                        <td>:</td>
                        <td>@if( $fc -> state == 1)
                                <button type="button" class="btn btn-danger btn-xs" data-toggle="tooltip"
                                        title="Abierto">
                                    <i class="fa fa-times"></i> No Resuelto
                                </button>
                            @elseif($fc->state ==2)
                                <button type="button" class="btn btn-success btn-xs" data-toggle="tooltip"
                                        title="Cerrado">
                                    <i class="fa fa-check"></i> Resuelto
                                </button>
                            @else
                                <button type="button" class="btn btn-warning btn-xs" data-toggle="tooltip"
                                        title="Con Observaciones">
                                    <i class="fa fa-info"></i> Con Observaciones
                                </button>
                            @endif</td>
                    </tr>
                    <tr>
                        <td><b>ASUNTO</b></td>
                        <td>:</td>
                        <td>{{  $fc -> subject }}</td>
                    </tr>
                </table>

            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <strong>DATOS PERSONALES:</strong>
                <table class="table table-striped">
                    <tr>
                        <td><b>RUT</b></td>
                        <td>:</td>
                        <td>{{  $fc -> rut_person }}</td>
                    </tr>
                    <tr>
                        <td><b>NOMBRE</b></td>
                        <td>:</td>
                        <td>{{  $fc -> name_person }}</td>
                    </tr>
                    <tr>
                        <td><b>DIRECCIÓN</b></td>
                        <td>:</td>
                        <td>{{  $fc -> address }}, {{$fc -> city}}</td>
                    </tr>
                    <tr>
                        <td><b>TELÉFONO</b></td>
                        <td>:</td>
                        <td>{{  $fc -> phone }}</td>
                    </tr>
                    <tr>
                        <td><b>CORREO</b></td>
                        <td>:</td>
                        <td>{{  $fc -> email }}</td>
                    </tr>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <center><h2>FICHA DEL TICKET</h2></center>

        <hr>
        <center>
            <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#notificar"><i
                        class="fa fa-paper-plane-o"></i> Notificar Respuesta
            </button>
        </center>

        <hr>

        <div class="row">
            <!-- accepted payments column -->

            <div class="col-xs-12">
                <p class="lead"><i class="fa fa-edit"></i> <b>MENSAJE:</b></p>

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    {{  $fc -> message }}
                </p>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <p class="lead"><i class="fa fa-car"></i> <b>VEHÍCULO INVOLUCRADO:</b>
                </p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Tipo</th>
                        <th>Placa Patente</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>{{  $fc -> type_vehicle }}</td>
                        <td>{{  $fc -> pp_vehicle }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <p class="lead"><i class="fa fa-file"></i> <b>DOCUMENTOS:</b>
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#documentos">
                        <i class="fa fa-file"></i> Agregar
                    </button>
                </p>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>N°</th>
                        <th>Nombre Documento</th>
                        <th>Tipo Documento</th>
                        <th>Ver Documento</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <hr>
        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i>
                    Imprimir Ficha</a>
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
                    <i class="fa fa-download"></i> Generar Informe en PDF
                </button>
            </div>
        </div>
    </section>

    <div class="modal fade" id="documentos"
         tabindex="-1" role="dialog"
         aria-labelledby="favoritesModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"
                        id="favoritesModalLabel">Documentos</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="form" action="{{ url('Documentos/Guardar') }}" role="form"
                          method="POST" enctype="multipart/form-data">

                        <div class="box-body">

                            <P>Adjuntar documentos a la respuesta.</P>  <br>

                            <input type="hidden" name="id_accidente" value="">

                            {{--Tipo Accidente(1) o Incidente(2)--}}
                            <input type="hidden" name="tipo" value="1">

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Nombre Doc:</label>
                                <div class="col-sm-8">
                                    <input class="form-control pull-right" type="text" name="doc" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Documento:</label>
                                <div class="col-sm-8">
                                    <input type="file">
                                </div>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div><!-- /.box-body -->


                </div>
                <div class="modal-footer">
                    <div class="box-footer">
                        <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                        <button name="boton" type="submit" class="btn btn-success pull-right">Agregar Documento</button>
                    </div><!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="notificar"
         tabindex="-1" role="dialog"
         aria-labelledby="favoritesModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal"
                            aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"
                        id="favoritesModalLabel">Respuesta Ticket</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" name="form" action="{{ url('Ticket/Responder') }}" role="form"
                          method="POST" enctype="multipart/form-data">

                        <div class="box-body">

                            <P>Respuesta del Ticket al Usuario vía Correo Electrónico.</P>  <br>

                            <input type="hidden" name="id_accidente" value="">

                            {{--Tipo Accidente(1) o Incidente(2)--}}
                            <input type="hidden" name="tipo" value="1">

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">CC:</label>
                                <div class="col-sm-8">
                                    <input class="form-control pull-right" type="email" name="email1">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">CCO:</label>
                                <div class="col-sm-8">
                                    <input class="form-control pull-right" type="email" name="email1">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" class="col-sm-2 control-label">Mensaje:</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control pull-right" name="mensaje" id="" cols="10" rows="5"
                                              required></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div><!-- /.box-body -->

                        <div class="modal-footer">
                            <div class="box-footer">
                                <button type="reset" class="btn btn-default">Limpiar Formulario</button>
                                <button name="boton" type="submit" class="btn btn-danger pull-right">Responder</button>
                            </div><!-- /.box-footer -->
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>


@endsection
