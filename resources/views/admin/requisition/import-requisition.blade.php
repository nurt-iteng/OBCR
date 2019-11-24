@extends('admin.master')

@section('title')
    REQUISITION
@endsection

@section('page-header')
    IMPORT REQUISITION FORM
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
                            <label class="col-xs-4 control-label">Requisition No :</label>

                            <div class="col-xs-8">
                                <input type="number" name="requisition_no" class="form-control" placeholder="Auto generate">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label class="col-xs-4 control-label">Requisition Date :</label>

                            <div class="col-xs-8">
                                <input type="date" name="requisition_date" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Requisition Create By :</label>

                            <div class="col-xs-8">
                                <input type="text" name="requisition_create_by" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Requisition Location :</label>

                            <div class="col-xs-8">
                                <select class="form-control" name="requisition_location">
                                    <option>---Select Location---</option>
                                    <option value="MFL">Micro Fibre Ltd</option>
                                    <option value="MKL">Midland Knitwear Ltd</option>
                                    <option value="LKL">Liberty Kinwear Ltd</option>
                                    <option value="AOPL">A-One Polar Ltd</option>
                                    <option value="OCTL">Orient Chem-Tex Ltd</option>
                                    <option value="HCL">Harmony Chem Ltd</option>
                                    <option value="MTL">Micro Trims Ltd</option>
                                    <option value="Chittagong Station">Chittagong Station</option>
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
                            <label  class="col-xs-4 control-label">Consignee Name :</label>

                            <div class="col-xs-8">
                                <select class="form-control" name="consignee_name">
                                    <option>---Select Consignee Name---</option>
                                    <option value="MFL">Micro Fibre Ltd</option>
                                    <option value="MKL">Midland Knitwear Ltd</option>
                                    <option value="LKL">Liberty Kinwear Ltd</option>
                                    <option value="AOPL">A-One Polar Ltd</option>
                                    <option value="OCTL">Orient Chem-Tex Ltd</option>
                                    <option value="HCL">Harmony Chem Ltd</option>
                                    <option value="MTL">Micro Trims Ltd</option>
                                    <option value="TCBL">Tubingen Chem (BD)</option>
                                    <option value="STL">Sungarh Tex Ltd</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">LC No :</label>

                            <div class="col-xs-8">
                                <input type="text" name="lc_no" class="form-control" placeholder="Enter LC No">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">LC Date :</label>

                            <div class="col-xs-8">
                                <input type="date" name="lc_date" class="form-control">
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
                            <label  class="col-xs-4 control-label">CNF Name :</label>

                            <div class="col-xs-8">
                                <input type="text" name="cnf_name" class="form-control" placeholder="Enter CNF Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Jetty Sorkar Name :</label>

                            <div class="col-xs-8">
                                <input type="text" name="jetty_sorkar_name" class="form-control" placeholder="Enter Jetty Sorkar Name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Jetty Sorkar Cell No :</label>

                            <div class="col-xs-8">
                                <input type="number" name="jetty_sorkar_cell_no" class="form-control" placeholder="Enter Jetty Sorkar Cell No">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6" class="bootstrap-timepicker">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Loading Time :</label>

                            <div class="col-xs-8">
                                <div class="input-group">
                                    <input type="text" name="load_time" class="form-control timepicker" placeholder="Enter Loading Time">
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
                            <label  class="col-xs-4 control-label">Get Out Time :</label>

                            <div class="col-xs-8">
                                <div class="input-group">
                                    <input type="text" name="get_out_time" class="form-control timepicker" placeholder="Enter Get Out Time" >
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Storage Location :</label>

                            <div class="col-xs-8">
                                <input type="text" name="storage_location" class="form-control" placeholder="Enter Storage Location">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Store Concern Name :</label>

                            <div class="col-xs-8">
                                <input type="text" name="store_concern_name" class="form-control" placeholder="Enter Store Concern Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Store Concern Cell No :</label>

                            <div class="col-xs-8">
                                <input type="text" name="store_concern_cell_no" class="form-control" placeholder="Enter Store Concern Cell No">
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
                            <label  class="col-xs-4 control-label">Transport Name :</label>

                            <div class="col-xs-8">
                                <input type="text" name="transport_name" class="form-control" placeholder="Enter Transport Name">
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
                            <label  class="col-xs-4 control-label">Cover Van No</label>

                            <div class="col-xs-8">
                                <input type="number" name="cover_van_no" class="form-control" placeholder="Enter No">
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
