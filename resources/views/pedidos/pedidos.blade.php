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
    <section class="content" ng-controller="PedidosController">
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
            <section class="content">
                <!-- SELECT2 EXAMPLE -->
                <div class="box box-default">
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
                                    <table id="example2" class="table" role="grid" aria-describedby="example2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" >Cakes</th>
                                            <th class="text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Disponibles</th>
                                            <th class="text-center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column descending" aria-sort="ascending">Pedidos</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td class="text-center">Cake de Vainilla Plancha de 10''x13</td>
                                            <td class="text-center">100</td>
                                            <td class="sorting_1 text-center"><input id="demo3" type="text" value="" name="demo3"></td>

                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="text-center">Cake de Vainilla Plancha de 12''x13</td>
                                            <td class="text-center">90</td>
                                            <td class="sorting_1 text-center"><input id="demo3" type="text" value="" name="demo3"></td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="text-center">Cake de Vainilla Plancha de 13''x17</td>
                                            <td class="text-center">120</td>
                                            <td class="sorting_1 text-center"><input id="demo3" type="text" value="" name="demo3"></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="text-center">Cake de Vainilla Plancha de 10''</td>
                                            <td class="text-center">40</td>
                                            <td class="sorting_1 text-center"><input id="demo3" type="text" value="" name="demo3"></td>
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
                                <input type="submit" name="enviar" value="Enviar" class="btn btn-danger pull-right">
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