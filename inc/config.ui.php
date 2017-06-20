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
                "analytics" => array(
                        "title" => "Analytics Dashboard",
                        "url" => "ajax/dashboard.php"
                ),
                "social" => array(
                        "title" => "Social Wall",
                        "url" => "ajax/dashboard-social.php"
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
                "url" => "#vendorView.php"
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
                "url" => "#unitView.php"
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