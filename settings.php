<?php
require('./php/session.php');
//include('./php/settings-scripts.php');
include('./php/header.php');
?>


<div class="page-content">
    <div class="container">
        <div class="page-content-inner">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal form-row-seperated" method="post" action="">
                        <div class="portlet">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-cog" aria-hidden="true"></i>Settings
                                </div>
                                <div class="actions btn-set">
                                    <a href="orders.php" name="back" class="btn btn-danger">
                                        <i class="fa fa-angle-left"></i> Back</a>
                                    <button class="btn btn-success">
                                        <i class="fa fa-check"></i> Save
                                    </button>

                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="tabbable-bordered">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_general">
                                            <div class="form-body">

                                                <div class="general-section">
                                                    <h1>General</h1>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Company Name:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="company_name" placeholder="Ordery">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Company Slogan:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="company_slogan" placeholder="">
                                                    </div>
                                                </div>

<!--                                                <div class="form-group">-->
<!--                                                    <label class="col-md-2 control-label">Logo: </label>-->
<!--                                                    <div class="col-md-10">-->
<!--                                                        <input type="text" value="S17-" class="form-control" name="order_number" placeholder="">-->
<!--                                                        <span class="help-block"> Ex: S17-01 </span>-->
<!--                                                    </div>-->
<!--                                                </div>-->

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Calendar Year:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-5">
                                                        <div class="input-group input-large date-picker input-daterange" data-date="1/1" data-date-format="MM d">
                                                            <input type="text" class="form-control" value="January 1" name="calendar_start">
                                                        </div>
<!--                                                        --><?php //echo date('F j'); ?>
                                                        <span class="help-block"> year start </span>

                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="input-group input-large date-picker input-daterange" data-date="1/1" data-date-format="MM d">
                                                            <input type="text" class="form-control" value="December 31" name="calendar_end">
                                                        </div>
                                                        <span class="help-block"> year end </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Client Prefix:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="retail_prefix" placeholder="CLI">
                                                        <span class="help-block"> Optional to add prefix to client order </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Retail Prefix:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="retail_prefix" placeholder="RET">
                                                        <span class="help-block"> Optional to add prefix to client order </span>
                                                    </div>
                                                </div>


                                                <div class="general-section">
                                                    <h1>Admin</h1>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Username:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="username" placeholder="admin">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Email:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="email" placeholder="admin@company.com">
                                                        <span class="help-block"> used for notifications </span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Name:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="name" placeholder="">
                                                    </div>
                                                </div>




                                                <div class="general-section">
                                                    <h1>New Password</h1>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Old Password:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="password" class="form-control" name="old_password" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Password:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="password" class="form-control" name="new_password" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Retype Password:
                                                        <span class="required"> * </span>
                                                    </label>
                                                    <div class="col-md-10">
                                                        <input type="password" class="form-control" name="retype_password" placeholder="">
                                                    </div>
                                                </div>



                                                <div class="tasks-section">
                                                    <h1>Order Progress</h1>
                                                </div>









                                                <button class="btn btn-success">
                                                    <i class="fa fa-check"></i> Save
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('./php/footer.php'); ?>