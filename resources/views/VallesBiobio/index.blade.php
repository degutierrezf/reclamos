@extends('adminlte::layouts.app')
@section('htmlheader_title')
@endsection


@section('main-content')

    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>150</h3>

                    <p>Reclamos</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>

                    <p>Consultas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>44</h3>

                    <p>Sugerencias</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>65</h3>

                    <p>Felicitaciones</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Grilla de Tickets Pendientes</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Acciones</th>
                    <th>Fecha Apertura</th>
                    <th>Tipo Ticket</th>
                    <th>Nombre / Fono</th>
                    <th>Días desde apertura</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    foreach ($complaints as $c){ ?>
                        <td>{{ $c->id_complaints }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn-xs btn-success dropdown-toggle"  data-toggle="dropdown"><i class="fa fa-cog"></i> Menú </button>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Responder</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Ver Documentos</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn-xs btn-danger dropdown-toggle"  data-toggle="dropdown"><i class="fa fa-file"></i> Ver Ficha </button>
                                </button>
                            </div>
                        </td>
                        <td> {{ $c->created_at }}  </td>
                        <td> {{ $c->type_contact }}  </td>
                        <td> {{ $c->name_person }} - {{ $c->phone }}  </td>
                        <td> {{ $c->fecha }}</td>
                    <?php } ?>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Acciones</th>
                    <th>Fecha Apertura</th>
                    <th>Tipo Ticket</th>
                    <th>Nombre / Fono</th>
                    <th>Días desde apertura</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

    <hr>

@endsection