<?php
/**
 * Description of Item
 *
 * @author richard.lovell
 */
class Item {
    private $id;
    private $content;
    private $meaning;
    private $type;
    
    public function getId() {
	return $this->id;
    }

    public function setId($id) {
	$this->id = $id;
    }
    
    public function getContent() {
	return $this->content;
    }

    public function getMeaning() {
	return $this->meaning;
    }

    public function getType() {
	return $this->type;
    }

    public function setContent($content) {
	$this->content = $content;
    }

    public function setMeaning($meaning) {
	$this->meaning = $meaning;
    }

    public function setType($type) {
	$this->type = $type;
    }


}
