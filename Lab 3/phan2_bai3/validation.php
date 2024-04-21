<?php
    function validateInput($value, $minLength, $maxLength, $type = 'string') {
        if ($type === 'string' && (!is_string($value) || strlen($value) < $minLength || strlen($value) > $maxLength)) {
            echo "Invalid $type. It should be a string with length between $minLength and $maxLength characters.";
            exit;
        } elseif ($type === 'numeric' && (!is_numeric($value))) {
            echo "Invalid $type. It should be a numeric value.";
            exit;
        }
    
        return $value;
    }
    
    // Example usage:
    
    $name = validateInput($_POST['name'], 5, 40);
    $description = validateInput($_POST['description'], 5, 5000);
    $price = validateInput($_POST['price'], null, null, 'numeric');
    $img = validateInput($_POST['img'], null, 255);
    
?>