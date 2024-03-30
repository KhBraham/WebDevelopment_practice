<?php
function checkbox (string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data[$name]) && in_array($value, $data[$name]))
    {
        $attributes .= 'checked';
    }
    return <<<html
    <input type="checkbox" name="{$name}[]" value="{$value}" $attributes>
html;
}
function radio (string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data[$name]) && $value === $data[$name])
    {
        $attributes .= 'checked';
    }
    return <<<html
    <input type="radio" name="{$name}" value="{$value}" $attributes>
html;
}
function dump($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function creneaux_html (array $creneaux) {
    if(empty($creneaux)){
        return 'Fermé';
    }
    $phrases = [];
    foreach ($creneaux as $creneau) {
        $phrases[] = "<strong>{$creneau[0]}h</strong> / <strong>{$creneau[1]}h</strong>";
    }
    return 'Ouvert ' . implode(' et ', $phrases);
}

function in_creneux (int $heure, array $creneaux): bool{
    foreach ($creneaux as $creneau) {
        $debut = $creneau[0];
        $fin = $creneau[1];
        if ($heure >= $debut && $heure <= $fin) {
            return true;
        }
    }
    return false;
}
?>