<?php
require_once __DIR__ . '/../models/Record.php';


class RecordController extends CommonController {
    public function actionIndex() {
        $records = Record::findAll();
        $labels = Record::$label;

        return $this->renderFile('index', [
            'records' => $records,
            'labels' => $labels
        ]);
    }

    public function actionUpdate() {
        $title = $_GET['title'];

        return $this->renderFile('update', [
            'record' => Record::findOne()
        ]);
    }

    public function actionDelete() {
        $title = $_GET['title'];
        return Record::delete($title);
    }
}