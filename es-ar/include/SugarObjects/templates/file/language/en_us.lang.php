<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/*********************************************************************************

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	//module
	'LBL_MODULE_NAME' => 'Documentos',
	'LBL_MODULE_TITLE' => 'Documentos: Inicio',
	'LNK_NEW_DOCUMENT' => 'Creaci�n de Documento',
	'LNK_DOCUMENT_LIST'=> 'Lista de Documentos',
	'LBL_SEARCH_FORM_TITLE'=> 'B�squeda de Documento',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Documento ID',
	'LBL_NAME' => 'Nombre del Documento',
	'LBL_DESCRIPTION' => 'Descripci�n',
	'LBL_ASSIGNED_TO' => 'Asignado a:',
	'LBL_CATEGORY' => 'Categor�a',
	'LBL_SUBCATEGORY' => 'Sub Categor�a',
	'LBL_STATUS' => 'Estado',
	'LBL_IS_TEMPLATE'=>'Es una plantilla',
	'LBL_TEMPLATE_TYPE'=>'Tipo de Documento',
	'LBL_REVISION_NAME' => 'N�mero de Revisi�n',
	'LBL_MIME' => 'Tipo de Representaci�n',
	'LBL_REVISION' => 'Revisi�n',
	'LBL_DOCUMENT' => 'Documento Relacionado',
	'LBL_LATEST_REVISION' => '�ltima Revisi�n',
	'LBL_CHANGE_LOG'=> 'Registro de Modificaci�n',
	'LBL_ACTIVE_DATE'=> 'Fecha de Publicaci�n',
	'LBL_EXPIRATION_DATE' => 'Fecha de Expiraci�n',
	'LBL_FILE_EXTENSION'  => 'Extensi�n del Archivo',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Sin Espcificar',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Nuevo Documento',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nombre del Documento:',
	'LBL_FILENAME' => 'Nombre del Archivo:',
	'LBL_FILE_UPLOAD' => 'Archivo:',
	'LBL_DOC_VERSION' => 'Revisi�n:',
	'LBL_CATEGORY_VALUE' => 'Categor�a:',
	'LBL_SUBCATEGORY_VALUE'=> 'Sub Categor�a:',
	'LBL_DOC_STATUS'=> 'Estado:',
	'LBL_DET_TEMPLATE_TYPE'=>'Tipo de Documento:',
	'LBL_DOC_DESCRIPTION'=>'Descripci�n:',
	'LBL_DOC_ACTIVE_DATE'=> 'Fecha de Publicaci�n:',
	'LBL_DOC_EXP_DATE'=> 'Fecha de Expiraci�n:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Lista de Documentos',
	'LBL_LIST_DOCUMENT' => 'Documento',
	'LBL_LIST_CATEGORY' => 'Categor�a',
	'LBL_LIST_SUBCATEGORY' => 'Sub Categor�a',
	'LBL_LIST_REVISION' => 'Revisi�n',
	'LBL_LIST_LAST_REV_CREATOR' => 'Publicado por',
	'LBL_LIST_LAST_REV_DATE' => 'Fecha de Revisi�n',
	'LBL_LIST_VIEW_DOCUMENT'=>'Vista',
    'LBL_LIST_DOWNLOAD'=> 'Descargar',
	'LBL_LIST_ACTIVE_DATE' => 'Fecha de Publicaci�n',
	'LBL_LIST_EXP_DATE' => 'Fecha de Expiraci�n',
	'LBL_LIST_STATUS'=>'Estado',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nombre del Documento:',
	'LBL_SF_CATEGORY' => 'Categor�a',
	'LBL_SF_SUBCATEGORY'=> 'Sub Categor�a:',
	'LBL_SF_ACTIVE_DATE' => 'Fecha de Publicaci�n:',
	'LBL_SF_EXP_DATE'=> 'Fecha de Expiraci�n:',

	'DEF_CREATE_LOG' => 'Documento Creado',

	//error messages
	'ERR_DOC_NAME'=>'Nombre del Documento',
	'ERR_DOC_ACTIVE_DATE'=>'Fecha de Publicaci�n',
	'ERR_DOC_EXP_DATE'=> 'Fecha de Expiraci�n',
	'ERR_FILENAME'=> 'Nombre del Archivo',

	'LBL_TREE_TITLE' => 'Documentos',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nombre del Documento',
);


?>