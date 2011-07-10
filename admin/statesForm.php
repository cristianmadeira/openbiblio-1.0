<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");

	session_cache_limiter(null);

  $tab = "admin";
  $nav = "states";
  $focus_form_name = "showForm";
  $focus_form_field = "";

  require_once(REL(__FILE__, "../functions/inputFuncs.php"));
  require_once(REL(__FILE__, "../shared/logincheck.php"));
  
	Page::header(array('nav'=>$tab.'/'.$nav, 'title'=>''));

?>
<h3 id="listHdr"><?php echo T('States'); ?></h3>

<div id="listDiv">
<h5 id="updateMsg"></h5>
<br />
<form id="showForm" name="showForm">
<input type="button" class="newBtn" value="<?php echo T("Add New"); ?>" />
<fieldset>
<table id="showList" name="showList"">
	<thead>
  <tr>
    <th colspan="1">&nbsp;</th>
    <th><?php echo T("Description"); ?></th>
    <th><?php echo T("Code"); ?></th>
    <th><?php echo T("Default"); ?></th>
  </tr>
	</thead>
	<tbody class="striped">
	  <tr><td colspan="4">to be generated and filled in by Javascript and Server</td></tr>
	</tbody>
	<tfoot>
  <tr>
  	<!-- spacer used to slightly seperate button from form body -->
    <td><input type="hidden" id="xxx" name="xxx" value=""></td>
  </tr>
	</tfoot>
</table>
</fieldset>
<input type="submit" class="newBtn" value="<?php echo T("Add New"); ?>" />
</form>
</div>


<div id="editDiv">
<form id="stateForm" name="editForm">
<h5 id="reqdNote">*<?php echo T("Required note"); ?></h5>
<fieldset>
<legend><?php echo T('State Editor'); ?></legend>
<table id="editTbl">
	<thead>
  </thead>
  <tbody>
  <tr>
    <td>
      <label for="description"><sup>*</sup><?php echo T("Description"); ?>:</label>
    </td>
    <td>
      <input id="description" name="description" type="text" size="32" required aria-required="true" />
    </td>
  </tr>
  <tr>
    <td>
      <label for="code"><sup>*</sup><?php echo T("Code"); ?>:</label>
    </td>
    <td>
      <input id="code" name="code" type="text" required size="20" maxlength="20" aria-required="true" />
    </td>
  </tr>
  <tr>
    <td>
      <label for="default_flg"><sup>*</sup><?php echo T("Default (Y/N)"); ?>:</label>
    </td>
    <td>
      <input id="default_flg" name="default_flg" type="text" size="1" value="N"
				pattern="[Y,N]" required aria-required="true" />
    </td>
  </tr>
  <tr>
    <td><input type="hidden" id="mode" name="mode" value=""></td>
  </tr>
  <tfoot>
  <tr>
    <td colspan="1" align="left">
			<input type="submit" id="addBtn" value="Add" />
			<input type="submit" id="updtBtn" value="Update" />
			<input type="button" id="cnclBtn" value="Cancel" />
    </td>
    <td colspan="1" align="right">
			<input type="submit" id="deltBtn" value="Delete" />
    </td>
  </tr>
  </tfoot>
  </tbody>

</table>
</fieldset>
</form>
</div>

<div id="msgDiv"><fieldSet id="msgArea"></fieldset></div>

<?php
	require_once(REL(__FILE__, "statesJs.php"));
?>	
</body>
</html>