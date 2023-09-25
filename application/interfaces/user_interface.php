<?php
interface user_interface {

	public function index(): void;

	public function create(): void;

	public function edit($id): void;

	public function delete($id): void;

}
