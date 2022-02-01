<?php
namespace booosta\templateparser;

BootstrapTags::load();

class TemplatemoduleTags extends Tags
{
  public function __construct()
  {
    parent::__construct();

    $this->scripttags = [
    
    ];
    
    $this->aliases = [
    
    ];
 

    $this->defaultvars = [

    ];

    $defaulttags = $this->makeInstance("\\booosta\\templateparser\\BootstrapTags");
    $this->merge($defaulttags);    
  }
}
