<!DOCTYPE html>
<html lang="en" dir="rtl">
    <!-- BEGIN HEAD -->
    <head>
        <?php require_once 'layout\head.php' ?>
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <?php require_once 'layout\header.php' ?>
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
                    <h1 class="page-title"> الكورسات
                        <small></small>
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="../views/home.php">الرئسية</a>
                                <i class="fa fa-angle-right">الكورسات</i>
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
                                        <span class="caption-subject bold">أضافة كورس جديد</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form method="POST" action="<?= URL ?>courses" accept-charset="UTF-8" role="form" novalidate="novalidate">
                                        <div class="form-body row">
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <input class="form-control" id="form_control_1" required="required" name="name" type="text" value="<?= @$_POST['name'] ?>" autocomplete="off">
                                                <label for="form_control_1">ألاسم</label>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <input class="form-control" id="form_control_1" required="required" name="total_hours" number="number" type="text" value="<?= @$_POST['total_hours'] ?>" autocomplete="off">
                                                <label for="form_control_1">عدد ساعات الكورس</label>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                        <div class="form-body row">
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <div class="input-group input-medium date date-picker" data-date="1-05-2017" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                    <input type="text" class="form-control" readonly="" pmbx_context="02A42006-86E4-4E6A-A1AE-06E4DE932316" required="required" name="start_date" value="<?= @$_POST['start_date'] ?>">
                                                    <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                    <label for="form_control_1"> يبدأ فى</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                                                    <div class="input-group input-medium date date-picker" data-date="1-05-2017" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                        <input type="text" class="form-control" readonly="" pmbx_context="02A42006-86E4-4E6A-A1AE-06E4DE932316" required="required" name="end_date" value="<?= @$_POST['end_date'] ?>">
                                                        <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                        <label for="form_control_1"> ينتهى فى</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-body row">
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <input class="form-control" id="form_control_1" required="required" name="price" number="number" type="text" value="<?= @$_POST['price'] ?>" autocomplete="off">
                                                <label for="form_control_1">السعر</label>
                                            </div>

                                            <div class="col-md-1"></div>

                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <select name='currency' class='form-control' id='currencyList'>
                                                    <option value='0'>أختر</option>
                                                    <?php
                                                    foreach ($currencies as $currency) {
                                                        ?>
                                                        <option value="<?= $currency['id'] ?>"<?php if (@$_POST['currency'] == $currency['id']) { ?>selected<?php } ?>><?= $currency['name'] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                <span id="delivery-error" class="help-block help-block-error"></span>
                                                <label for="form_control_1">العملة</label>
                                            </div>

                                        </div>

                                        <div class="form-body row">
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <select name='branch' class='form-control' id='branchList' required="required">
                                                    <option value='0'>أختر</option>
                                                    <?php
                                                    foreach ($branches as $branch) {
                                                        ?>
                                                        <option value="<?= $branch['id'] ?>"<?php if (@$_POST['branch'] == $branch['id']) { ?>selected<?php } ?>><?= $branch['name'] ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                <span id="delivery-error" class="help-block help-block-error"></span>
                                                <label for="form_control_1">الفرع</label>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                                <textarea class="form-control" name="notes" rows="1"></textarea>
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
                                <form method="POST" action="<?= URL ?>courses/<?= $row['id'] ?>" accept-charset="UTF-8" role="form" novalidate="novalidate">
                                    <div class="form-body row">
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <input class="form-control" id="form_control_1" required="required" name="name" type="text" value="<?= $row['name'] ?>" autocomplete="off">
                                            <label for="form_control_1">ألاسم</label>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <input class="form-control" id="form_control_1" required="required" name="total_hours" number="number" type="text" value="<?= $row['total_hours'] ?>" autocomplete="off">
                                            <label for="form_control_1">عدد ساعات الكورس</label>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                    <div class="form-body row">
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <div class="input-group input-medium date date-picker" data-date="1-05-2017" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                <input type="text" class="form-control" readonly="" pmbx_context="02A42006-86E4-4E6A-A1AE-06E4DE932316" required="required" name="start_date" value="<?= $row['start_date'] ?>">
                                                <span class="input-group-btn">
                                                    <button class="btn default" type="button">
                                                        <i class="fa fa-calendar"></i>
                                                    </button>
                                                </span>
                                                <label for="form_control_1"> يبدأ فى</label>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <div class="input-group input-medium date date-picker" data-date-format="dd-mm-yyyy" data-date-start-date="+0d">
                                                <div class="input-group input-medium date date-picker" data-date="1-05-2017" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                                    <input type="text" class="form-control" readonly="" pmbx_context="02A42006-86E4-4E6A-A1AE-06E4DE932316" required="required" name="end_date" value="<?= $row['end_date'] ?>">
                                                    <span class="input-group-btn">
                                                        <button class="btn default" type="button">
                                                            <i class="fa fa-calendar"></i>
                                                        </button>
                                                    </span>
                                                    <label for="form_control_1"> ينتهى فى</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-body row">
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <input class="form-control" id="form_control_1" required="required" name="price" number="number" type="text" value="<?= $row['price'] ?>" autocomplete="off">
                                            <label for="form_control_1">السعر</label>
                                        </div>

                                        <div class="col-md-1"></div>

                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <select name='currency' class='form-control' id='currencyList'>
                                                <option value='0'>أختر</option>
                                                <?php
                                                foreach ($currencies as $currency) {
                                                    ?>
                                                    <option value="<?= $currency['id'] ?>"<?php if ($row['currency_id'] == $currency['id']) { ?>selected<?php } ?>><?= $currency['name'] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <span id="delivery-error" class="help-block help-block-error"></span>
                                            <label for="form_control_1">العملة</label>
                                        </div>

                                    </div>

                                    <div class="form-body row">
                                        <div class="col-md-1"></div>
                                        <div class="form-group form-md-line-input form-md-floating-label col-md-4">
                                            <select name='branch' class='form-control' id='branchList' required="required">
                                                <option value='0'>أختر</option>
                                                <?php
                                                foreach ($branches as $branch) {
                                                    ?>
                                                    <option value="<?= $branch['id'] ?>"<?php if ($row['branch_id'] == $branch['id']) { ?>selected<?php } ?>><?= $branch['name'] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                            <span id="delivery-error" class="help-block help-block-error"></span>
                                            <label for="form_control_1">الفرع</label>
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
                                        <i class="fa fa-globe"></i>الطلبة </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th> ألاسم </th>
                                                <th> عدد الساعات </th>
                                                <th> يبدأ فى </th>
                                                <th> ينتهى فى </th>
                                                <th> السعر </th>
                                                <th>  العملة</th>
                                                <th>  الفرع</th>
                                                <th> الملاحظات </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if ($courses) {
                                                foreach ($courses as $course) {
                                                    ?>
                                                    <tr>
                                                        <td><a href="<?= URL ?>courses/<?= $course['id'] ?>"><?= $course['name'] ?> </a></td>
                                                        <td> <?= $course['total_hours'] ?> </td>
                                                        <td> <?= $course['start_date'] ?> </td>
                                                        <td> <?= $course['end_date'] ?> </td>
                                                        <td> <?= $course['price'] ?> </td>
                                                        <td> <?= $course['currency'] ?> </td>
                                                        <td> <?= $course['branch'] ?> </td>
                                                        <td> <?= $course['notes'] ?> </td>
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
