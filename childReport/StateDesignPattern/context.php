<?php
require_once "IdleState.php";
class Context
{

    private $state;
    
    public function __construct()
    {
        
        $this->state=new IdleState();
    }

    public function transitionTo(State $state): void
    {
        //echo "Context: Transition to " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function request1($id): void
    {
        $this->state->handle1($id);
    }

}
?>