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
 interface templateCInterface
 {
 	public function create_Etemplate($path);
	public function create_Ptemplate($path);
	public function create_Navigation($button);
	public function create_Body();
	public function create_Head($auto, $doctype, $meta, $css, $js);
	public function create_Footer();
 }
 ?>