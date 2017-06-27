<?php
session_start();
require_once("inc/init.php");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!isset($_SESSION['orc_user_staff_name'])) {
    //header("location: #login.php");
    $_SESSION['orc_page'] ="company.php";
    echo "<script>window.location.assign('login.php');</script>";
}
$prId="";

if(isset($_GET["prId"])){
    $prId = $_GET["prId"];
}
$conn = mysqli_connect($hostDB,$userDB,$passDB,$databaseName);
if(!$conn){
    echo mysqli_error($conn);
    echo "<script>alert(".mysql_error().");</script>";
    return;
}
mysqli_set_charset($conn, "UTF8");

?>
<div class="row">
	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
		<h1 class="page-title txt-color-blueDark">
			
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-pencil-square-o"></i> 
				Forms
			<span>>  
				Form Layouts
			</span>
		</h1>
	</div>
	
	<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
		
		<!-- Button trigger modal -->
		<a href="ajax/modal-content/model-content-2.html" data-toggle="modal" data-target="#remoteModal" class="btn btn-success btn-lg pull-right header-btn hidden-mobile">
			<i class="fa fa-circle-arrow-up fa-lg"></i> 
			Launch form modal
		</a>
		
		<!-- MODAL PLACE HOLDER -->
		<div class="modal fade" id="remoteModal" tabindex="-1" role="dialog" aria-labelledby="remoteModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content"></div>
			</div>
		</div>
		<!-- END MODAL -->
		
	</div>
</div>
<!-- widget grid -->
<section id="widget-grid" class="">
    <!-- START ROW -->
    <div class="row">
        <!-- NEW COL START -->
        <article class="col-sm-12 col-md-12 col-lg-8">
            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget" id="wid-id-4" data-widget-editbutton="false" data-widget-custombutton="false">
                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Flow Control </h2>				

                </header>
                <div>
                <div class="jarviswidget-editbox">
                                <!-- This area used as dropdown edit box -->
                </div>
                <div class="widget-body no-padding">
                    <form action="" id="smart-form-register1" class="smart-form">
                        <fieldset>
                            <div class="row">
                                <section class="col col-3">
                                        <label class="label">เลขที่เอกสาร</label>
                                        <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                                            <input type="text" name="prDoc" id="prDoc" value="<?php echo $prDoc;?>" placeholder="เลขที่เอกสาร" <?php echo $backColor;?>>
                                            <input type="hidden" name="prId" id="prId" value="<?php echo $prId;?>">
                                            <input type="hidden" name="prFlagNew" id="prFlagNew" value="<?php echo $prFlagNew;?>">
                                            <input type="hidden" name="prStatusStock" id="prStatusStock" value="<?php echo $prStatusStock;?>">
                                            <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
                                </section>
                                <section class="col col-3">
                                    <section >
                                        <label class="label">รับเข้าบริษัท</label>
                                        <label class="select">
                                            <select name="reComp" id="reComp">
                                                <?php echo $oComp1;?>
                                            </select> <i></i> </label>
                                    </section >
                                </section>
                                <section class="col col-3">
                                    <section >
                                        <label class="label">Vendor</label>
                                        <label class="select">
                                            <select name="reVend" id="reVend">
                                                <?php echo $oVend;?>
                                            </select> <i></i> </label>
                                    </section >
                                </section>
                                <section class="col col-3">
                                    <label class="label">วันที่ขอซื้อ</label>
                                    <label class="input"> <i class="icon-append fa fa-user"></i>
                                        <input type="text" name="prDate" id="prDate" value="<?php echo $prDate;?>" placeholder="วันที่ขอซื้อ" class="datepicker" data-date-format="dd/mm/yyyy">                                        
                                        <!--<b class="tooltip tooltip-bottom-right">Needed to enter the website</b> </label>-->
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-3">
                                    <section >
                                        <label class="label">แผนกที่ขอซื้อ</label>
                                        <label class="select">
                                            <select name="reComp" id="reComp">
                                                <?php echo $oComp1;?>
                                            </select> <i></i> </label>
                                    </section >
                                </section>
                                <section class="col col-9">
                                        <label class="label">หมายเหตุ</label>
                                        <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                                            <input type="text" name="prRemark" id="prRemark" value="<?php echo $prRemark;?>" placeholder="หมายเหตุ">
                                            <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-4">
                                    <section >
                                        <label class="label">ส่งสินค้าที่</label>
                                        <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                                            <input type="text" name="prShipTo" id="prShipTo" value="<?php echo $prRemark;?>" placeholder="ส่งสินค้าที่">
                                            <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
                                    </section >
                                </section>
                                <section class="col col-4">
                                        <label class="label">สถานะจัดซื้ออนุมัติ</label>
                                        
                                </section>
                                <section class="col col-4">
                                        <label class="label">สถานะCEOอนุมัติ</label>
                                        
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-4">
                                    <label class="label">รหัส ถ้ามี</label>
                                    <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                            <input type="text" name="reGoCode" id="reGoCode" placeholder="รหัส">
                                            <input type="hidden" name="reGoId" id="reGoId" placeholder="รหัส">
                                    </label>

                                </section>
                                <section class="col col-2">
                                    <label class="label">&nbsp;&nbsp;</label>
                                    <button type="button" id="btnReGoSearch" class="btn btn-primary btn-sm">ค้นหา</button>
                                </section>
                                <section class="col col-6">
                                    <label class="label">ชื่อสินค้า</label>
                                    <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                            <input type="text" name="reGoName" id="reGoName" placeholder="ชื่อสินค้า">
                                    </label>
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-2">
                                    <label class="label">จำนวน</label>
                                    <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                            <input type="number" step=any name="reGoQty" id="reGoQty" placeholder="จำนวน" >
                                    </label>
                                </section>
                                <section class="col col-2">
                                    <label class="label">ราคา</label>
                                    <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                        <input type="number" name="reGoPrice" id="reGoPrice" placeholder="ราคา" value="1" disabled="true" >
                                    </label>
                                </section>
                                <section class="col col-2">
                                    <label class="label">Unit</label>
                                    <label class="select">
                                        <select name="reGoUnit" id="reGoUnit">
                                            <?php echo $oUnit;?>
                                        </select> <i></i> </label>
                                </section>
                                <section class="col col-2 right-inner">
                                    <label class="label">รวมราคา</label>
                                    <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                            <input type="text" name="reGoAmt" id="reGoAmt" placeholder="รวมราคา">
                                    </label>
                                </section>
                                <section class="col col-2 right-inner">
                                    <label class="label">&nbsp;</label>
                                    <label class="input"> 
                                            <input type="text" name="reGoDesc1" id="reGoDesc1" >
                                    </label>
                                </section>
                                <section class="col col-2 right-inner">
                                    <label class="label">&nbsp;&nbsp;</label>
                                    <button type="button" class="btn btn-primary btn-sm" id="btnReAdd">เพิ่มสินค้า</button>
                                    <input type="hidden" name="reCnt" id="reCnt" value="<?php echo $reCnt;?>">
                                </section>
                            </div>
                        </fieldset>
                        <div id="divView"><?php echo $tr1?></div>
                        <footer>
                                <div class="row">
                                    <section class="col col-3 left">
                                        <button type="button" id="btnSave" class="btn btn-labeled btn-primary">
                                                บันทึกข้อมูล
                                        </button>
                                    </section>
                                    <section class="col col-6 right-inner">
                                        <button type="button" id="btnReDoc" class="btn btn-primary">
                                                ยืยยัน เพื่อออกเลขที่เอกสาร
                                        </button>
                                        
                                    </section>
                                    <section class="col col-3 ">
                                        <ul class="demo-btns">
                                            <li>
                                                <a href="javascript:void(0);" class="btn bg-color-blue txt-color-white"><i id="loading" class="fa fa-gear fa-2x fa-spin"></i></a>
                                            </li>
                                        </ul>
                                    </section>
                                </div>
                            </footer>
                    </form>
                </div>
                </div>

            </div>
        </article>
        <!-- END COL -->
    </div>
    <!-- END ROW -->
</section>
<!-- end widget grid -->


<script type="text/javascript">


	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

	pageSetUp();
	
	/*
	 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
	 * eg alert("my home function");
	 * 
	 * var pagefunction = function() {
	 *   ...
	 * }
	 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
	 * 
	 */
	
	// PAGE RELATED SCRIPTS
	
	// pagefunction	
	var pagefunction = function() {
		//console.log("cleared");
		
		/* // DOM Position key index //
		
			l - Length changing (dropdown)
			f - Filtering input (search)
			t - The Table! (datatable)
			i - Information (records)
			p - Pagination (paging)
			r - pRocessing 
			< and > - div elements
			<"#id" and > - div with an id
			<"class" and > - div with a class
			<"#id.class" and > - div with an id and class
			
			Also see: http://legacy.datatables.net/usage/features
		*/	

		/* BASIC ;*/
			var responsiveHelper_dt_basic = undefined;
			var responsiveHelper_datatable_fixed_column = undefined;
			var responsiveHelper_datatable_col_reorder = undefined;
			var responsiveHelper_datatable_tabletools = undefined;
			
			var breakpointDefinition = {
				tablet : 1024,
				phone : 480
			};

		/* END BASIC */
		
		/* COLUMN FILTER  */
	    var otable = $('#datatable_fixed_column').DataTable({
	    	//"bFilter": false,
	    	//"bInfo": false,
	    	//"bLengthChange": false
	    	//"bAutoWidth": false,
	    	//"bPaginate": false,
	    	//"bStateSave": true // saves sort state using localStorage
			"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
					"t"+
					"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
			"autoWidth" : true,
			"preDrawCallback" : function() {
				// Initialize the responsive datatables helper once.
				if (!responsiveHelper_datatable_fixed_column) {
					responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
				}
			},
			"rowCallback" : function(nRow) {
				responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
			},
			"drawCallback" : function(oSettings) {
				responsiveHelper_datatable_fixed_column.respond();
			}		
		
	    });
	    
	    // custom toolbar
	    $("div.toolbar").html('<div class="text-right"><img src="img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
	    	   
	    // Apply the filter
	    $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
	    	
	        otable
	            .column( $(this).parent().index()+':visible' )
	            .search( this.value )
	            .draw();
	            
	    } );
	    /* END COLUMN FILTER */   

	};

	// load related plugins
	
	loadScript("js/plugin/datatables/jquery.dataTables.min.js", function(){
		loadScript("js/plugin/datatables/dataTables.colVis.min.js", function(){
			loadScript("js/plugin/datatables/dataTables.tableTools.min.js", function(){
				loadScript("js/plugin/datatables/dataTables.bootstrap.min.js", function(){
					loadScript("js/plugin/datatable-responsive/datatables.responsive.min.js", pagefunction)
				});
			});
		});
	});


	
</script>