<?php

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_blank",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(
    "purchase" => array(
        "title" => "จัดซื้อ",
        "icon" => "fa-home",
        "sub" => array(
            "prRequest" => array(
                "title" => "จัดซื้อ ขอซื้อ",
                "url" => "poPrRequestView.php"
            ),
            "hosRequest" => array(
                "title" => "โรงพยาบาล ขอซื้อ",
                "url" => "poPrRequestView.php"
            ),
            "prApprove" => array(
                "title" => "อนุมัติ ขอซื้อ",
                "url" => "poPrApproveView.php"
            ),
            "po" => array(
                "title" => "ใบสั่งซื้อ",
                "url" => "poPo.php"
            ),
            "vendorConfirm" => array(
                "title" => "vendor confirm",
                "url" => "poPo.php"
            ),
            "recStockPO" => array(
                "title" => "รับสินค้าเข้าคลัง จัดซื้อ",
                "url" => "poPo.php"
            ),
            "drawStockPO" => array(
                "title" => "เบิกจ่ายสินค้า จัดซื้อ",
                "url" => "poPo.php"
            ),
            "goodsView" => array(
                "title" => "สินค้าขอ จัดซื้อ",
                "url" => "goodsView.php"
            )
        )
    ),
    "company" => array(
        "title" => "บริษัท",
        "icon" => "fa-table",
        "sub" => array(
            "comp" => array(
                "title" => "รายละเอียดบริษัท",
                "url" => "company.php"
            ),
            "vend" => array(
                "title" => "Vendor",
                "url" => "vendorView.php"
            ),
            "type" => array(
                "title" => "ประเภทสินค้า",
                "url" => "#goodsTypeView.php"
            ),
            "catagory" => array(
                "title" => "ชนิดสินค้า",
                "url" => "#goodsCatView.php"
            ),
            "unit" => array(
                "title" => "Unit",
                "url" => "unitView.php"
            )
        )
    ),
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>