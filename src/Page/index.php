<?php
namespace App\Page;

class Index extends \Gt\Page\Logic {

public function go() {
    // TODO 1: Make $taskList read from a persistent data source.
    // (for now, just use an array).
    $taskList = [
        ["title" => "brew coffee",  "done" => true ],
        ["title" => "drink coffee", "done" => true ],
        ["title" => "code app",     "done" => false],
        ["title" => "profit",       "done" => false],
    ];

    // Handle user input first:
    if(isset($_POST["action"])) {
        switch($_POST["action"]) {
        case "add":
            // TODO 2: Implement add action.
            break;

        case "delete":
            // TODO 3: Implement delete action.
            break;

        case "update":
            // TODO 4: Implement update action.
            break;

        case "check":
            // TODO 5: Implement check action.
            break;
        }
    }

    // Output task list:
    foreach ($taskList as $task) {
        // TODO 6: Output task to list on page.
    }

    // TODO 7: Output one extra empty task, for adding new ones.
}

}#