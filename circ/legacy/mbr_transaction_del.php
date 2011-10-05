<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

require_once("../shared/common.php");

$tab = "circulation";
$nav = "account";
$restrictInDemo = true;
require_once(REL(__FILE__, "../shared/logincheck.php"));

require_once(REL(__FILE__, "../model/MemberAccounts.php"));

$mbrid = $_GET["mbrid"];
$transid = $_GET["transid"];

$acct  = new MemberAccounts;
$acct->deleteOne($transid);

$msg = T("Transaction successfully deleted.");
header("Location: ../circ/mbr_account.php?mbrid=".$mbrid."&reset=Y&msg=".U($msg));