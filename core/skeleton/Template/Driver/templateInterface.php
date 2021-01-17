<?php
/*!
 * _Ghst_ Framework-
 *
 * Created By: Arize V.
 * Realesd under the _ghst_ framework-
 * Copyright of N-Aspire-
 *
 * Date: 2016-07-19.
 */
interface templateInterface
{
public function displayHead($filename, $placeholder, $subContent);
public function displayBody($filename, $placeholder, $subContent);
public function displayFooter($filename, $placeholder, $subContent);
}
?>