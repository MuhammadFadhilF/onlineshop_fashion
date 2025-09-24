<?php
class Form {
    private $action;
    private $method;

    public function __construct($action = "", $method = "POST") {
        $this->action = $action;
        $this->method = $method;
        echo "<form action='{$this->action}' method='{$this->method}'>";
    }

    public function inputText($name, $label, $value = "") {
        echo "<div class='mb-3'>";
        echo "<label>{$label}</label>";
        echo "<input type='text' name='{$name}' value='{$value}' class='form-control'>";
        echo "</div>";
    }

    public function inputPassword($name, $label) {
        echo "<div class='mb-3'>";
        echo "<label>{$label}</label>";
        echo "<input type='password' name='{$name}' class='form-control'>";
        echo "</div>";
    }

    public function inputRadio($name, $label, $options = []) {
        echo "<div class='mb-3'>";
        echo "<label>{$label}</label><br>";
        foreach ($options as $val => $text) {
            echo "<input type='radio' name='{$name}' value='{$val}'> {$text}<br>";
        }
        echo "</div>";
    }

    public function inputCheckbox($name, $label, $options = []) {
        echo "<div class='mb-3'>";
        echo "<label>{$label}</label><br>";
        foreach ($options as $val => $text) {
            echo "<input type='checkbox' name='{$name}[]' value='{$val}'> {$text}<br>";
        }
        echo "</div>";
    }

    public function select($name, $label, $options = []) {
        echo "<div class='mb-3'>";
        echo "<label>{$label}</label>";
        echo "<select name='{$name}' class='form-control'>";
        foreach ($options as $val => $text) {
            echo "<option value='{$val}'>{$text}</option>";
        }
        echo "</select>";
        echo "</div>";
    }

    public function textarea($name, $label, $value = "") {
        echo "<div class='mb-3'>";
        echo "<label>{$label}</label>";
        echo "<textarea name='{$name}' class='form-control'>{$value}</textarea>";
        echo "</div>";
    }

    public function submit($label = "Simpan") {
        echo "<button type='submit' class='btn btn-primary'>{$label}</button>";
    }

    public function close() {
        echo "</form>";
    }
}
?>
