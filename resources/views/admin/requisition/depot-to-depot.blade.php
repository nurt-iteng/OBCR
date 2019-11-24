@extends('admin.master')

@section('title')
    REQUISITION
@endsection

@section('page-header')
    DEPOT TO DEPOT TRANSFER/RETURN
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
                            <label  class="col-xs-4 control-label">Buyer Name :</label>

                            <div class="col-xs-8">
                                <input type="text" name="buyer_name" class="form-control" placeholder="Enter Buyer Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Load Point :</label>

                            <div class="col-xs-8">
                                <input type="text" name="load_point" class="form-control" placeholder="Enter Load Point">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Unload Point :</label>

                            <div class="col-xs-8">
                                <input type="text" name="unload_point" class="form-control" placeholder="Enter Unload Point">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Item :</label>

                            <div class="col-xs-8">
                                <input type="text" name="item" class="form-control" placeholder="Enter Item">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Quantity :</label>

                            <div class="col-xs-8">
                                <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Box :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_box" class="form-control" placeholder="Enter No Of Box">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Drum :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_drum" class="form-control" placeholder="Enter No Of Drum">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Jar :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_dar" class="form-control" placeholder="Enter No Of Jar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Bag :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_bag" class="form-control" placeholder="Enter No Of Bag">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Roll :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_roll" class="form-control" placeholder="Enter No Of Roll">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Bell :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_bell" class="form-control" placeholder="Enter No Of Bell">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of CBM :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_cbm" class="form-control" placeholder="Enter No Of CBM">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of KG :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_kg" class="form-control" placeholder="Enter No Of KG">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Fare :</label>

                            <div class="col-xs-8">
                                <input type="number" name="fare" class="form-control" placeholder="Enter Fare">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Van :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_van" class="form-control" placeholder="Enter No Of Van">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Transport Name :</label>

                            <div class="col-xs-8">
                                <input type="text" name="transport_name" class="form-control" placeholder="Enter Transport Name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Cover Van No</label>

                            <div class="col-xs-8">
                                <input type="number" name="cover_van_no" class="form-control" placeholder="Enter No">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Cover Van Capacity</label>

                            <div class="col-xs-8">
                                <input type="number" name="cover_van_capacity" class="form-control" placeholder="Enter Capacity">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Reason For Transfer</label>

                            <div class="col-xs-8">
                                <input type="text" name="reason_for_transfer" class="form-control" placeholder="Enter Reason For Transfer">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Concern Person Name</label>

                            <div class="col-xs-8">
                                <input type="text" name="concern_person_name" class="form-control" placeholder="Enter Concern Person Name">
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
