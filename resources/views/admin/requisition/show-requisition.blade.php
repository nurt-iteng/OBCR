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
                            <label for="inputEmail3" class="col-xs-4 control-label">Requisition No :</label>

                            <div class="col-xs-8">
                                <input type="number" name="load_point" class="form-control" placeholder="Auto generate">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Requisition Date :</label>

                            <div class="col-xs-8">
                                <input type="date" name="unload_point" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Requisition Create By :</label>

                            <div class="col-xs-8">
                                <input type="number" name="requisition_create_by" class="form-control" placeholder="Enter Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Requisition Location :</label>

                            <div class="col-xs-8">
                                <select class="form-control" name="requisition_location">
                                    <option>---Select Location---</option>
                                    <option value="MFL">Micro Fibre Ltd</option>
                                    <option value="MKL">Midland Knitwear Ltd</option>
                                    <option value="LKL">Liberty Kinwear Ltd</option>
                                    <option value="AOPL">A-One Polar Ltd</option>
                                    <option value="OCTL">Orient Chem-Tex Ltd</option>
                                    <option value="HCL">Harmony Chem-Tex Ltd</option>
                                    <option value="MTL">Micro Trims Ltd</option>
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
                            <label for="inputEmail3" class="col-xs-4 control-label">Buyer Name :</label>

                            <div class="col-xs-8">
                                <select class="form-control" name="buyer_name">
                                    <option>---Select Buyer Name---</option>
                                    <option value="C&A">C&A</option>
                                    <option value="H&M">H&M</option>
                                    <option value="demo">KIABI</option>
                                    <option value="demo">JENIFER</option>
                                    <option value="demo">NEXT</option>
                                    <option value="demo">STILL STROM</option>
                                    <option value="demo">LIDL</option>
                                    <option value="demo">LIDL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Load Point :</label>

                            <div class="col-xs-8">
                                <select class="form-control" name="load_point">
                                    <option>---Select Buyer Name---</option>
                                    <option value="Vulta">Vulta</option>
                                    <option value="Fatullah">Fatullah</option>
                                    <option value="demo">Kaliakoir</option>
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
                            <label for="inputEmail3" class="col-xs-4 control-label">Unload Point :</label>

                            <div class="col-xs-8">
                                <select class="form-control" name="unload_point">
                                    <option>---Select Unload Point---</option>
                                    <option value="Airport-Hemlane">Airport-Hemlane</option>
                                    <option value="Airport-Nippon">Airport-Nippon</option>
                                    <option value="All Port">All Port</option>
                                    <option value="BM">BM</option>
                                    <option value="BM">Incontred</option>
                                    <option value="Ispahani">Ispahani</option>
                                    <option value="K&T">K&T</option>
                                    <option value="KDS">KDS</option>
                                    <option value="Mawna">Mawna</option>
                                    <option value="Mokterpur">Mokterpur</option>
                                    <option value="Nemsan">Nemsan</option>
                                    <option value="NKD">Nemsan</option>
                                    <option value="OCL">OCL</option>
                                    <option value="Portlink">Portlink</option>
                                    <option value="SAPL">SAPL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Item :</label>

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
                            <label for="inputEmail3" class="col-xs-4 control-label">Quantity :</label>

                            <div class="col-xs-8">
                                <input type="number" name="quantity" class="form-control" placeholder="Enter Quantity">
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
                            <label for="inputEmail3" class="col-xs-4 control-label">Cut Off Time :</label>

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
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Cut Off Date :</label>

                            <div class="col-xs-8">
                                <input type="date" name="cut_off_date" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Fare :</label>

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
                            <label for="inputEmail3" class="col-xs-4 control-label">Transport Name :</label>

                            <div class="col-xs-8">
                                <input type="date" name="transport_name" class="form-control" placeholder="Enter Transport Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-xs-4 control-label">Cover Van Capacity</label>

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
                            <label for="inputEmail3" class="col-xs-4 control-label">Cover Van No</label>

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
