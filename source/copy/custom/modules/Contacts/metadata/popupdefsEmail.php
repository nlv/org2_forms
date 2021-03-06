<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings;

$popupMeta = array('moduleMain' => 'Contact',
						'varName' => 'CONTACT',
						'orderBy' => 'contacts.last_name, contacts.first_name, contacts.patronymic_name',
						'whereClauses' => 
							array('first_name' => 'contacts.first_name', 
									'patronymic_name' => 'contacts.patronymic_name',
									'last_name' => 'contacts.last_name',
									'account_name' => 'accounts.name',
									'account_id' => 'accounts.id'),
						'searchInputs' =>
							array('first_name', 'patronymic_name', 'last_name', 'account_name'),
						'create' =>
							array('formBase' => 'ContactFormBase.php',
									'formBaseClass' => 'ContactFormBase',
									'getFormBodyParams' => array('','','ContactSave'),
									'createButton' => 'LNK_NEW_CONTACT'
								  ),
						'templateForm' => 'modules/Contacts/Email_picker.html',
						);

