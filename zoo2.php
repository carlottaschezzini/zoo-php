<!DOCTYPE html>
<html>
<head>
  <title>Es. zoo2</title>
</head>
<h1>Zoo - caso 2</h1>
<img src="zoo.jpg" alt="Zoo" height="80" ><br/></a>
<body>

  <?php 
    /**
    * 
    */
    class Animals
    {
      
      // quanto mangia (giornaliero)
      // quanti sono
      
      public $dailyfood = array(
        'carne' => 0,
        'verdura' => 0,
        );

      public $number;

      public function foodConsumption(){
        
        $consumption = 0;
        foreach ($this->dailyfood as $food => $quantity) {
          $consumption =  $this->number*$quantity + $consumption;

        }
        return $consumption;
      }

    }

    function calcDays($food_income, $animals ){
      
      $vegetables = 0;
      $meat = 0;

      foreach ($animals as $animal) {
        $vegetables = $vegetables + $animal->dailyfood['verdura'];
        $meat = $meat + $animal->dailyfood['carne'];
      }
        $veg_days = $food_income['verdura']/$vegetables;
        $meat_days = $food_income['carne']/$meat;
        
        if ($veg_days >= $meat_days) {
          echo "Con questa quantità di cibo lo zoo può sfamare i suoi animali per ";
          echo $meat_days;
          echo " giorni";
          echo "<br/>";
        }
        elseif ($veg_days < $meat_days) {
          echo "Con questa quantità di cibo lo zoo può sfamare i suoi animali per ";
          echo $veg_days;
          echo " giorni";
          echo "<br/>";
        }
    }

    $animals;

    $elefante = new Animals;
    $elefante->number = 2;
    $elefante->dailyfood = array(
        'carne' => 0,
        'verdura' => 10
        );
    $animals[] = $elefante;


    $orsopolare = new Animals;
    $orsopolare->number = 2;
    $orsopolare->dailyfood = array(
        'carne' => 0.6,
        'verdura' => 0.3,
        );
   $animals[] = $orsopolare;


    $scimmia = new Animals;
    $scimmia->number = 4;
    $scimmia->dailyfood = array(
        'carne' => 0.1,
        'verdura' => 0.6,
        );
    $animals[] = $scimmia;


    $zebra = new Animals;
    $zebra->number = 2;
    $zebra->dailyfood = array(
        'carne' => 0,
        'verdura' => 2,
        );
    $animals[] = $zebra;


    $opossum = new Animals;
    $opossum->number = 3;
    $opossum->dailyfood = array(
        'carne' => 0.5,
        'verdura' => 0,
        );
    $animals[] = $opossum;


    $ghepardo = new Animals;
    $ghepardo->number = 2;
    $ghepardo->dailyfood = array(
        'carne' => 0.6,
        'verdura' => 0,
        );
    $animals[] = $ghepardo;

    /** Dire quanti giorni ogni singolo zoo può alimentare i suoi animali con:
    verdure: 36kg, carne: 18kg 
    verdure: 6kg, carne: 38kg 
    verdure: 26kg, carne: 19kg 
    verdure: 60kg, carne: 37kg */

    $food_income = array(
      'carne' => 18,
      'verdura' => 36, );
    
    calcDays($food_income, $animals);
    
    $food_income = array(
      'carne' => 38,
      'verdura' => 6, );
    calcDays($food_income, $animals);

    $food_income = array(
      'carne' => 19,
      'verdura' => 26, );
    calcDays($food_income, $animals);

    $food_income = array(
      'carne' => 37,
      'verdura' => 60, );
    calcDays($food_income, $animals);
  ?>

</body>
</html>