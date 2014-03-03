<?php
return CMap::mergeArray(
  require(dirname(__FILE__) . '/main.php'),
  array(
    // Put front-end settings there
    // (for example, url rules).
    'name'       => 'vaco.vn',
    'components' => array(
      // uncomment the following to enable URLs in path-format
      'urlManager' => array(
        'urlFormat' => 'path',
        'rules'     => array(
          '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
        ),
      ),
    ),
  )
);
?>