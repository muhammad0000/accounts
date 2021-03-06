<!DOCTYPE html>
<html lang="en" dir="rtl">
    <!-- BEGIN HEAD -->
    <head>
        <?php require_once 'layout/head.php' ?>
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <?php require_once 'layout/header.php' ?>
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
                <?php require_once'layout/sidebar.php' ?>
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
                    <h1 class="page-title"> الطلبات\الخدمات
                        <small></small>
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="../views/home.php">الرئسية</a>
                                <i class="fa">> الطلبات\الخدمات</i>
                            </li>
                            <li>
                                <span></span>
                            </li>
                        </ul>
                        <div class="page-toolbar">

                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    <?php if ($success_msg != '') { ?>
                        <div id="prefix_1333978461963" title="" message="<?= $success_msg ?>" btn-class="btn-success" type="success">
                        </div>
                    <?php } elseif ($error_msg != '') { ?>
                        <div id="prefix_1333978461963" title="" message="<?= $error_msg ?>" btn-class="btn-danger" type="error">
                        </div>
                    <?php } ?>
                    <div class="row">
                        <!-- WRITE YOUR CONTENT HERE -->
                        <?php
                        if ($form_type == 'insert') {
                            ?>
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-green">
                                        <i class="icon-pin font-green"></i>
                                        <span class="caption-subject bold">اضافة طلب\خدمة</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form method="POST" action="<?= URL ?>services" accept-charset="UTF-8" role="form" novalidate="novalidate">
                                        <div class="form-body row">
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <input class="form-control" id="form_control_1" required="required" name="service_name" type="text" value="<?= @$_POST['name'] ?>" autocomplete="off">
                                                <label for="form_control_1">اسم الخدمة\الطلب</label>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <select name='vendors' class='form-control' id='vendorsList' required="required">
                                                    <option value='0'>أختر</option>
                                                    <?php
                                                    foreach ($vendors as $vendor) {
                                                        ?>
                                                        <option value="<?= $vendor['id'] ?>" <?php if (@$_POST['vendors'] == $vendor['id']) { ?>selected<?php } ?>><?= $vendor['name'] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                <span id="delivery-error" class="help-block help-block-error"></span>
                                                <label for="form_control_1">المورد</label>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                        <div class="form-body row">
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                                                    <div class="input-group input-medium date date-picker" data-date="1-05-2017" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                        <input type="text" class="form-control" readonly="" pmbx_context="02A42006-86E4-4E6A-A1AE-06E4DE932316" required="required" name="request_date" value="<?= @$_POST['end_date'] ?>">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                        <label for="form_control_1"> تاريخ طلب الخدمة</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <input class="form-control" id="form_control_1" required="required" name="quantity" number="number" type="text" value="<?= @$_POST['quantity'] ?>" autocomplete="off">
                                                <label for="form_control_1">الكمية</label>
                                            </div>
                                        </div>
                                        <div class="form-body row">
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <input class="form-control" id="form_control_1" required="required" name="unit_price" number="number" type="text" value="<?= @$_POST['unit_price'] ?>" autocomplete="off">
                                                <label for="form_control_1">سعر الوحدة</label>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <select name='branches' class='form-control' id='branchesList'>
                                                    <option value='0'>أختر</option>
                                                    <?php
                                                    foreach ($branches as $branch) {
                                                        ?>
                                                        <option value="<?= $branch['id'] ?>"<?php if (@$_POST['branches'] == $branch['id']) { ?>selected<?php } ?>><?= $branch['name'] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                <span id="delivery-error" class="help-block help-block-error"></span>
                                                <label for="form_control_1">الفرع</label>
                                            </div>
                                        </div>
                                        <div class="form-body row">
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <textarea class="form-control" name="notes" rows="1"><?=@$_POST['notes'] ?></textarea>
                                                <label for="form_control_1">الملاحظات</label>
                                            </div>
                                        </div>
                                        
                                        <div class="form-actions noborder">
                                            <input type="submit" class="btn blue submit-button" value="إضافة">
                                            <button type="reset" class="btn default" style="margin-right:9px;">إلغاء</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php } elseif ($form_type == 'update') { ?>
                        <div class="portlet light ">
                            <div class="portlet-title">
                                <div class="caption font-green">
                                    <i class="icon-pin font-green"></i>
                                    <span class="caption-subject bold">تعديل بيانات الطالب</span>
                                </div>
                            </div>
                            <div class="portlet-body form">
                                <form method="POST" action="<?= URL ?>vendors/<?= $row['id'] ?>" accept-charset="UTF-8" role="form" novalidate="novalidate">
                                    <div class="form-body row">
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <input class="form-control" id="form_control_1" required="required" name="name" type="text" value="<?= $row['name'] ?>" autocomplete="off">
                                            <label for="form_control_1">ألاسم</label>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <input class="form-control" id="form_control_1" required="required" name="phone" number="phone" type="text" value="<?= $row['phone'] ?>" autocomplete="off">
                                            <label for="form_control_1">التليفون</label>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="form-body row">
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <select name='country' class='form-control' id='countryList' required="required">
                                                <option value='0'>أختر</option>
                                                <?php
                                                foreach ($countries as $country) {
                                                    ?>
                                                    <option value="<?= $country['id'] ?>" <?php if ($row['country_id'] == $country['id']) { ?>selected<?php } ?>><?= $country['name'] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <span id="delivery-error" class="help-block help-block-error"></span>
                                            <label for="form_control_1">الدولة</label>
                                        </div>

                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <input class="form-control" id="form_control_1" required="required" name="mobile" number="phone" type="text" value="<?= $row['mobile'] ?>" autocomplete="off">
                                            <label for="form_control_1">الموبايل</label>
                                        </div>
                                    </div>
                                    <div class="form-body row">
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <select name='city' class='form-control' id='cityList'>
                                                <option value='0'>أختر</option>
                                                <?php
                                                foreach ($cities as $city) {
                                                    ?>
                                                    <option value="<?= $city['id'] ?>"<?php if ($row['city_id'] == $city['id']) { ?>selected<?php } ?>><?= $city['name'] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <span id="delivery-error" class="help-block help-block-error"></span>
                                            <label for="form_control_1">المدينة</label>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <select name='type' class='form-control' id='typeList' required="required">
                                                <option value='0'>أختر</option>
                                                <option value="معمل"<?php if ($row['type'] == 'معمل') { ?>selected<?php } ?>>معمل</option>
                                                <option value="مورد"<?php if ($row['type'] == 'مورد') { ?>selected<?php } ?>>مورد</option>
                                            </select>
                                            <span id="delivery-error" class="help-block help-block-error"></span>
                                            <label for="form_control_1">النوع</label>
                                        </div>
                                    </div>
                                    <div class="form-body row">
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <input class="form-control" id="form_control_1" name="street" type="text" value="<?= $row['street'] ?>" autocomplete="off">
                                            <label for="form_control_1">الشارع</label>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <textarea class="form-control" name="notes" rows="1"><?= $row['notes'] ?></textarea>
                                            <label for="form_control_1">الملاحظات</label>
                                        </div>
                                    </div>
                                    <div class="form-actions noborder">
                                        <input type="submit" class="btn blue submit-button" value="تعديل">
                                        <button type="reset" class="btn default" style="margin-right:9px;">إلغاء</button>
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
                                        <i class="fa fa-globe"></i>الموردين\المعامل </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th>   الفرع</th>
                                                <th> المورد </th>
                                                <th> الخدمة </th>
                                                <th> التاريخ </th>
                                                <th>  الكمية</th>
                                                <th>  سعر الوحدة</th>
                                                <th>   الاجمالى</th>
                                                <th> صاحب الطلب </th>
                                                <th>  ملاحظات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($services) {
                                                foreach ($services as $service) {
                                                    ?>
                                                    <tr>
                                                        <td><a href="<?= URL ?>branches/<?= $service['branch_id'] ?>"><?= $service['branch'] ?> </a></td>
                                                        <td><a href="<?= URL ?>vendors/<?= $service['vendor_id'] ?>"><?= $service['vendor'] ?> </a></td>
                                                        <td> <?= $service['name'] ?> </td>
                                                        <td> <?= $service['request_date'] ?> </td>
                                                        <td> <?= $service['quantity'] ?> </td>
                                                        <td> <?= $service['unit_price'] ?> </td>
                                                        <td> <?= $service['total_price'] ?> </td>
                                                        <td> <?= $service['creator'] ?> </td>
                                                        <td> <?= $service['notes'] ?> </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
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
