<?php
App::uses('AppModel', 'Model');
/**
 * Tops-page Model
 *
 * @property Titel $Titel
 */
class Tops-page extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tops-page';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'titel_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'titel_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Titel' => array(
			'className' => 'Titel',
			'foreignKey' => 'titel_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
