<?php
class Form {
    private $action;
    private $method;
    private $form_elements = [];

    public function __construct($action, $method = "POST") {
        $this->action = $action;
        $this->method = $method;
    }

    public function addText($name, $label) {
        $this->form_elements[] = "<label>$label:</label><br><input type='text' name='$name'><br><br>";
    }

    public function addPassword($name, $label) {
        $this->form_elements[] = "<label>$label:</label><br><input type='password' name='$name'><br><br>";
    }

    public function addRadio($name, $label, $options = []) {
        $radio = "<label>$label:</label><br>";
        foreach ($options as $opt) {
            $radio .= "<input type='radio' name='$name' value='$opt'> $opt ";
        }
        $radio .= "<br><br>";
        $this->form_elements[] = $radio;
    }

    public function addCheckbox($name, $label, $options = []) {
        $check = "<label>$label:</label><br>";
        foreach ($options as $opt) {
            $check .= "<input type='checkbox' name='$name' value='$opt'> $opt ";
        }
        $check .= "<br><br>";
        $this->form_elements[] = $check;
    }

    public function addDropdown($name, $label, $options = []) {
        $select = "<label>$label:</label><br><select name='$name'>";
        foreach ($options as $opt) {
            $select .= "<option value='$opt'>$opt</option>";
        }
        $select .= "</select><br><br>";
        $this->form_elements[] = $select;
    }

    public function addTextarea($name, $label) {
        $this->form_elements[] = "<label>$label:</label><br><textarea name='$name'></textarea><br><br>";
    }

    public function addSubmit($name, $value) {
        $this->form_elements[] = "<input type='submit' name='$name' value='$value'>";
    }

    public function display() {
        echo "<form action='{$this->action}' method='{$this->method}'>";
        foreach ($this->form_elements as $element) {
            echo $element;
        }
        echo "</form>";
    }
}
?>
