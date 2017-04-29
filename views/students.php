<!DOCTYPE html>
<html lang="en" dir="rtl">
    <!-- BEGIN HEAD -->
    <head>
      <?php require_once 'layout\head.php' ?>
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <?php require_once 'layout\header.php'?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <?php require_once'layout\sidebar.php' ?>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <?php //require_once'layout\theme_panel.php' ?>
                    <!-- END THEME PANEL -->
                    <h1 class="page-title"> الطلبة
                        <small></small>
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="../views/home.php">الرئسية</a>
                                <i class="fa fa-angle-right">الطلبة</i>
                            </li>
                            <li>
                                <span></span>
                            </li>
                        </ul>
                        <div class="page-toolbar">
                            
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                       <!-- WRITE YOUR CONTENT HERE -->
                       <?php 
                       $form_type = 'insert';
                       if($form_type == 'insert') { ?>
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-pin font-green"></i>
            <span class="caption-subject bold">أضافة طالب جديد</span>
        </div>
    </div>
    <div class="portlet-body form">
        <form method="POST" action="../controllers/studentscontroller.php" accept-charset="UTF-8" role="form" novalidate="novalidate"><input name="_token" type="hidden" value="aAMkER3ZqJ6AFVWwdc4LlP8IfgoXIO22PenRl6Oi">

        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <input class="form-control" id="form_control_1" required="required" name="name" type="text">
                <label for="form_control_1">ألاسم</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <input class="form-control" id="form_control_1" required="required" name="phone" number="phone" type="text">
                <label for="form_control_1">التليفون</label>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <input class="form-control" id="form_control_1" required="required" name="address" type="text">
                <label for="form_control_1">العنوان</label>
            </div>

            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <input class="form-control" id="form_control_1" required="required" name="mobile" number="phone" type="text">
                <label for="form_control_1">الموبايل</label>
            </div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <input class="form-control" id="form_control_1" required="required" name="balance" number="number" type="text">
                <label for="form_control_1">الرصيد</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <select name='branch' class='form-control' id='branchList'>
                    <option value='0'>أختر</option>
                </select>
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">الفرع</label>
            </div>
        </div>
        <div class="form-actions noborder">
            <button type="reset" class="btn default pull-right" style="margin-left:9px;">إلغاء</button>
            <input type="submit" class="btn blue pull-right submit-button" value="إضافة">
        </div>
        </form>
    </div>
</div>
                       <?php }elseif($form_type == 'update'){ ?>
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-pin font-green"></i>
            <span class="caption-subject bold">تعديل بيانات الطالب</span>
        </div>
    </div>
    <div class="portlet-body form">
        <form method="PATCH" action="../controllers/studentscontroller.php" accept-charset="UTF-8" role="form" novalidate="novalidate"><input name="_token" type="hidden" value="aAMkER3ZqJ6AFVWwdc4LlP8IfgoXIO22PenRl6Oi">

        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <input class="form-control" id="form_control_1" required="required" name="name" type="text">
                <label for="form_control_1">ألاسم</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <input class="form-control" id="form_control_1" required="required" name="phone" number="phone" type="text">
                <label for="form_control_1">التليفون</label>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <input class="form-control" id="form_control_1" required="required" name="address" type="text">
                <label for="form_control_1">العنوان</label>
            </div>

            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <input class="form-control" id="form_control_1" required="required" name="mobile" number="phone" type="text">
                <label for="form_control_1">الموبايل</label>
            </div>
        </div>
        <div class="form-body row">
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <input class="form-control" id="form_control_1" required="required" name="balance" number="number" type="text">
                <label for="form_control_1">الرصيد</label>
            </div>
            <div class="col-md-1"></div>
            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                <select name='branch' class='form-control' id='branchList'>
                    <option value='0'>أختر</option>
                </select>
                <span id="delivery-error" class="help-block help-block-error"></span>
                <label for="form_control_1">الفرع</label>
            </div>
        </div>
        <div class="form-actions noborder" style="float:right;">
            <button type="reset" class="btn default pull-right" style="margin-left:9px;">إلغاء</button>
            <input type="submit" class="btn blue pull-right submit-button" value="تعديل">
        </div>
        </form>
    </div>
</div>
<?php } ?>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->

        <!-- END EXAMPLE TABLE PORTLET-->
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i>الطلبة </div>
                <div class="tools"> </div>
            </div>
            <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="sample_2">
                    <thead>
                        <tr>
                            <th> ألاسم </th>
                            <th> التليفون </th>
                            <th> الموبايل </th>
                            <th> العنوان </th>
                            <th> الرصيد </th>
                            <th> الفرع </th>
                            <th>  </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        if(isset($students)){
                        foreach($students as $student) { ?>
                        <tr>
                            <td> {{$student->Country->name_en}} </td>
                            <td> {{$student->Governorate->name_en}} </td>
                            <td> {{$student->City->name_en}} </td>
                            <td> {{$student->Area->name_en}} </td>
                            <td> {{$student->street}} </td>
                            <td> {{$student->building_no}} </td>
                            <td> {{$student->floor_no}} </td>
                            <td> {{$student->flat_no}} </td>
                            <td>
                                <a href="{!! url('/addresses')!!}/{{$address->id}}/edit" class="btn btn-outline btn-circle btn-sm purple">
                                    <i class="fa fa-edit"></i> Edit </a>
                                <a href="{!! url('/addresses')!!}/{{$address->id}}/destroy" class="btn btn-outline btn-circle dark btn-sm black">
                                    <i class="fa fa-trash-o"></i> Delete </a>
                            </td>
                        </tr>
                        <?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

                       <!-- End Your Content -->
                    </div>
                  
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <?php require_once'layout/footer.php' ?>
        </div>
    </body>

</html>