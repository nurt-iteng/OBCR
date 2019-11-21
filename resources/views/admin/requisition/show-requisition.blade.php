@extends('admin.master')

@section('title')
    REQUISITION
@endsection

@section('page-header')
    COVER VAN REQUISITION INFO
@endsection

@section('main-content')

    <form class="form-horizontal" action="" method="POST">
        <!-- /.box -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Buyer Name :</label>

                            <div class="col-xs-8">
                                <select class="form-control" name="buyer_name">
                                    <option>---Select Buyer Name---</option>
                                    <option value="demo">Buyer 1</option>
                                    <option value="demo">Buyer 2</option>
                                    <option value="demo">Buyer 3</option>
                                    <option value="demo">Buyer 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Depot Name :</label>

                            <div class="col-xs-8">
                                <select class="form-control" name="depot_name">
                                    <option>---Select Depot---</option>
                                    <option value="demo">Depo 1</option>
                                    <option value="demo">Depo 2</option>
                                    <option value="demo">Depo 3</option>
                                    <option value="demo">Depo 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Load Point :</label>

                            <div class="col-xs-8">
                                <input type="text" name="load_point" class="form-control" placeholder="Enter Load Point">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Unload Point :</label>

                            <div class="col-xs-8">
                                <input type="text" name="unload_point" class="form-control" placeholder="Enter Unload Point">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Item :</label>

                            <div class="col-xs-8">
                                <input type="text" name="item_name" class="form-control" placeholder="Enter Item">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Quantity :</label>

                            <div class="col-xs-8">
                                <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Amount :</label>

                            <div class="col-xs-8">
                                <input type="number" name="amount" class="form-control" placeholder="Enter Amount">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">CBM :</label>

                            <div class="col-xs-8">
                                <input type="number" name="cbm" class="form-control" placeholder="Enter CBM">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">No Of Van :</label>

                            <div class="col-xs-8">
                                <input type="number" name="number_of_van" class="form-control" placeholder="Enter No Of Van">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6" class="bootstrap-timepicker">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Load Time :</label>

                            <div class="col-xs-8">
                                <div class="input-group">
                                    <input type="text" name="load_time" class="form-control timepicker" placeholder="Enter Load Time">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6" class="bootstrap-timepicker">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Unload Time :</label>

                            <div class="col-xs-8">
                                <div class="input-group">
                                    <input type="text" name="unload_time" class="form-control timepicker" placeholder="Enter Unload Time">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6" class="bootstrap-timepicker">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Cut Of Time :</label>

                            <div class="col-xs-8">
                                <div class="input-group">
                                    <input type="text" name="unload_time" class="form-control timepicker" placeholder="Enter Cut Of Time">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-danger pull-left">Save Requisition Info</button>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </form>

    <script type="text/javascript">

        $('.timepicker').datetimepicker({

            format: 'hh:mm a'

        });

    </script>
@endsection
