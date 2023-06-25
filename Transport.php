<?php
class Transport
{
   protected string $name;
   protected int $speed;

   public function __construct(string $name, int $speed) {
       $this->name = $name;
       $this->speed = $speed;
   }
    /**
     * @return mixed
     */
    public function getName($name): string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Transport
     */
    public function setName($name): string
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSpeed($speed): int
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     * @return Transport
     */
    public function setSpeed($speed): int
    {
        $this->speed = $speed;
        return $this;
    }
}
  class Car extends Transport {
    private $numDoors;

      /**
       * @param string $name
       * @param int $speed
       * @param int $numDoors
       * @return void
       */
      public function __construct(string $name, int $speed, int $numDoors)
    {
        parent::__construct($name, $speed);
        $this->numDoors = $numDoors;
    }

      /**
       * @return mixed
       */
      public function getNumDoors(): int
      {
          return $this->numDoors;
      }

      /**
       * @param mixed $numDoors
       * @return Car
       */
      public function setNumDoors($numDoors): int
      {
          $this->numDoors = $numDoors;
          return $this;
      }
      public function startEngine() {
          return "Starting the engine of {$this->name}...";
      }
  }
      class Bicycle extends Transport {
      private $numGears;

      public function __construct($name, $speed, $numGears) {
          parent::__construct($name, $speed);
          $this->numGears = $numGears;
      }
          /**
           * @return mixed
           */
          public function getNumGears(): int
          {
              return $this->numGears;
          }

          /**
           * @param mixed $numGears
           * @return Bicycle
           */
          public function ringBell() {
              return "Ring the bell on {$this->name}!";
          }
      }
      class Boat extends Transport {
           private $maxPassangers;

           public function __construct(string $name, int $speed, int $maxPassangers) {
               parent::__construct($name, $speed);
               $this->maxPassangers = $maxPassangers;
           }

          /**
           * @return int
           */
          public function getMaxPassangers(): int
          {
              return $this->maxPassangers;
          }

          /**
           * @param int $maxPassangers
           * @return Boat
           */
          public function setMaxPassangers(int $maxPassangers): Boat
          {
              $this->maxPassangers = $maxPassangers;
              return $this;
          }
           public function sail() {
              return "Sailing with {$this->maxPassangers} passengers on {$this->name}!";
           }
      }
           public function getInfo() {
              return "Name: {$this->name}, speed: {$this->speed} km/h";
      }
      $transport = [];
      $transport = new Car(Volvo, 280, 4);
      $transport = new Bicycle(Romet, 50, 29);
      $transport = new  Boat(Lucky, 140, 3);
         foreach ($transport as $item) {
             echo $item->getInfo();
         }
