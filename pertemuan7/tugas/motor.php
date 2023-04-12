<?php
class Motor {
  public $merk;
  public $bensin;
  public $topSpeed;
  public $cc;

  public function __construct($merk, $bensin, $topSpeed, $cc) {
    $this->merk = $merk;
    $this->bensin = $bensin;
    $this->topSpeed = $topSpeed;
    $this->cc = $cc;
  }

  //method untuk menempuh jarak
  public function jalan($jarak) {
    $bensinYangDibutuhkan = $jarak / 30;
     // 1 liter bensin untuk 30km
     
    if ($bensinYangDibutuhkan <= $this->bensin) {
      $this->bensin -= $bensinYangDibutuhkan;
      echo "<br>Motor $this->merk ini melaju sejauh $jarak km dan masih tersisa $this->bensin liter bensin.";
    } else {
      echo "<br>Bahan bakar tidak mencukupi untuk melakukan perjalanan sejauh $jarak km.";
    }
  }

  public function getInfo(){
    echo "<hr>Merk : " . $this->merk;
    echo "<br>Bensin : " . $this->bensin;
    echo "<br>Top Speed : " . $this->topSpeed;
    echo "<br>CC : " . $this->cc;
    return $this->jalan(200);
  }
}

// membuat object/ instansi
$motor1 = new Motor("Vespa", 7, 120, 100);
$motor2 = new Motor("Honda", 9, 110, 120);
$motor3 = new Motor("Kawasaki", 17, 170, 250);

$motor1->getInfo();
$motor2->getInfo();
$motor3->getInfo();
