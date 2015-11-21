@extends('app')
@section('content')
    <section class="content-header">
        <h1>
            Pedidos
            <small>Cakes</small>
        </h1>
        <ol class="breadcrumb">
            <li><i class="fa fa-calendar"></i> <b>Fecha:</b> <?php echo date('Y-m-d H:i:s');?></li>
            <br>
            <li><i class="fa fa-exclamation"></i> <b style="color: red;">Id del Pedido:</b> #0001</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3>150</h3>
                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3>44</h3>
                        <p>User Registrations</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Unique Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="content" ng-controller="PedidoController">
                <!-- SELECT2 EXAMPLE -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Seleccionar Pedidos</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-bordered table-hover text-center" role="grid" aria-describedby="example2_info">
                                            <tbody>
                                            <tr>
                                                <td colspan="2">&nbsp;</td>
                                                <td colspan="4">Cake 10&#39;&#39;</td>
                                                <td colspan="4">Cake 13&#39;&#39;x17&#39;&#39;</td>
                                                <td colspan="4">Cake 12&#39;&#39;x13&#39;&#39;</td>
                                                <td colspan="4">Cake 10&#39;&#39;x13&#39;&#39;</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Precio</th>
                                                <td colspan="4">8.95</td>
                                                <td colspan="4">10.95</td>
                                                <td colspan="4">14.95</td>
                                                <td colspan="4">17.95</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2" rowspan="1">Descripcion</th>
                                                <td>Ros</td>
                                                <td>Cel</td>
                                                <td>Pedido</td>
                                                <td>Retiro</td>
                                                <td>Ros</td>
                                                <td>Cel</td>
                                                <td>Pedido</td>
                                                <td>Retiro</td>
                                                <td>Ros</td>
                                                <td>Cel</td>
                                                <td>Pedido</td>
                                                <td>Retiro</td>
                                                <td>Ros</td>
                                                <td>Celeste</td>
                                                <td>Pedido</td>
                                                <td>Retiro</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Inv. Inicial</th>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Enviado</th>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Recibido</th>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Inv. Final</th>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Observacion</label><br>
                                <textarea class="form-control" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" name="enviar" value="Enviar" class="btn btn-danger pull-right" ng-click="appSend()">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                    </div>
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
@stop