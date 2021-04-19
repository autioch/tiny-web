<?php

/* 1.1.1 */

/**
 * Single class for creating, generating and evaluating HTML forms.
 */
class qbWebForm {

    public $id;
    public $action;
    public $method;
    public $fields = array();
    public $hidden = array();
    public $valid = false;
    public $sent;
    public $database;
    public $connected;
    private $source;
    public $errors = array(
        'antybot' => 'Proszę wypełnić pole.',
        'checkbox' => 'Proszę zatwierdzić.',
        'email' => 'Proszę sprawdzić adres e-mail.',
        'file' => 'Proszę wybrać plik.',
        'hidden' => '',
        'label' => '',
        'number' => 'Proszę wprowadzić wartość liczbową',
        'password' => 'Proszę wprowadzić hasło.',
        'radio' => 'Proszę wybrać opcję.',
        'select' => 'Proszę wybrać opcję.',
        'submit' => '',
        'date' => 'Proszę wybrać datę',
        'text' => 'Proszę wypełnić pole.',
        'textarea' => 'Proszę wprowadzić dłuższą wypowiedź.'
    );

    function __construct($id = 'form', $action = '', $method = 'get', $class = '') {
        $this->id = $id;
        $this->action = $action;
        $this->method = $method;
        $this->class = $class;
        $this->source = ($method == 'get') ? $_GET : $_POST;
        $this->sent = isset($this->source[$id]);
    }

    private function add($id, $type, $label, $error, $required, $value) {
        $e = (strlen(trim($error)) > 0 ) ? trim($error) : $this->errors[$type];
        $this->fields[$id] = array(
            'id' => trim($id),
            'type' => trim($type),
            'label' => trim($label),
            'error' => $e,
            'required' => $required,
            'value' => trim($value),
            'valid' => true
        );
    }

    public function add_antybot($id, $label, $expected, $error = '', $required = true, $value = '') {
        $this->add($id, 'antybot', $label, $error, $required, $value);
        $this->fields[$id]['expected'] = $expected;
    }

    public function add_checkbox($id, $label, $error = '', $required = true) {
        $this->add($id, 'checkbox', $label, $error, $required, '');
    }

    public function add_email($id, $label, $compare = '', $error = '', $required = true, $value = '') {
        $this->add($id, 'email', $label, $error, $required, $value);
        if (strlen($compare) > 0) {
            $this->fields[$id]['compare'] = $compare;
        }
    }

    public function add_file($id, $label, $error = '', $required = true) {
        $this->add($id, 'file', $label, $error, $required, '');
    }

    public function add_hidden($id, $name, $value) {
        $this->hidden[$id] = array(
            'id' => $id,
            'name' => $name,
            'value' => $value,
            'expected' => $value
        );
    }

    public function add_label($id, $label) {
        $this->add($id, 'label', $label, '', false, '');
    }

    public function add_number($id, $label, $error = '', $required = true, $value = '') {
        $this->add($id, 'number', $label, $error, $required, $value);
    }

    public function add_password($id, $label, $error = '') {
        $this->add($id, 'password', $label, $error, true, '');
    }

    public function add_radio($id, $label, array $options, $error = '', $required = true, $value = '') {
        $this->add($id, 'radio', $label, $error, $required, $value);
        $this->fields[$id]['options'] = $options;
    }

    public function add_select($id, $label, array $options, $error = '', $required = true, $value = '') {
        $this->add($id, 'select', $label, $error, $required, $value);
        $this->fields[$id]['options'] = $options;
    }

    public function add_submit($id, $label) {
        $this->add($id, 'submit', '', '', false, $label);
    }

    public function add_text($id, $label, $error = '', $required = true, $value = '') {
        $this->add($id, 'text', $label, $error, $required, $value);
    }

    public function add_textarea($id, $label, $error = '', $required = true, $value = '') {
        $this->add($id, 'textarea', $label, $error, $required, $value);
    }

    public function add_date($id, $label, $error = '', $required = true, $value = '') {
        $this->add($id, 'date', $label, $error, $required, $value);
    }

    public function db_connect($host, $user, $password, $database) {
        $this->database = mysql_connect($host, $user, $password);
        if (!$this->database) {
            return false;
        }
        mysql_query("set character_set_client=utf8;", $this->database);
        mysql_query("set character_set_server=utf8;", $this->database);
        mysql_query("set character_set_connection=utf8;", $this->database);
        mysql_query("set names utf8;", $this->database);
        $this->connected = mysql_select_db($database, $this->database);
        return $this->connected;
    }

    public function db_save() {
        if (!$this->connected) {
            return false;
        }
        $ignore = array('antybot', 'file', 'label', 'submit');
        $fields = array();
        $values = array();
        foreach ($this->fields as $key => $val) {
            if (!in_array($val['type'], $ignore)) {
                $fields[] = $key;
                if ($val['type'] == 'checkbox') {
                    $values[] = $val['value'] ? 1 : 0;
                } else {
                    $values[] = $val['value'];
                }
            }
        }
        foreach ($this->hidden as $key => $val) {
            $fields[] = $key;
            $values[] = $val['value'];
        }
        $q = 'insert into ' . $this->id . ' (' . implode(',', $fields) . ') values (\'' . implode("','", $values) . '\')';
        if (!mysql_query($q, $this->database)) {
            return false;
        }
        return true;
    }

    public function dev_dump() {
        foreach ($this->fields as $id => $field) {
            echo '<pre>', $id, ' ', print_r($field, true), '</pre>';
        }
    }

    public function dev_text($hidden = false) {
        $text = '';
        $ignore = array('antybot', 'file', 'submit');
        foreach ($this->fields as $key => $val) {
            if (!in_array($val['type'], $ignore)) {

                if ($val['type'] == 'label') {
                    $text .= '<br><br><strong>' . $val['label'] . '</strong>';
                } else {
                    $text .= '<br>' . $val['label'] . ': ';
                    if ($val['type'] == 'checkbox') {
                        $text .= $val['value'] ? 'Tak' : 'Nie';
                    } else {
                        $text .= $val['value'];
                    }
                }
            }
        }
        if ($hidden) {
            $text .= '<br><br>';
            foreach ($this->hidden as $key => $val) {
                $text .= '<br>' . $val['label'] . ': ' . $val['value'];
            }
        }
        return $text;
    }

    public function dev_db_install() {
        if (!$this->connected) {
            return false;
        }
        $ignore = array('antybot', 'file', 'label', 'submit');
        $fields = array();
        foreach ($this->fields as $key => $val) {
            if (!in_array($val['type'], $ignore)) {
                $fields[] = $key . ' ' . $this->dev_db_field_type($val);
            }
        }
        foreach ($this->hidden as $key => $val) {
            $fields[] = $key . ' varchar(255)';
        }
        $q = 'create table ' . $this->id . ' (id int not null primary key auto_increment, ' . implode(', ', $fields) . ', created_at timestamp default now()) character set utf8 collate utf8_bin';
        if (!mysql_query($q, $this->database)) {
            return false;
        }
        return true;
    }

    public function dev_db_field_type($field) {
        $t = 'int(1)';
        switch ($field['type']) {
            case 'antybot': break;
            case 'checkbox': break;
            case 'email': $t = 'varchar(64)';
                break;
            case 'file': $t = 'varchar(255)';
                break;
            case 'hidden': $t = 'varchar(255)';
                break;
            case 'label': break;
            case 'number': $t = 'int';
                break;
            case 'password': $t = 'varchar(255)';
                break;
            case 'radio': $t = 'varchar(255)';
                break;
            case 'select': $t = 'varchar(255)';
                break;
            case 'submit': break;
            case 'text': $t = 'varchar(255)';
                break;
            case 'textarea': $t = 'text';
                break;
            default: break;
        }
        return $t;
    }

    public function get($field) {
        $f = $this->render_get_field($field);
        return $f['value'];
    }

    public function set($field, $value) {
        $this->fields[$field]['value'] = $value;
    }

    public function html_error($field) {
        $f = $this->render_get_field($field);
        return '<span>' . ($f['valid'] ? '' : $f['error']) . '</span>';
    }

    public function html_form_begin() {
        return "\n<form id = \"" . $this->id . '" class="' . $this->class . '" method="' . $this->method . '" action="' . $this->action . '">';
    }

    public function html_form_end() {
        return "</form>\n";
    }

    public function html_id($field) {
        $f = $this->render_get_field($field);
        return $this->id . '-' . $f['id'];
    }

    public function html_label($field) {
        $f = $this->render_get_field($field);
        return '<label for="' . $this->html_id($f) . '">' . $f['label'] . '</label>';
    }

    public function html_name($field) {
        $f = $this->render_get_field($field);
        return $this->id . '[' . $f['id'] . ']';
    }

    public function render($style = 'table') {
        echo $this->html_form_begin();
        foreach ($this->hidden as $id => $field) {
            echo $this->render_hidden($field);
        }
        $render_form_style = 'render_form_' . $style;
        $this->$render_form_style();
        echo $this->html_form_end();
    }

    public function render_form_table() {
        ?>
        <table id="<?php echo $this->id ?>-table">
            <tbody>
                <?php foreach ($this->fields as $id => $field): ?>
                    <?php $this->render_form_table_row($field) ?>
                <?php endforeach ?>
            </tbody>
        </table>
        <?php
    }

    public function render_form_table_row($field) {
        $render_field = 'render_' . $field['type'];
        ?>
        <tr <?php echo $field['valid'] ? '' : ' class="invalid"' ?>>
            <?php if ($field['type'] == 'label'): ?>
                <td class="label" colspan="3"><?php echo $this->render_label($field); ?></td>
            <?php else: ?>
                <td class="label"><?php echo $this->html_label($field) . "\n"; ?></td>
                <td class="field"><?php echo $this->$render_field($field) . "\n"; ?></td>
                <td class="error"><?php echo $this->html_error($field) . "\n"; ?></td>                        
            <?php endif ?>
        </tr>
        <?php
    }

    public function render_form_div() {
        ?>
        <div class="form-container" id="<?php echo $this->id ?>-container">
            <?php foreach ($this->fields as $id => $field): ?>
                <div class="form-field form-field-<?php echo $field['type'], $field['valid'] ? '' : ' invalid' ?>">
                    <?php if ($field['type'] == 'label'): ?>
                        <div class="form-field-label"><?php echo $this->render_label($field) . "\n"; ?></div>
                    <?php else: ?>
                        <div class="form-field-label"><?php echo $this->html_label($field) . "\n"; ?></div>
                        <div class="form-field-field">
                            <?php $render_field = 'render_' . $field['type']; ?>
                            <?php echo $this->$render_field($field) . "\n"; ?>
                        </div>
                        <div class="form-field-error"><?php echo $this->html_error($field) . "\n"; ?></div>                        
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
        <?php
    }

    private function render_get_field($field) {
        return is_array($field) ? $field : $this->fields[$field];
    }

    public function render_antybot($field) {
        return $this->render_input($field, 'text');
    }

    public function render_checkbox($field) {
        $f = $this->render_get_field($field);
        $checked = $f['value'] ? ' checked="checked"' : '';
        return '<input' . $checked . ' name="' . $this->html_name($f) . '" id="' . $this->html_id($f) . '" type="checkbox"> ';
    }

    public function render_email($field) {
        return $this->render_input($field, 'text');
    }

    public function render_file($field) {
        $f = $this->render_get_field($field);
        return '<input name="' . $this->html_name($f) . '" id="' . $this->html_id($f) . '" type="file"> ';
    }

    public function render_hidden($field) {
        $f = $this->render_get_field($field);
        return '<input name="' . $f['name'] . '" id="' . $this->html_id($f) . '" value="' . $f['value'] . '" type="hidden"> ';
    }

    public function render_input($field, $type) {
        $f = $this->render_get_field($field);
        return '<input name="' . $this->html_name($f) . '" class="form-' . $f['type'] . '" id="' . $this->html_id($f) . '" value="' . $f['value'] . '" type="' . $type . '"> ';
    }

    public function render_label($field) {
        $f = $this->render_get_field($field);
        return '<p>' . $f['label'] . '</p>';
    }

    public function render_number($field) {
        return $this->render_input($field, 'text');
    }

    public function render_password($field) {
        return $this->render_input($field, 'password');
    }

    public function render_radio($field) {
        $f = $this->render_get_field($field);
        $result = '<ul>';
        foreach ($f['options'] as $key => $val) {
            $id = $this->html_id($f) . '-' . $key;
            $result .= '<li><input' . (strcmp($f['value'], $key) == 0 ? ' checked="checked"' : '') . ' id="' . $id . '" name="' . $this->html_name($f) . '" value="' . $key . '" type="radio">';
            $result .= '<label for="' . $id . '">' . $val . '</label></li>';
        }
        $result .= '</ul>';
        return $result;
    }

    public function render_select($field) {
        $f = $this->render_get_field($field);
        $result = '<select name = "' . $this->html_name($f) . '" id = "' . $this->html_id($f) . '">';
        $result .= '<option value="-1"> </option>';
        foreach ($f['options'] as $key => $val) {
            $result .= '<option' . (strcmp($f['value'], $key) == 0 ? ' selected="selected"' : '') . ' value="' . $key . '">' . $val . '</option>';
        }
        $result .= '</select>';
        return $result;
    }

    public function render_submit($field) {
        $f = $this->render_get_field($field);
        return '<input name="' . $this->html_name($f) . '" id="' . $this->html_id($f) . '" value="' . $f['value'] . '" type="submit"> ';
    }

    public function render_text($field) {
        return $this->render_input($field, 'text');
    }

    public function render_textarea($field) {
        $f = $this->render_get_field($field);
        return '<textarea name="' . $this->html_name($f) . '" id="' . $this->html_id($f) . '">' . $f['value'] . '</textarea>';
    }

    public function render_date($field) {
        return $this->render_input($field, 'text');
    }

    public function validate() {
        $this->valid = $this->sent; // if not sent then not valid else validate :)
        if ($this->sent) {
            foreach ($this->fields as $id => $field) {
                if (isset($this->source[$this->id][$id])) {
                    $this->fields[$id]['value'] = $this->source[$this->id][$id];
                    if ($this->fields[$id]['required']) {
                        $validate_field = 'validate_' . $this->fields[$id]['type'];
                        if (!$this->$validate_field($this->fields[$id])) {
                            $this->fields[$id]['valid'] = false;
                            $this->valid = false;
                        }
                    }
                } else {
                    if ($this->fields[$id]['required']) {
                        $this->fields[$id]['valid'] = false;
                        $this->valid = false;
                    }
                }
            }
        }
        return $this->valid;
    }

    public function validate_antybot($field) {
        return (strcmp($field['value'], $field['expected']) == 0);
    }

    public function validate_checkbox($field) {
        return $field['value'];
    }

    public function validate_email($field) {
        $result = preg_match('/^.+@.+\..{2,3}$/', $field['value']);
        $compare = true;
        if (isset($field['compare'])) {
            $compare = (strcmp($field['value'], $this->fields[$field['compare']]['value']) == 0);
        }
        return ($result && $compare);
    }

    public function validate_file() {
        return true;
    }

    public function validate_hidden($field) {
        return (strcmp($field['value'], $field['expected']) == 0);
    }

    public function validate_label() {
        return true;
    }

    public function validate_number($field) {
        return is_numeric($field['value']);
    }

    public function validate_password() {
        return true;
    }

    public function validate_radio($field) {
        return ($field['value'] > -1);
    }

    public function validate_select($field) {
        return ($field['value'] > -1);
    }

    public function validate_submit() {
        return true;
    }

    public function validate_text($field) {
        return (strlen($field['value']) > 2);
    }

    public function validate_textarea($field) {
        return (strlen($field['value']) > 10);
    }

    public function validate_date($field) {
        $list = explode('-', $field['value']);
        return (count($list) === 3) ? checkdate($list[1], $list[2], $list[2]) : false;
    }

}
