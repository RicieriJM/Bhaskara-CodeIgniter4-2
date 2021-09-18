<?php

helper('form');

echo form_open('bhaskara/insert');

echo form_label('Digite o valor de "a": ');
echo form_input('a', '');

echo form_label('Digite o valor de "b": ');
echo form_input('b', '');

echo form_label('Digite o valor de "c": ');
echo form_input('c', '');

echo form_submit('calcular', 'Calcular');

echo form_close();

?>