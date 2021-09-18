<?php

helper('form');

echo form_open('bhaskara/update');

echo form_label('ID: ');
echo form_input('id', $edit['id'], 'readonly');

echo form_label('Digite o valor de "a": ');
echo form_input('a', $edit['a']);

echo form_label('Digite o valor de "b": ');
echo form_input('b', $edit['b']);

echo form_label('Digite o valor de "c": ');
echo form_input('c', $edit['c']);

echo form_submit('calcular', 'Calcular');

echo form_close();

?>