<?php
/**
 * @author Denis Fakhrtdinov <me@shizz.ru>
 */

$Model = new FoobarModel();
$Model->mergeFrom(array(
    'name'  => 'Katie',
    'foo'   => 177,
    'bar'   => 'abc'
));
$Model->save();

$Model2 = new FoobarModel();
$Model2->loadById($Model->get('id'));
$Model2->exportDataGap(0); // returns array: id => $id$, name => Katie, foo => 177, bar => abc

$Model2->mergeFrom(array(
    'name'  => 'Trisha'
));
$Model2->save();

$Model3 = new FoobarModel();
$Model3->loadById($Model->get('id'));
$Model3->exportDataGap(0); // returns array: id => $id$, name => Trisha, foo => 177, bar => abc
$Model3->exportDataGap(1); // returns array: id => $id$, name => Trisha, bar => abc