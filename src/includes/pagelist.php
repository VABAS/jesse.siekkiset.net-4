<?php
// Function to print menu.
function printMenu ($lang) {
  $xml = simplexml_load_file("xml/pages.xml");
  $group = $xml->group;
  
  echo '<ul>';
  
  for ($i = 0; $i < count($group); $i++) {
    if ($group[$i]['menu'] == 'true') {
      for ($j = 0; $j < count($group[$i]->page); $j++) {
        if($group[$i]->page[$j]['lang'] == $lang) {
          echo '<li><a href="/' . $lang . '/' . $group[$i][$lang] .'/">' . 
               $group[$i]->page[$j]->linktext . '</a></li>';
        }
      }
    }
  }
  
  echo "</ul>";
}

// Function to check matching page when changing languages. Returns page link to
// switch. Returns none if match can't be found.
function pageMatch ($fromLang, $toLang, $page) {
  $xml = simplexml_load_file("xml/pages.xml");
  $group = $xml->group;
  
  for ($i = 0; $i < count($group); $i++) {
    if ($group[$i][$fromLang] == $page) {
      return $group[$i][$toLang];
    }
  }
  
  return "none";
}

// Function to get first matching pagename in any language. Returns them as
// array where language code is at first cell and pagename in second. Returns
// empty array if match is not found.
function pageMatchAny ($pagename) {
  $xml = simplexml_load_file("xml/pages.xml");
  $group = $xml->group;
  for ($i = 0; $i < count($group); $i++) {
    foreach($xml->group[$i]->attributes() as $name => $value) {
      if ($value == $pagename) {
        return array($name, $value);
      }
    }
  }
  return array();
}

// Function to get page details. Returns page details in array. Returns empty
// array if match can't be found.
function getPageDetails ($page, $lang) {
  $xml = simplexml_load_file("xml/pages.xml");
  $group = $xml->group;
  
  for ($i = 0; $i < count($group); $i++) {
    if ($group[$i][$lang] == $page) {
      for ($j = 0; $j < count($group[$i]); $j++) {
        if ($group[$i]->page[$j]['lang'] == $lang) {
          $script = "none";
          if (isset($group[$i]->page[$j]->script)) {
            $script = $group[$i]->page[$j]->script->__tostring();
          }
          return array("linktext" => $group[$i]->page[$j]->linktext->__tostring(),
                       "title"    => $group[$i]->page[$j]->title->__tostring(),
                       "location" => $group[$i]->page[$j]->location->__tostring(),
                       "script"   => $script
          );
        }
      }
    }
  }
  
  return array();
}
?>
