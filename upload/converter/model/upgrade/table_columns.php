<?php
class ModelUpgradeTableColumns extends Model{
    private $lang;
    private $simulate;
    private $showOps;

   public function addColumns( $data ){
        $this->lang = $this->lmodel->get('upgrade_database');

        $this->simulate = ( !empty( $data['simulate'] ) ? true : false );
        $this->showOps  = ( !empty( $data['showOps'] ) ? true : false );

    $vars = array(
		array(
                        'table'         => 'address',
			'field'		=> 'custom_field',
			'column'	=> ' text NOT NULL'
		),
		array(
                        'table'         => 'affiliate',
			'field'		=> 'salt',
			'column'	=> ' varchar(9) NOT NULL AFTER password'
		),
		array(
                        'table'         => 'banner_image',
			'field'		=> 'sort_order',
			'column'	=> ' int(3) NOT NULL'
		),
		array(
                        'table'         => 'category_description',
			'field'		=> 'meta_title',
			'column'	=> ' varchar(255) NOT NULL AFTER description'
		),
		array(
                        'table'         => 'customer',
			'field'		=> 'custom_field',
			'column'	=> ' text NOT NULL AFTER address_id'
		),
		array(
                        'table'         => 'customer',
			'field'		=> 'salt',
			'column'	=> ' varchar(9) NOT NULL AFTER password'
		),
		array(
                        'table'         => 'customer',
			'field'		=> 'safe',
			'column'	=> ' tinyint(1) NOT NULL'
		),
		array(
                        'table'        => 'customer',
			'field'		=> 'token',
			'column'	=> ' varchar(255) NOT NULL AFTER approved'
		),
		array(
                        'table'         => 'user',
			'field'		=> 'salt',
			'column'	=> ' varchar(9) NOT NULL AFTER password'
		),
		array(
                        'table'         => 'user',
			'field'		=> 'image',
			'column'	=> ' varchar(255) NOT NULL AFTER email'
		),
		array(
                        'table'         => 'information',
			'field'		=> 'bottom',
			'column'	=> ' int(1) NOT NULL AFTER information_id'
		),
		array(
                        'table'         => 'information_description',
			'field'		=> 'meta_title',
			'column'	=> ' varchar(255) NOT NULL'
		),
		array(
                        'table'         => 'information_description',
			'field'		=> 'meta_description',
			'column'	=> ' varchar(255) NOT NULL'
		),
		array(
                        'table'         => 'information_description',
			'field'		=> 'meta_keyword',
			'column'	=> ' varchar(255) NOT NULL'
		),
		array(
                        'table'        => 'customer_group',
			'field'		=> 'approval',
			'column'	=> ' int(1) NOT NULL'
		),
		array(
                        'table'        => 'customer_group',
			'field'		=> 'sort_order',
			'column'	=> ' int(3) NOT NULL'
		),
		array(
                        'table'        => 'option_value',
			'field'		=> 'image',
			'column'	=> ' varchar(255) NOT NULL AFTER option_id'
		),
		array(
                        'table'        => 'order',
			'field'		=> 'payment_code',
			'column'	=> ' varchar(128) NOT NULL'
		),
		array(
                        'table'        => 'order',
			'field'		=> 'custom_field',
			'column'	=> ' text NOT NULL'
		),
		array(
                        'table'        => 'order',
			'field'		=> 'payment_custom_field',
			'column'	=> ' text NOT NULL'
		),
		array(
                        'table'        => 'order',
			'field'		=> 'shipping_custom_field',
			'column'	=> ' text NOT NULL'
		),
		array(
                        'table'        => 'order',
			'field'		=> 'shipping_code',
			'column'	=> ' varchar(128) NOT NULL'
		),
		array(
                        'table'        => 'order',
			'field'		=> 'forwarded_ip',
			'column'	=> ' varchar(40) NOT NULL'
		),
		array(
                        'table'        => 'order',
			'field'		=> 'user_agent',
			'column'	=> ' varchar(255) NOT NULL'
		),
		array(
                        'table'        => 'order',
			'field'		=> 'accept_language',
			'column'	=> ' varchar(255) NOT NULL'
		),
		array(
                        'table'        => 'order',
			'field'		=> 'marketing_id',
			'column'	=> ' int(11) NOT NULL'
		),
		array(
                        'table'        => 'order',
			'field'		=> 'tracking',
			'column'	=> ' varchar(64) NOT NULL'
		),
		array(
                        'table'        => 'order_product',
			'field'		=> 'reward',
			'column'	=> ' int(8) NOT NULL'
		),
		array(
                        'table'        => 'order_recurring_transaction',
			'field'		=> 'reference',
			'column'	=> ' varchar(255) NOT NULL AFTER order_recurring_id'
		),
		array(
                        'table'        => 'product',
			'field'		=> 'mpn',
			'column'	=> ' varchar(14) NOT NULL AFTER upc'
		),
		array(
                        'table'        => 'product',
			'field'		=> 'isbn',
			'column'	=> ' varchar(14) NOT NULL AFTER upc'
		),
		array(
                        'table'        => 'product',
			'field'		=> 'jan',
			'column'	=> ' varchar(14) NOT NULL AFTER upc'
		),
		array(
                        'table'        => 'product',
			'field'		=> 'ean',
			'column'	=> ' varchar(14) NOT NULL AFTER upc'
		),
		array(
                        'table'        => 'product_description',
			'field'		=> 'meta_title',
			'column'	=> ' varchar(255) NOT NULL AFTER description'
		),
		array(
                        'table'        => 'product_description',
			'field'		=> 'tag',
			'column'	=> ' text NOT NULL AFTER description'
		),
		array(
                        'table'        => 'product_image',
			'field'		=> 'sort_order',
			'column'	=> ' int(3) NOT NULL'
		),
		array(
                        'table'        => 'product_recurring',
			'field'		=> 'customer_group_id',
			'column'	=> ' int(11) NOT NULL'
		),
		array(
                        'table'        => 'product_recurring',
			'field'		=> 'recurring_id',
			'column'	=> ' int(11) NOT NULL'
		),
		array(
                        'table'        => 'return',
			'field'		=> 'product_id',
			'column'	=> ' int(11) NOT NULL'
		),
		array(
                        'table'        => 'return',
			'field'		=> 'product',
			'column'	=> ' varchar(255) NOT NULL'
		),
		array(
                        'table'        => 'return',
			'field'		=> 'model',
			'column'	=> ' varchar(64) NOT NULL'
		),
		array(
                        'table'        => 'return',
			'field'		=> 'quantity',
			'column'	=> ' int(4) NOT NULL'
		),
		array(
                        'table'        => 'return',
			'field'		=> 'opened',
			'column'	=> ' tinyint(1) NOT NULL'
		),
		array(
                        'table'        => 'return',
			'field'		=> 'return_reason_id',
			'column'	=> ' int(11) NOT NULL'
		),
		array(
                        'table'        => 'return',
			'field'		=> 'return_action_id',
			'column'	=> ' int(11) NOT NULL'
		),
		array(
                        'table'        => 'tax_rate',
			'field'		=> 'type',
			'column'	=> ' char(1) NOT NULL AFTER rate'
		)
	);

    $altercounter = 0;
    $text = '';
  
    foreach( $vars as $k => $v ) {
     
	   if( array_search( DB_PREFIX . $v['table'], $this->getTables() ) || $v['table'] == 'address' ){
             if( !array_search( $v['field'], $this->getDbColumns( $v['table'] ) )) {

			$sql = '
			ALTER TABLE
				`' . DB_PREFIX . $v['table'] . '`
			ADD COLUMN
				' . $v['field'] . $v['column'];

			if( !$this->simulate ) {
                               $this->db->query( $sql );
                        }
                        if( $this->showOps ) {
                               $text .= '<p><pre>' . $sql .'</pre></p>';
                        }
			++$altercounter;
			$text .= $this->msg( sprintf( $this->lang['msg_column'], $v['field'],  $v['table'] ) );
                        $this->cache->delete( $v['table'] );

	       }
            }
	}

	$text .= '<div class="header round"> ';
	$text .= sprintf( $this->lang['msg_col_counter'], $altercounter, '' );
        $text .= ' </div>';
        $text .= $this->deleteColumns();
        $text .= $this->changeColumns();

      return $text;
  }

  public function deleteColumns(){
      /**
       * Delete Columns
       * */

    $delcols = array(
		array(
                        'table'         => 'address',
			'field'		=> 'company_id'
		),
		array(
                        'table'         => 'address',
			'field'		=> 'tax_id'
		),
		array(
                        'table'         => 'customer_field',
			'field'		=> 'position'
		),
		array(
                        'table'         => 'customer_field',
			'field'		=> 'required'
		),
		array(
                        'table'         => 'customer_group',
			'field'		=> 'company_id_display'
		),
		array(
                        'table'         => 'customer_group',
			'field'		=> 'company_id_required'
		),
		array(
                        'table'         => 'customer_group',
			'field'		=> 'name'
		),
		array(
                        'table'         => 'customer_group',
			'field'		=> 'tax_id_display'
		),
		array(
                        'table'         => 'customer_group',
			'field'		=> 'tax_id_required'
		),
		array(
                        'table'         => 'download',
			'field'		=> 'remaining'
		),
		array(
                        'table'         => 'order',
			'field'		=> 'payment_company_id'
		),
		array(
                        'table'         => 'order',
			'field'		=> 'payment_tax_id'
		),
		array(
                        'table'         => 'order',
			'field'		=> 'reward'
		),
		array(
                        'table'         => 'order_total',
			'field'		=> 'text'
		),
		array(
                        'table'         => 'product_recurring',
			'field'		=> 'store_id'
		),
		array(
                        'table'         => 'tax_rate',
			'field'		=> 'priority'
                   ),
		array(
                        'table'         => 'tax_rate',
			'field'		=> 'tax_class_id'
                   )
               );

    $deletecol = 0;
    $text = '';
    foreach( $delcols as $k => $v ) {
	   if( array_search( DB_PREFIX . $v['table'], $this->getTables() ) ) {
		if( array_search( $v['field'], $this->getDbColumns( $v['table'] ) ) ) {

			$sql = '
			ALTER TABLE
				`' . DB_PREFIX . $v['table'] . '`
			DROP COLUMN
				' . $v['field'];

			if( !$this->simulate ) {
                               $this->db->query( $sql );
                        }
                        if( $this->showOps ) {
                              $text .= '<p><pre>' . $sql .'</pre></p>';
                        }
			++$deletecol;
               $text .= $this->msg( sprintf( $this->lang['msg_delete_column'], $v['field'],  $v['table'] ) );
			if( !$this->simulate ) {
                             $this->cache->delete( $v['table'] );
                        }
		}
	}
      }
        
	$text .= '<div class="header round"> ';
	$text .= sprintf( $this->lang['msg_del_column'], $deletecol );
        $text .= ' </div>';

        return $text;
  }
	
      /**
       * Change Columns
       * */
  public function changeColumns(){
    $text = '';
  $changecols = array(
		array(
                        'table'         => 'order_recurring',
			'field'		=> 'reference',
			'oldfield'	=> 'profile_reference',
			'column'	=> 'profile_reference reference varchar(255) NOT NULL'
		),
		array(
                        'table'         => 'order_recurring',
			'field'		=> 'recurring_name',
			'oldfield'	=> 'profile_name',
			'column'	=> 'profile_name recurring_name varchar(255) NOT NULL'
		),
		array(
                        'table'         => 'order_recurring',
			'field'		=> 'recurring_description',
			'oldfield'	=> 'profile_description',
			'column'	=> 'profile_description recurring_description varchar(255) NOT NULL'
		),
		array(
                        'table'         => 'order_recurring',
			'field'		=> 'recurring_id',
			'oldfield'	=> 'profile_id',
			'column'	=> 'profile_id recurring_id int(11) NOT NULL'
		),
		array(
                        'table'         => 'order_recurring',
			'field'		=> 'date_added',
			'oldfield'	=> 'created',
			'column'	=> 'created date_added datetime NOT NULL'
		),
		array(
                        'table'         => 'order_recurring_transaction',
			'field'		=> 'date_added',
			'oldfield'	=> 'created',
			'column'	=> 'created date_added datetime NOT NULL'
		),
		array(
                        'table'         => 'product_option',
			'field'		=> 'value',
			'oldfield'	=> 'option_value',
			'column'	=> 'option_value value text NOT NULL'
		)
        );
	


  $changetype = array(
		array(
                        'table'         => 'affiliate',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'affiliate',
			'field'		=> 'approved',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'banner',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'category',
			'field'		=> 'top',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'category',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'country',
			'field'		=> 'postcode',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'country',
			'field'		=> 'postcode_required',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'country',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 1'
		),
		array(
                        'table'         => 'coupon',
			'field'		=> 'logged',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'coupon',
			'field'		=> 'shipping',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'coupon',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'currency',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'customer',
			'field'		=> 'newsletter',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'customer',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'customer',
			'field'		=> 'approved',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'information',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT \'1\''
		),
		array(
                        'table'         => 'language',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'order_history',
			'field'		=> 'notify',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'customer',
			'field'		=> 'approved',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'product',
			'field'		=> 'shipping',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT \'1\''
		),
		array(
                        'table'         => 'product',
			'field'		=> 'subtract',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT \'1\''
		),
		array(
                        'table'         => 'product',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'product_option',
			'field'		=> 'required',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'product_option_value',
			'field'		=> 'subtract',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'return_history',
			'field'		=> 'notify',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'review',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'user',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'voucher',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT 0'
		),
		array(
                        'table'         => 'zone',
			'field'		=> 'status',
			'column'	=> ' tinyint(1) NOT NULL DEFAULT \'1\''
		)
       );

     $changecounter = 0;

  if( !$this->cache->get( 'create_index' ) ){

	$keyset = array(
		array(
                        'table'         => 'category',
			'index'		=> 'parent_id',
			'field'		=> 'parent_id'
		),
		array(
                        'table'         => 'product_image',
			'index'		=> 'product_id',
			'field'		=> 'product_id'
		),
		array(
                        'table'         => 'url_alias',
			'index'         => 'query',
			'field'         => 'query'
		),
		array(
                        'table'         => 'url_alias',
			'index'	        => 'keyword',
			'field'         => 'keyword'
		)
         );

          foreach( $keyset as $k => $v ) {

	    if( array_search( DB_PREFIX . $v['table'], $this->getTables() ) || $v['table'] == 'address' ) {

		 if( array_search( $v['field'], $this->getDbColumns( $v['table'] ) ) ) {
			$sql = '
			CREATE INDEX
				`' . $v['index'] . '`
                        ON
			         ' . DB_PREFIX . $v['table'].'(' . $v['field'] . ') using
                        BTREE';

			if( !$this->simulate ) {
                               $this->db->query( $sql );
                        }
                        if( $this->showOps ) {
                              $text .= '<p><pre>' . $sql .'</pre></p>';
                        }
			++$changecounter;
			$text .= $this->msg( sprintf( $this->lang['msg_change_column'], $v['field'],  $v['table'] ) );
			if( !$this->simulate ) {
                          $this->cache->delete( $v['table'] );
                        }
		}
	    }
         }
	
	  $sql = '
                 ALTER TABLE
                           ' . DB_PREFIX . 'order
                 ALTER 
                           currency_value
                 SET DEFAULT  \'1.00000000\'';
		
	        if( !$this->simulate ) {
                               $this->db->query( $sql );
                 }
                 if( $this->showOps ) {
                              $text .= '<p><pre>' . $sql .'</pre></p>';
                 }
	  ++$changecounter;

	if( !$this->simulate ) {
          $this->cache->set( 'create_index', $keyset );
         }

	  $text .= $this->msg( sprintf( $this->lang['msg_change_column'], 'currency_value',  DB_PREFIX . 'order' ) );

     }

     foreach( $changecols as $k => $v ) {

	   if( array_search( DB_PREFIX . $v['table'], $this->getTables() ) || $v['table'] == 'address' ) {
                      
		if( array_search( $v['oldfield'], $this->getDbColumns( $v['table'] ) ) ) {
			$sql = '
			ALTER TABLE
				  `' . DB_PREFIX . $v['table'] . '`
			CHANGE
				  ' . $v['column'];

			if( !$this->simulate ) {
                               $this->db->query( $sql );
                        }
                        if( $this->showOps ) {
                               $text .= '<p><pre>' . $sql .'</pre></p>';
                        }
			++$changecounter;
			$text .= $this->msg( sprintf( $this->lang['msg_change_column'], $v['field'],  $v['table'] ) );
			if( !$this->simulate ) {
                           $this->cache->delete( $v['table'] );
                        }
		}
	}
     }


     foreach( $changetype as $k => $v ) {

	   if( array_search( DB_PREFIX . $v['table'], $this->getTables() ) || $v['table'] == 'address' ) {

		if( array_search( $v['field'], $this->getDbColumns( $v['table'] ) ) ) {
			$sql = '
			ALTER TABLE
				`' . DB_PREFIX . $v['table'] . '`
			MODIFY
				' . $v['field'] . $v['column'];

			if( !$this->simulate ) {
                               $this->db->query( $sql );
                        }
                        if( $this->showOps ) {
                               $text .= '<p><pre>' . $sql .'</pre></p>';
                        }
			++$changecounter;
			$text .= $this->msg( sprintf( $this->lang['msg_change_column'], $v['field'],  $v['table'] ) );
			if( !$this->simulate ) {
                          $this->cache->delete( $v['table'] );
                        }
		}
	}
     }


	$text .= '<div class="header round"> ';
	$text .= sprintf( $this->lang['msg_change_counter'], $changecounter );
        $text .= ' </div>';

        return $text;
  }	

    /* Tax tables change */

  public function changeTaxRate( $data ){

        $this->simulate = ( !empty( $data['simulate'] ) ? true : false );
        $this->showOps  = ( !empty( $data['showOps'] ) ? true : false );
      $text = '';

	if( array_search( 'tax_class_id', $this->getDbColumns( 'tax_rate' ) ) !=false)  {

		$sql = '
		SELECT
			*
		FROM
			`' . DB_PREFIX . 'tax_class` AS tc
		LEFT JOIN
			`' . DB_PREFIX . 'tax_rate` AS tr
			ON(tc.tax_class_id = tr.tax_class_id)';

		$taxes = $this->db->query( $sql );

		$sql = '
		SELECT
			*
		FROM
			`' . DB_PREFIX . 'tax_rate`
		ORDER BY
			`tax_rate_id` ASC';
		$rates = $this->db->query( $sql );

	foreach( $taxes->rows as $tax ){
			$sql = '
			SELECT
				*
			FROM
				`' . DB_PREFIX . 'tax_rate`
			WHERE
				tax_class_id = \''. $tax['tax_class_id'] . '\'';

			$result = $this->db->query( $sql );

			if( !isset( $result->row['tax_class_id'] ) ) {
				$sql = '
				INSERT INTO
					`' . DB_PREFIX . 'tax_rule`
				SET
					tax_class_id = \'' . $tax['tax_class_id'] . '\',
					tax_rate_id = \'' . $tax['tax_rate_id'] . '\',
					based = \'shipping\',
					priority = \'' . $tax['priority'] . '\'';

				if( !$this->simulate ) {
                                       $this->db->query( $sql );
                                }
                                if( $this->showOps ) {
                                      $text .= '<p><pre>' . $sql .'</pre></p>';
                                }
			}
	}

	foreach( $rates->rows as $rate ) {
			$sql = '
			SELECT
				*
			FROM
				`' . DB_PREFIX . 'tax_rate_to_customer_group`
			WHERE
				tax_rate_id = \'' . $rate['tax_rate_id'] . '\'';

	   if( array_search( DB_PREFIX . 'tax_rate_to_customer_group', $this->getTables() ) ) {
			$result = $this->db->query( $sql );

			if( !isset( $result->row['tax_rate_id'] ) ) {
				$sql = '
				INSERT INTO
					`' . DB_PREFIX . 'tax_rate_to_customer_group`
				SET
					tax_rate_id = \'' . $rate['tax_rate_id'] . '\',
					customer_group_id = \'1\'';

				if( !$this->simulate ) {
                                       $this->db->query( $sql );
                                }
                                if( $this->showOps ) {
                                       $text .= '<p><pre>' . $sql .'</pre></p>';
                                }
			}
             }
	}

		/* Change Column 1:*/
		$sql = '
		ALTER TABLE
			`' . DB_PREFIX . 'tax_rate`
		CHANGE
			description name varchar(255) NOT NULL';

		if( array_search( 'description', $this->getDbColumns( 'tax_rate' ) ) ) {

		  if( !$this->simulate ) {
                         $this->db->query( $sql );
                   }
                  if( $this->showOps ) {
                         $text .= '<p><pre>' . $sql .'</pre></p>';
                  }
		  $text .=  $this->msg( sprintf( $this->lang['msg_column'], 'value',  DB_PREFIX . 'tax_rate' ) );

                }
		$sql = '
		UPDATE
			`' . DB_PREFIX . 'tax_rate`
		SET
			`type` = \'P\'';

		if( array_search( 'type', $this->getDbColumns( 'tax_rate' ) ) ) {

		  if( !$this->simulate ) {
                         $this->db->query( $sql );
                  }
                  if( $this->showOps ) {
                        $text .= '<p><pre>' . $sql .'</pre></p>';
                  }
		  ++$deletecol;
		  $text .= $this->msg( sprintf( $this->lang['msg_delete'],  DB_PREFIX . 'tax_rate' ) );

                }
	}
        return $text;

  }
	/** delete tables */
  public function deleteTables( $data ){
  
        $this->simulate = ( !empty( $data['simulate'] ) ? true : false );
        $this->showOps  = ( !empty( $data['showOps'] ) ? true : false );

    $deletetab = 0;
    $text = '';

  $droptable = array(
                     'customer_field',
                     'customer_ip_blacklist',
                     'order_field',
                     'order_misc',
		     'product_profile',
                     'product_tag',
                     'profile',
		     'profile_description',
                     'order_download'
		);

       foreach( $droptable as $table ) {
	  if( array_search( DB_PREFIX . $table, $this->getTables() ) ) {
		$sql = 'DROP TABLE `' . DB_PREFIX . $table . '`';

		if( !$this->simulate ) {
                       $this->db->query( $sql );
                }
                if( $this->showOps ) {
                       $text .= '<p><pre>' . $sql .'</pre></p>';
                }
		++$deletetab;
		$text .= $this->msg( sprintf( $this->lang['msg_delete'],  DB_PREFIX . 'product_tag' ) );

                        $this->cache->delete( $table );
	  }
 
       }
	if( array_search( DB_PREFIX . 'return_product', $this->getTables() ) ) {

                $sql = '
                SELECT 
                       *
                FROM  `' . DB_PREFIX . 'return_product';
 
                $query = $this->db->query($sql);

       if( count( $query->rows ) > 0 ){
       /*
        * Change content from table return_product
        * to table return
        */
               foreach( $query->rows as $id ){

		  $sql = '
		  UPDATE
		 	   `' . DB_PREFIX . 'return`
                  SET
                           `product_id`       = \'' . $id['product_id'] .'\',
                           `product`          = \'' . $id['name'] .'\',
                           `model`            = \'' . $id['model'] .'\',
                           `quantity`         = \'' . $id['quantity'] .'\',
                           `opened`           = \'' . $id['opened'] .'\',
                           `return_reason_id` = \'' . $id['return_reason_id'] .'\',
                           `return_action_id` = \'' . $id['return_action_id'] .'\',
                           `comment`          = \'' . $id['comment'] .'\'
                 WHERE
                           `return_id`        = \'' . $id['return_id'] .'\'';
		  

		  if( !$this->simulate ) {
                         $this->db->query( $sql );
                  }
                  if( $this->showOps ) {
                         $text .= '<p><pre>' . $sql .'</pre></p>';
                  }

		  $text .= $this->msg( sprintf( $this->lang['msg_text'], $this->data['msg_new_data'],  DB_PREFIX . 'return' ) );

                }
             }
		$sql = 'DROP TABLE `' . DB_PREFIX . 'return_product`';

		if( !$this->simulate ) {
                       $this->db->query( $sql );
                } 
                if( $this->showOps ) {
                       $text .= '<p><pre>' . $sql .'</pre></p>';
                }

		++$deletetab;
		$text .= $this->msg( sprintf( $this->lang['msg_delete'], 'return_product', '' ) );
 
	}
       

	$text .= '<div class="header round"> ';
	$text .= sprintf( $this->lang['msg_delete_table'], $deletetab, '' );
        $text .= ' </div>';

        $this->changeSalt();

       return $text;

  }


  private function changeSalt(){

         $file = DIR_APPLICATION . 'config.php';

         $content = file_get_contents( $file );
         $content = str_replace('(\'DB_USER_SALT\', \'0\')', '(\'DB_USER_SALT\', \'1\')', $content);
	    
	if( !$this->simulate ) {
		$fw = fopen( $file, 'w' );
		fwrite( $fw, $content );
		fclose( $fw );
	}
		    
  }
  private function msg( $data ){
       $data = str_replace( $data, '<div class="msg round"> ' . $data .' </div>', $data);
       return $data;
  }
  public function getDbColumns( $table ) {
	if( $data =  $this->cache->get( $table ) ) {
		return $data;
	}else{
		global $link;

        if( array_search( DB_PREFIX . $table, $this->getTables() ) || $table == 'address'){
                $colums = $this->db->query("SHOW COLUMNS FROM " . DB_PREFIX . $table . " FROM " . DB_DATABASE);

		$ret		= array();

               foreach( $colums->rows as $field){
                 $ret[] = $field['Field'];
               }
          return $ret;	
         }
    }
  }

  public function getTables() {
       $query = $this->db->query("SHOW TABLES FROM " . DB_DATABASE);

        $table_list = array();
        foreach($query->rows as $table){
                      $table_list[] = $table['Tables_in_'. DB_DATABASE];
          }
        return $table_list;
   }
}