<?php
interface user_interface {

	public function index(): void;

	public function user($user): void;

	public function create(): void;

	public function delete($id): void;

}
