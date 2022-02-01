<?php
namespace booosta\templateparser;

BootstrapTags::load();

class TemplatemoduleTags extends Tags
{
  public function __construct()
  {
    parent::__construct();

    $this->scripttags = [
        'BPANEL'  => null,
    ];
    
    $this->aliases = [
    
    ];
 

    $this->defaultvars = [

    ];

    $defaulttags = $this->makeInstance("\\booosta\\templateparser\\BootstrapTags");
    $this->merge($defaulttags);    
  }
}


namespace booosta\templateparser\tags\bootstrap;

class bpanel extends \booosta\templateparser\Tag
{
  protected $html = '<div class="panel panel-default %class"><div class="panel-heading"><h3 class="panel-title">%ptitle</h3></div><div class="panel-body">';

  protected function postcode()
  {
    if($this->extraattributes['paneltitle']) $this->html = str_replace("%ptitle", $this->extraattributes['paneltitle'], $this->html);
    else $this->html = str_replace("%ptitle", '', $this->html);
  }
}

class bselect extends \booosta\templateparser\tags\bselect1 {}

