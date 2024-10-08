<?php

namespace admin;
use database\Database;

class Menu extends Admin {

    public function index(){

        $db = new Database();

        $sql = "SELECT m1.*, m2.name as parent FROM menus m1 LEFT JOIN menus m2 ON m1.parent_id = m2.id ;";

        $menus = $db->select($sql)->fetchAll();
        require_once (BASE_PATH . '/template/admin/menu/index.php');
    }

    public function create(){

        $db = new Database();
        $sql = "SELECT * FROM menus WHERE parent_id IS NULL;";
        $menus = $db->select($sql)->fetchAll();
        require_once (BASE_PATH . '/template/admin/menu/create.php');
    }

    public function store($request){

        $db = new Database();
        $db->insert("menus", array_keys(array_filter($request)), array_filter($request));
        $this->redirect('admin/menu');
    }

    public function edit($id){

        $db = new Database();
        $sql = "SELECT * FROM menus WHERE id = ?;";
        $menu = $db->select($sql, [intval($id)])->fetch();
        $sql = "SELECT * FROM menus WHERE parent_id IS NULL;";
        $menus = $db->select($sql)->fetchAll();
        require_once (BASE_PATH . '/template/admin/menu/edit.php');
    }

    public function update($request, $id){

        $db = new Database();
        $db->update("menus",$id, array_keys(($request)), ($request));
        $this->redirect('admin/menu');
    }

    public function delete($id){

        $db = new Database();
        $db->delete('menus', $id);
        $this->redirectBack();
    }
}
