<?php

class Context{
    private $edit;

    public function __construct(Editable $edit)
    {
        $this->edit = $edit;
    }
  
    public function setEdit(Editable $edit)
    {
        $this->edit = $edit;
    }

    public function doEditing(): void
    {
        $resultSearch = $this->search;
        $resultUpdate = $this->update;
    }
   
}

?>