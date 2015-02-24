<?php
namespace App\Page;

class Index extends \Gt\Page\Logic {

public function go() {
    $data = new \Gt\Data\Source\Csv("todo-app");
    $taskList = $data->getTable("taskList");

    // Handle user input first:
    if(isset($_POST["action"])) {
        switch($_POST["action"]) {
        case "add":
            $taskList->add([
                "done" => false,
                "title" => $_POST["title"],
                "dateTimeCreated" => date("Y-m-d H:i:s"),
            ]);
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
    foreach ($taskList as $i => $task) {
        // Obtain a clone of the original <li>.
        $li = $this->template->get("task");
        // Output the task details:
        $li->querySelector(".index")->value = $i;
        $li->querySelector("input[name='title']")->value = $task["title"];

        // If the task is done, mark it as done on the page.
        if($task["done"]) {
            $li->classList->add("done");
            $li->querySelector("[value='check']")->textContent = "Uncheck";
        }

        // Add the template back to the page.
        $li->appendTemplate();
    }

    // Output 'add' row:
    $li = $this->template->get("task");
    $li->querySelector("button[value='update']")->value = "add";
    $li->querySelector("input[name='title']")->setAttribute("autofocus", true);
    $li->appendTemplate();
}

}#