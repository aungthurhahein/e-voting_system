<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING SYSTEM ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="candidate.css" rel="stylesheet" type="text/css">
<link href="../default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="./js/yahoo-min.js" ></script>
<script type="text/javascript" src="./js/dom-min.js" ></script>
<script type="text/javascript" src="./js/event-min.js" ></script>

<script type="text/javascript">

  // Invoke dbQwikSite Page OnLoad controller as soon as the page is ready 
  // This should always happen first, any user custom-code should run after
  YAHOO.util.Event.onDOMReady( function() { qsPageOnLoadController(); } );  

</script>

<!-- END OF STD-Loader.txt -->

<!-- The code section below is extracted from [dbQwikSiteInstallPath\Data\Includes\STD-Loader.txt] file -->   
<!-- This file is included in all generated pages, right after Javascript basic initialization -->   

<!-- You may write JS File Includes, CSS includes or inline JavaScript code as needed. -->   
<!-- This file is included in generated code BEFORE the 'ClientIncludes' Custom Code insertion point. -->

<!-- Add all your customization below -->

	<link rel="stylesheet" type="text/css" href="./css/ContentLayout.css"></link>


<!-- END OF STD-Loader.txt -->


<script type="text/javascript">

// Declares all constants and arrays
// for all page items used on the page

// Declare Field Indexes for all page items
var qsPageItemsCount = 2
var _Studid                                   = 0;
var _Name                                     = 1;

// Declare Fields Prompts
var fieldPrompts = [];
fieldPrompts[_Studid] = "Studid";
fieldPrompts[_Name] = "Name";


// Declare Fields Technical Names
var fieldTechNames = [];
fieldTechNames[_Studid] = "Studid";
fieldTechNames[_Name] = "Name";


// This function dynamically assigns element 'ID' attributes to all relevant elements
function qsAssignElementIDs() {

  // STEP 1: Assign an ID to all field PROMPTS (TD captions)
  // Scan all table TD tags for those that match field prompts
  var TDs = document.getElementsByTagName("td");
  for (var i=0; i < TDs.length; i++) {
    var element = TDs[i];
    // Check if the TD found is one of the Page Items header
    // This can only be an approximation as some TDs other than the actual field prompts
    // may contain the same caption. In that case all TDs found will carry the same ID.
    if (element.className == "ThRows" || element.className == "TrOdd") {
      for (var f=0; f < qsPageItemsCount; f++) {
        if (element.innerHTML == fieldPrompts[f]) {
            element.id = fieldTechNames[f] + "_caption_cell";
          element.innerHTML = "<div id='" + fieldTechNames[f] + "_caption_div'>" + element.innerHTML + "</div>";
        }
      }
    }
  }

  // STEP 2: Assign an ID to all Input controls on the form
  document.getElementsByName("search_fd0")[0].id = fieldTechNames[_Studid];
  document.getElementsByName("search_fd1")[0].id = fieldTechNames[_Name];
}

// This function defines object names for all page items used on the page.
// You can refer to these objects in your JavaScript code and avoid getElementById().
// Entry Fields (when present) are accessible via their technical names.
// The prompts of Entry Fields (when present) are accessible using SomeItemName_Prompt object names.
// 
function qsPageItemsAbstraction() {
  qs_form                                  = document.getElementsByName("qs_search_form")[0];   //Define Form Object by Name.
  pgitm_Studid                           = document.getElementsByName("search_fd0")[0];
  pgitm_Name                      = document.getElementsByName("search_fd1")[0];
}


</script>



<script type="text/javascript">

// This function dynamically assigns custom events
// to page item controls on this page
function qsAssignPageItemEvents() {
}

</script>




<!-- >> START OF "Students Data ->
<style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>





<script>

function usrEvent__Students_Data__onload() {
  // >> START OF "Students Data -> On Load" [onload] [PAGEEVENT] [START] [JS] [C7C3BB93-7601-4F73-B750-479B288D9D68]
  // << END OF "Students Data -> On Load" [onload] [PAGEEVENT] [START] [JS] [C7C3BB93-7601-4F73-B750-479B288D9D68]
}



function usrEvent__Students_Data__onunload() {
  // >> START OF "Students Data -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [C7C3BB93-7601-4F73-B750-479B288D9D68]
  // << END OF "Students Data -> On Unload" [onunload] [PAGEEVENT] [START] [JS] [C7C3BB93-7601-4F73-B750-479B288D9D68]
}



function usrEvent__Students_Data__onresize() {
  // >> START OF "Students Data -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [C7C3BB93-7601-4F73-B750-479B288D9D68]
  // << END OF "Students Data -> On Resize" [onresize] [PAGEEVENT] [START] [JS] [C7C3BB93-7601-4F73-B750-479B288D9D68]
}



// This function controls the OnUnload event dispatching
function qsPageOnUnloadController() {   
}



// This function controls the OnResize event dispatching
function qsPageOnResizeController() {   
   var lastResult = false                              
   return true;                                        
}                                                      



// This function controls the OnLoad events dispatching
function qsPageOnLoadController() {   
   var lastResult = false                              

   // Invoke the technical field names abstraction initialization
   qsPageItemsAbstraction();


   // Invoke the Element IDs assignment function
   qsAssignElementIDs();

   // Invoke the Page Items custom events assignments
   qsAssignPageItemEvents();
   // Assign Event Handlers for page-level events
   YAHOO.util.Event.addListener(window, "beforeunload", qsPageOnUnloadController);
   YAHOO.util.Event.addListener(window, "resize", qsPageOnResizeController);
   // Set focus on first enterable page item available

   return true;                                        
}                                                      

</script>
<SCRIPT language=JavaScript>
function cell_over(cell, classname) {
    if (document.all || document.getElementById) {
        cell.classBackup = cell.className;
        cell.className   = classname;
    }
}
function cell_out(cell)
{
    if (document.all || document.getElementById) {
        cell.className   = cell.classBackup;
    }
}
</SCRIPT>
</head>
<?php
require('qs_connection.php');
require('qs_functions.php');

@session_start();

$row = "";
$err_string = "";
$strkeyword = "";
$sortstring = "";
$icon = "";
$sql = "";
$sql_ext = "";
$fields = array();
$fields[0] = "studid";
$fields[1] = "name";

$arryitemvalue = array();
$arryitemvalue[0] = "";
$arryitemvalue[1] = "";

$arryopt = array();
$arryopt[0] = "";
$arryopt[1] = "";


$arryandoropt = array();
$arryandoropt[0] = "";
$arryandoropt[1] = "";


//Field Related Declarations
$req_studid        = "search_fd1";
$req_Name           = "search_fd1";

//Assign Recordset Field Index
$rs_idx_studid       = 0;
$rs_idx_name         = 1;
// >> START OF "after local declaration" [LCLVARDECL001] [POST] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after local declaration" [LCLVARDECL001] [POST] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
// >> START OF "before prepare query" [PREPAREQRY001] [PRE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before prepare query" [PREPAREQRY001] [PRE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
$sql .= " Select\n";
    $sql .= "     `students`.`studid`,\n";
    $sql .= "     `students`.`name`,\n";
    $sql .= " From\n";
    $sql .= "     `students`   `students`\n";

if (strpos(strtoupper($sql), " WHERE ")) {
   $sqltemp = $sql . " AND (1=0) ";
}else{
   $sqltemp = $sql . " Where (1=0) ";
}

/*$result = mysql_query($sqltemp . " " . $sql_ext . " limit 0,1")
          or die("Invalid query");*/
if (!$result){
// >> START OF "on open recordset error" [OPENRECSETERR001] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "on open recordset error" [OPENRECSETERR001] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
}
// >> START OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [START] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after open recordset" [AFTEROPENRECSET001] [INLINE] [STOP] [SRV] [B7EE16CA-E3FE-423F-9705-D044BDD54D7A] [Find tally]
if (isset($_POST["act"])) {
    $_SESSION["students_students"] = "";
    $_SESSION["students_students_PageNumber"] = "";
    $filter_string = "";
    $qry_string = "";
    $i = 0;
    while ($i < mysql_num_fields($result)) {
        $meta = mysql_fetch_field($result);
        $field_name = $meta->name;
        $field_type = $meta->type;
        //get field type
        $type_field = "";
        $type_field = returntype($field_type);
        //clear session
        $_SESSION["students_search_fd" . $i] = "";
        $_SESSION["students_multisearch_fd" . $i] = "";
        $_SESSION["students_search_fd_" . $i] = "";
        if ((qsrequest("search_fd" . $i) != "") && (qsrequest("search_fd" . $i) != "*")) {
            $idata = qsrequest("search_fd" . $i);
            if (strlen($idata) > 1) {
                if ($idata[strlen($idata) - 1] == "*") {
                    $idata = substr($idata, 0, strlen($idata) - 1);
                }
            }
            $idata = str_replace("*", "%", $idata);
            $irealdata = $idata;
            if (qsrequest("search_optfd".$i) != "") {
              $idata = qsrequest("search_optfd". $i) . $idata ;
            }
            $iopt = substr($idata, 0, 2);
            if (($iopt == "<=") || ($iopt == "=<")) {
                $iopt = "<=";
                $irealdata = substr($idata, 2);
            } elseif (($iopt == ">=") || ($iopt == "=>")) {
                $iopt = ">=";
                $irealdata = substr($idata, 2);
            } elseif ($iopt == "==") {
                $iopt = "=";
                $irealdata = substr($idata, 2);
            } elseif ($iopt == "<>") {
                $irealdata = substr($idata, 2);
            } elseif ($iopt == "^^") {
                      $iopt = "*";
            	$idata =  $iopt . $irealdata . $iopt; // Contain
                  } elseif ($iopt == "^*") {
                      $iopt = "*";
            	$idata =  $irealdata . $iopt; // Start With
                  } elseif ($iopt == "*^") {
                      $iopt = "*";
            	$idata =  $iopt . $irealdata ; // End With
            } else {
                $iopt = substr($idata, 0, 1);
                if (($iopt == "<") || ($iopt == ">") || ($iopt == "=")) {
                    $irealdata = substr($idata,1);
                } else {
                    $iopt = "=";
                }
            }
            if (qsrequest("andor_optfd".$i) != "") {
                $idata = qsrequest("andor_optfd". $i) . $idata ;
            }
        if (!strcasecmp($idata,"{current date and time}")) {
            $idata = time();
        } elseif (!strcasecmp($idata,"{current date}")) {
            $idata = time();
        } elseif (!strcasecmp($idata,"{current time}")) {
            $idata = time();
        }
            if ($meta) {
                if ($type_field == "type_datetime") {
                    if ((($timestamp = strtotime($irealdata)) !== -1)) {
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . urlencode($idata);
                            $filter_string = $field_name . " like '%" . $idata . "%'";
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . urlencode($idata);
                            $filter_string .= " and " . $field_name . " like '%" . $idata . "%'";
                        }
                        if (qsrequest("search_fd" . $i . "_DateFormat") != ""){
                           $iDateFormat = qsrequest("search_fd" . $i . "_DateFormat"); 
                           $qry_string .= "&search_fd" . $i . "_DateFormat=" . $iDateFormat; 
                        } 
                    } else {
                        $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";

                        $err_string .= "Description: Invalid DateTime.<br>";
                    }
                } elseif ($type_field == "type_integer") {
                    if (is_numeric($irealdata)) {
                        if ($qry_string == "") {
                            $qry_string = "search_fd" . $i . "=" . $idata;
                            $filter_string = $field_name . " " . $iopt . " " . $irealdata;
                        } else {
                            $qry_string .= "&search_fd" . $i . "=" . $idata;
                            $filter_string .= " and " . $field_name . " " . $iopt . " " . $irealdata;
                        }
                    } else {
                        $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                        $err_string .= "Description: Type mismatch.<br>";
                    }
                } elseif ($type_field == "type_string") {
                    if ($qry_string == "") {
                        $qry_string = "search_fd" . $i . "=" . urlencode(stripslashes($idata));
                        $filter_string = $field_name . " like '" . $irealdata . "%'";
                    } else {
                        $qry_string .= "&search_fd" . $i . "=" . urlencode(stripslashes($idata));
                        $filter_string .= " and " . $field_name . " like '" . $irealdata . "%'";
                    }
                } else {
                    if ($qry_string == "") {
                        $qry_string = "search_fd" . $i . "=" . urlencode(stripslashes($idata));
                        $filter_string = $field_name . " = '" . $irealdata . "'";
                    } else {
                        $qry_string .= "&search_fd" . $i . "=" . urlencode(stripslashes($idata));
                        $filter_string .= " and " . $field_name . " = '" . $irealdata . "'";
                    }
                }
            }
        }
        if (qsrequest("multisearch_fd" . $i) != "") {
            if ($qry_string == "") {
                $qry_string = "multisearch_fd" . $i . "=" . qsrequest("multisearch_fd" . $i);
            } else {
                $qry_string = $qry_string . "&multisearch_fd" . $i . "=" . qsrequest("multisearch_fd" . $i);
            }
        }
        //begin search between see variable 'search_fd_(n)'
        if (qsrequest("search_fd_" . $i) != "") {
            $idata = qsrequest("search_fd_" . $i);
            if (strlen($idata) > 1) {
                if ($idata[strlen($idata) - 1] == "*") {
                    $idata = substr($idata, 0, strlen($idata) - 1);
                }
            }
            $idata = str_replace("*", "%", $idata);
            $irealdata = $idata;
            if (qsrequest("search_optfd_".$i) != "") {
                $idata = qsrequest("search_optfd_". $i) . $idata ;
            }
            $iopt = qsrequest("search_optfd_". $i);
            if ($meta) {
                if ($type_field == "type_datetime") {
                   if ((($timestamp = strtotime($irealdata)) !== -1)) {
                       if ($qry_string == "") {
                           $qry_string = "search_fd_" . $i . "=" . urlencode($idata);
                           $filter_string = $field_name . " like '%" . $idata . "%'";
                       } else {
                           $qry_string .= "&search_fd_" . $i . "=" . urlencode($idata);
                           $filter_string .= " and " . $field_name . " like '%" . $idata . "%'";
                       }
                        if (qsrequest("search_fd_" . $i . "_DateFormat") != ""){
                           $iDateFormat = qsrequest("search_fd_" . $i . "_DateFormat"); 
                           $qry_string .= "&search_fd_" . $i . "_DateFormat=" . $iDateFormat; 
                        } 
                   } else {
                       $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                       $err_string .= "Description: Invalid DateTime.<br>";
                   }
                } elseif ($type_field == "type_integer") {
                   if (is_numeric($irealdata)) {
                       if ($qry_string == "") {
                           $qry_string = "search_fd_" . $i . "=" . $idata;
                           $filter_string = $field_name . " " . $iopt . " " . $irealdata;
                       } else {
                           $qry_string .= "&search_fd_" . $i . "=" . $idata;
                           $filter_string .= " and " . $field_name . " " . $iopt . " " . $irealdata;
                       }
                   } else {
                        $err_string .= "<strong>Error:</strong>while searching.<strong>" . $field_name . "</strong>.<br>";
                        $err_string .= "Description: Type mismatch.<br>";
                   }
               }
           }
        }
        $i++;
    }
    if ($result > 0) {mysql_free_result($result);}
  if (qsrequest("search_sort") <> "") {
	    $sortstring = qsrequest("search_sort");
  }
  if (qsrequest("page_size") <> "") {
	    $page_size = qsrequest("page_size");
  }
#----get submit url page----
    $submiturl = "./students.php?";
    if ($err_string == "") {
        if ($qry_string != "") {
            $URL= $submiturl . "&" . $qry_string;
        } else {
            $URL= $submiturl;
        }
        header ("Location: $URL");
        exit;
    }
} else {
    $sortstring  = "";
    if (qssession("sortfield") != "") {
         $sortstring = "&sortfield=" . urlencode(stripslashes(qssession("sortfield"))) . "&sortby=" . urlencode(stripslashes(qssession("sortby")));
    }
    if (qssession("page_size") != "") {
         $page_size = urlencode(stripslashes(qssession("page_size")));
    }
    $i=0;
   // while ($i < mysql_num_fields($result)) 
	{
$strkeyword = "";
$iopt = "";
$idata = "";
if ((!isset($_GET["search_fd".$i])) && (!isset($_POST["search_fd".$i]))) {
    $arryitemvalue[$i] = "";
    $arryopt[$i]="";
} else {
    # Check value for advance search
    $idata = qsrequest("search_fd" . $i);
    $icon = "";
    if (substr($idata, 0, 2) == "||") {
        $icon = "||";
        $idata = substr($idata, 2);
    }
    $iopt = substr($idata, 0, 2); // Get 2 of left keyword
    if (($iopt == "<=") || ($iopt == "=<")){
        $iopt  = "<=";
        $strkeyword = substr($idata, 2);
    }elseif (($iopt == ">=") || ($iopt == "=>")){
        $iopt = ">=";
        $strkeyword = substr($idata, 2);
    }elseif ($iopt == "==" ){
        $iopt = "==";
        $strkeyword = substr($idata, 2);
    }elseif ($iopt == "<>"){
        $strkeyword = substr($idata, 2);
    } else {
        $startstrdata = substr($idata,0,1) ;
        $endstrdata = $idata[strlen($idata) - 1];
        if (($startstrdata != "%" ) && ($endstrdata != "%")){
            if (($startstrdata == "<") || ($startstrdata == ">") || ($startstrdata == "=")) {
                if ($startstrdata == "<") {
                    $strkeyword = str_replace("<","", $idata) ;
                    $iopt = "<";
                }elseif($startstrdata == ">")  {
                    $strkeyword = str_replace(">","", $idata) ;
                    $iopt = ">";
                } else {
                    $strkeyword = str_replace("=","", $idata) ;
                    $iopt = "=";
                }
            }else {
                $arryitemvalue[$i] = $idata;
                $strkeyword = $idata;
            }
        }else {
            if (($startstrdata == "%" ) && ($endstrdata == "%")) {  # Contain Case
                $startstrdata = str_replace("%","", $idata) ;
                $strkeyword  = substr($idata,1, (strlen($idata)-2));
                $iopt = "^^" ;
            }elseif (($startstrdata != "%" ) && ($endstrdata == "%")) {  # Start With Case xx*
                $strkeyword  = substr($idata,0, (strlen($idata)-1));
                $iopt = "^*";
            }elseif (($startstrdata == "%" ) && ($endstrdata != "%")) { # End With Case *xx
                $strkeyword  = substr($idata,1, (strlen($idata)));
                $iopt = "*^";
            }
        }// end eheck one charator
   }//end of check 2 first character
   $arryitemvalue[$i] = $strkeyword;
   $arryopt[$i] = $iopt;
   $arryandoropt[$i] = $icon;
}
$i += 1;
}// end while
if ($result > 0) {mysql_free_result($result);}
}
?>

</script>

<script language="javascript">
function Trim(s){
    var temp = " ";
    var i = 0;
    while ((temp == " ") && (i <= s.length)) {
        temp = s.charAt(i);
        i++;
    }
    s = s.substring(i - 1, s.length);
    return(s);
}
function check(frm) {
    var szAlert = "Invalid\n";
    var nIndex = 0;
    if (!NumberValidate(frm.search_fd1.value)) {
        nIndex++;
        szAlert += "- " +"'Name' invalid numeric format\n";
    }
    if(nIndex > 0) {
       	alert(szAlert) ;
      	return false ;
    }
    return true ;
}
</script>
<script src="validate.js"></script>
<body>
<div id="header">
</div>
<div id="menu">
	<ul>
		<li><a href="../index.php">|  Home  |</a></li>
		<li><a href="../user_login.php">|  Voting  |</a></li>
		<li><a href="../result.php">|  Result  |</a></li>
		<li><a href="index.php">|  Login  |</a></li>
		<li><a href="../contact.php">|  Contact Us  |</a></li>
        <li><a href="home.php">|  Logout  |</a></li>
	</ul>
</div>
<div id="content">
	<div class="button" id="left">
    <p style="text-align:center; color:#60B7DE;"><strong>Voting System Admin Control Panel</strong></p>
    </div>
<table id="QS_Content_Layout_1_Table" align="center">
  <tr id="QS_Content_Layout_1_TopRow">
    <td id="QS_Content_Layout_1_NorthWest">
            <div id="QS_Content_Layout_1_NorthWestDiv"></div>
    </td>
    <td id="QS_Content_Layout_1_North">
            <div id="QS_Content_Layout_1_NorthDiv"></div>
    </td>
    <td id="QS_Content_Layout_1_NorthEast">
            <div id="QS_Content_Layout_1_NorthEastDiv"></div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_MiddleRow">
    <td id="QS_Content_Layout_1_West">
            <div id="QS_Content_Layout_1_WestDiv">
<?php
// >> START OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [START] [SRV] [0D149724-86B4-44D4-A19F-1686433A68D9] [Find Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - west" [CONTENTLAYOUT_1_W] [INLINE] [STOP] [SRV] [0D149724-86B4-44D4-A19F-1686433A68D9] [Find Position]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_Center">
            <div id="QS_Content_Layout_1_CenterDiv">


<A NAME=top></A>
<Form name="qs_search_form" method="post" action="students_search.php" onSubmit="return qsFormOnSubmitController(this)"  onReset="return qsPageOnResetController(this)" >
<?php
// >> START OF "before search form" [FRMSRCH001] [PRE] [START] [SRV] [0D149724-86B4-44D4-A19F-1686433A68D9] [Find Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "before search form" [FRMSRCH001] [PRE] [STOP] [SRV] [0D149724-86B4-44D4-A19F-1686433A68D9] [Find Position]
?>

<script>
function getURLParam(strParamName){
var strReturn = "";
var strHref = window.location.href;
if ( strHref.indexOf("?") > -1 ){
  var strQueryString = strHref.substr(strHref.indexOf("?")).toLowerCase();
  var aQueryString = strQueryString.split("&");
  for ( var iParam = 0; iParam < aQueryString.length; iParam++ ){
    if (
	aQueryString[iParam].indexOf(strParamName + "=") > -1 ){
      var aParam = aQueryString[iParam].split("=");
      strReturn = aParam[1];
      break;
    }
  }
}
return strReturn;
}
</script>


<Table Border="0" Cellpadding="2" Cellspacing="1" BgColor="#D4D4D4">

<tr>
<td colspan="2" class="ThRows">Find Students</td>
</tr>
<?php
$css_class = "\"TrOdd\"";
if ($err_string != "") {
    print "<tr>";
    print "<td class=\"ThRows\"><Strong>Error:</Strong></td>";
    print "<td class=" . $css_class . " align=Default>" . $err_string . "</td>";
    print "</tr>";
}
?>

</tr>
<tr>
<td class="ThRows">Name</td>
<?php
$cellvalue = "";
if ((!isset($_GET["search_fd1"])) && (!isset($_POST["search_fd1"]))) {
    $itemvalue = "";
} else {
    $itemvalue = $arryitemvalue[1];
}

    $cellvalue = "<input type=\"text\" name=\"search_fd1\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\">" . "<input type=\"hidden\" name=\"multisearch_fd1\" value=\"\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Noparticipant -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [4E406D15-59AA-47CE-AB24-8A58F0B21F47] [Noparticipant]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Noparticipant -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [4E406D15-59AA-47CE-AB24-8A58F0B21F47] [Noparticipant]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>
</tr>
<tr>
<td class="ThRows">Roll No</td>
<?php
$cellvalue = "";
if ((!isset($_GET["search_fd0"])) && (!isset($_POST["search_fd0"]))) {
    $itemvalue = "";
} else {
    $itemvalue = $arryitemvalue[0];
}

    $cellvalue = "<input type=\"text\" name=\"search_fd0\" value=\"" . qsreplace_html_quote(stripslashes($itemvalue)) . "\" size=\"30\"  maxlength=\"50\" >" . "<input type=\"hidden\" name=\"multisearch_fd0\" value=\"\">";
    if ($cellvalue == "") {
        $cellvalue = "&nbsp;";
    }
// >> START OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [START] [SRVITEM] [01D1BE46-7751-4518-AB21-9D6D75CD2753] [Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "Position -> on write tags" [PGITMPREDENDER001] [INLINE] [STOP] [SRVITEM] [01D1BE46-7751-4518-AB21-9D6D75CD2753] [Position]

    print "<td class=" . $css_class . " align=Default >" . $cellvalue . "</td>";
?>

<?php
#----get back url page----
  $backurl = "./students.php?";
?>
<tr>
<td colspan="2" class="ThRows" align=Center>
<input type="hidden" name="act" value="n">
<input type="button" name="QS_Back" value="Back" class="button" OnClick="javascript:window.location='<?php print $backurl; ?>'">&nbsp;&nbsp;
<input type="submit" name="QS_Submit" value="Search" class="button" >&nbsp;&nbsp;
<input type="button" name="QS_Clear" value="Clear" class="button" OnClick="location='students_search.php'">
</td>
</tr>
</Table><br>
<?php
// >> START OF "after search form" [FRMSRCH001] [POST] [START] [SRV] [0D149724-86B4-44D4-A19F-1686433A68D9] [Find Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "after search form" [FRMSRCH001] [POST] [STOP] [SRV] [0D149724-86B4-44D4-A19F-1686433A68D9] [Find Position]
?>
</Form>
<?php
if ($link > 0) {mysql_close($link);}
?>
<?php
// >> START OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [START] [SRV] [0D149724-86B4-44D4-A19F-1686433A68D9] [Find Position]
//-- Your custom code starts here --
//-- Your custom code ends here --
// << END OF "content layout 1 - center (after contents)" [CONTENTLAYOUT_1_C] [POST] [STOP] [SRV] [0D149724-86B4-44D4-A19F-1686433A68D9] [Find Position]
?>
        </div>
    </td>
    <td id="QS_Content_Layout_1_East">
            <div id="QS_Content_Layout_1_EastDiv"></div>
    </td>
  </tr>
  <tr id="QS_Content_Layout_1_BottomRow">
    <td id="QS_Content_Layout_1_SouthWest">
            <div id="QS_Content_Layout_1_SouthWestDiv"></div>
    </td>
    <td id="QS_Content_Layout_1_South">
            <div id="QS_Content_Layout_1_SouthDiv"></div>
    </td>
    <td id="QS_Content_Layout_1_SouthEast">
            <div id="QS_Content_Layout_1_SouthEastDiv"></div>
    </td>
  </tr>
</table>
</div>
<p>&nbsp;</p>
<div id="footer">
	<p>Copyright &copy; 2013 Designed by <a href="http://my-waz.com" class="link1">my-waz.com</a></p>
</div>
</body>
</html>
