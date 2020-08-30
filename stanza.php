<?php
class stanza {
  public $room_number;
  public $floor;
  public $beds;
  public $created_at;
  public $updated_at;

  public function __construct($_room_number,$_floor,$_beds,$_created_at,$_updated_at)
  {
    $this->room_number = $_room_number;
    $this->floor = $_floor;
    $this->beds = $_beds;
    $this->created_at = $_created_at;
    $this->updated_at = $_updated_at;
  }


  public function getInfoStanze()
  {
    return  '<li>Numero camera: ' . $this->room_number . '</li>'.
            '<li>Piano: ' . $this->floor . '</li>' .
            '<li>Letti nella camera: ' . $this->beds . '</li>'.
            '<li>Creata il: ' . $this->created_at . '</li>'.
            '<li>Modificata il: ' . $this->updated_at . '</li> <br>';
  }
}
?>
