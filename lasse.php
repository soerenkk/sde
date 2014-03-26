<?php

class classname
{
  
  private $exists = false;
  
  
  public function load($id)
  {
    
    // Den kode der henter og tjekker om der er data \\
    
    
    // Når data er hentet \\
    $this->exists = true;
    
    
  }
  
  
  public function save ()
  {
    
    if ($this->exists)
    {
      $this->update();
    }
    else
    {
      $this->insert();
    }
    
  }
  
  private function insert()
  {
    // Den kode der skal køres når man indsætter data i databasen \\
  }
  
  private function update()
  {
    // Den kode der skal køres når man opdaterer data i databasen \\
  }
  
  // Det er yderst sjællent jeg bruger/har behov for den \\
  public function getExists()
  {
    return $this->exitsts;
  }
  
}
