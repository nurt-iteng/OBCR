@extends('admin.master')

@section('title')
    REQUISITION
@endsection

@section('page-header')
    Export REQUISITION FORM
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
                            <label  class="col-xs-4 control-label">Load Point :</label>

                            <div class="col-xs-8">
                                <select class="form-control" name="load_point">
                                    <option>---Select Load point---</option>
                                    <option value="MFL">Micro Fibre Ltd</option>
                                    <option value="MKL">Midland Knitwear Ltd</option>
                                    <option value="LKL">Liberty Kinwear Ltd</option>
                                    <option value="AOPL">A-One Polar Ltd</option>
                                    <option value="OCTL">Orient Chem-Tex Ltd</option>
                                    <option value="HCL">Harmony Chem Ltd</option>
                                    <option value="MTL">Micro Trims Ltd</option>
                                    <option value="TCBL">Tubingen Chem (BD) Ltl</option>
                                    <option value="STL">Sungarh Tex Ltd</option>
                                    <option value="Gazipur BSCIC">Gazipur BSCIC</option>
                                    <option value="Gazipur BSCIC">Narayangonj BSCIC</option>
                                    <option value="Dumni">Dumni</option>
                                    <option value="Tongi">Tongi</option>
                                    <option value="Joydebpur">Joydebpur</option>
                                    <option value="Mawna">Mawna</option>
                                    <option value="Master Bari">Master Bari</option>
                                    <option value="Savar">Savar</option>
                                    <option value="Savar">Norshindi</option>
                                    <option value="Mirzapur">Mirzapur</option>
                                    <option value="Zirabo">Zirabo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Unload Point :</label>

                            <div class="col-xs-8">
                                <select class="form-control" name="unload_point">
                                    <option>---Select Unload Point---</option>
                                    <option value="MFL">Micro Fibre Ltd</option>
                                    <option value="MKL">Midland Knitwear Ltd</option>
                                    <option value="LKL">Liberty Kinwear Ltd</option>
                                    <option value="AOPL">A-One Polar Ltd</option>
                                    <option value="OCTL">Orient Chem-Tex Ltd</option>
                                    <option value="HCL">Harmony Chem Ltd</option>
                                    <option value="MTL">Micro Trims Ltd</option>
                                    <option value="TCBL">Tubingen Chem (BD) Ltl</option>
                                    <option value="STL">Sungarh Tex Ltd</option>
                                    <option value="Gazipur BSCIC">Gazipur BSCIC</option>
                                    <option value="Gazipur BSCIC">Narayangonj BSCIC</option>
                                    <option value="Dumni">Dumni</option>
                                    <option value="Tongi">Tongi</option>
                                    <option value="Joydebpur">Joydebpur</option>
                                    <option value="Mawna">Mawna</option>
                                    <option value="Master Bari">Master Bari</option>
                                    <option value="Savar">Savar</option>
                                    <option value="Savar">Norshindi</option>
                                    <option value="Mirzapur">Mirzapur</option>
                                    <option value="Zirabo">Zirabo</option>
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
                            <label  class="col-xs-4 control-label">Chalan No :</label>

                            <div class="col-xs-8">
                                <input type="number" name="chalan_no" class="form-control" placeholder="Enter Chalan No">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Chalan Date :</label>

                            <div class="col-xs-8">
                                <input type="date" name="chalan_date" class="form-control" placeholder="Enter Chalan Date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Item :</label>

                            <div class="col-xs-8">
                                <input type="text" name="item" class="form-control" placeholder="Enter Item">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Quantity :</label>

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
                            <label  class="col-xs-4 control-label">No Of Box :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_box" class="form-control" placeholder="Enter No Of Box">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Drum :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_drum" class="form-control" placeholder="Enter No Of Drum">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Jar :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_dar" class="form-control" placeholder="Enter No Of Jar">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Bag :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_bag" class="form-control" placeholder="Enter No Of Bag">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Roll :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_roll" class="form-control" placeholder="Enter No Of Roll">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Bell :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_bell" class="form-control" placeholder="Enter No Of Bell">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of CBM :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_cbm" class="form-control" placeholder="Enter No Of CBM">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of KG :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_kg" class="form-control" placeholder="Enter No Of KG">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6" class="bootstrap-timepicker">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Loading Time :</label>

                            <div class="col-xs-8">
                                <div class="input-group">
                                    <input type="text" name="loading_time" class="form-control timepicker" placeholder="Enter Loading Time">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6" class="bootstrap-timepicker">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Arrival Time :</label>

                            <div class="col-xs-8">
                                <div class="input-group">
                                    <input type="text" name="get_out_time" class="form-control timepicker" placeholder="Enter Arrival Time" >
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Store Concern Name :</label>

                            <div class="col-xs-8">
                                <input type="text" name="store_concern_name" class="form-control" placeholder="Enter Store Concern Name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Store Concern Cell No :</label>

                            <div class="col-xs-8">
                                <input type="text" name="store_concern_cell_no" class="form-control" placeholder="Enter Store Concern Cell No">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">No Of Van :</label>

                            <div class="col-xs-8">
                                <input type="number" name="no_of_van" class="form-control" placeholder="Enter No Of Van">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Fare :</label>

                            <div class="col-xs-8">
                                <input type="number" name="fare" class="form-control" placeholder="Enter Fare">
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
                            <label  class="col-xs-4 control-label">Cover Van Capacity</label>

                            <div class="col-xs-8">
                                <input type="number" name="cover_van_capacity" class="form-control" placeholder="Enter Capacity">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label  class="col-xs-4 control-label">Cover Van No</label>

                            <div class="col-xs-8">
                                <input type="number" name="cover_van_no" class="form-control" placeholder="Enter Cover Van No">
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
