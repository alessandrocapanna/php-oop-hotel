<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-hotel</title>

  </head>
  <body>
    <?php
    require_once(__DIR__ . '/stanza.php');

    $stanze = [
      [
        'room_number' => '44',
        'floor' => 3,
        'beds' => 2,
        'created_at' => '19-11-2009',
        'updated_at' => '10-11-2020'
      ],
      [
        'room_number' => '33',
        'floor' => 1,
        'beds' => 3,
        'created_at' => '19-11-2019',
        'updated_at' => '19-11-2019'
      ],
      [
        'room_number' => '45',
        'floor' => 2,
        'beds' => 4,
        'created_at' => '19-11-2019',
        'updated_at' => '23-11-2019'
      ],
      [
        'room_number' => '104',
        'floor' => 2,
        'beds' =>3,
        'created_at' => '13-4-2019',
        'updated_at' => '19-11-2020'
      ],
      [
        'room_number' => '18',
        'floor' => 14,
        'beds' => 3,
        'created_at' => '19-11-2019',
        'updated_at' => '19-11-2020'
      ],
      [
        'room_number' => '104',
        'floor' => 4,
        'beds' => 3,
        'created_at' => '19-2-2019',
        'updated_at' => '19-11-2020'
      ]
    ];

    ?>

    <h1>stanze</h1>

    <ul>
      <?php
      foreach ($stanze as $singola_stanza) {
        $singola_stanza = new stanza($singola_stanza['room_number'],$singola_stanza['floor'],$singola_stanza['beds'],$singola_stanza['created_at'],$singola_stanza['updated_at']);
        echo $singola_stanza->getInfoStanze();
      }
      ?>
    </ul>
  </body>
</html>
