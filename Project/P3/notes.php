<?php
// notes.php
header('Content-Type: application/json');

$notesData = [
    "Form 1" => [
        ["name" => "Bahasa Melayu", "img" => "image/BM1.jpeg", "author" => "Author A", "date" => "2022-01-01"],
        ["name" => "English", "img" => "image/BI1.jpeg", "author" => "Author B", "date" => "2022-02-01"],
        ["name" => "Mathematics", "img" => "image/math1.jpeg", "author" => "Author C", "date" => "2022-03-01"],
        ["name" => "Science", "img" => "image/science1.jpeg", "author" => "Author D", "date" => "2022-04-01"],
        ["name" => "Sejarah", "img" => "image/sejarah1.jpeg", "author" => "Author E", "date" => "2022-05-01"]
    ],
    "Form 2" => [
        ["name" => "Bahasa Melayu", "img" => "image/BM2.jpeg", "author" => "Author A", "date" => "2022-01-01"],
        ["name" => "English", "img" => "image/BI2.jpeg", "author" => "Author B", "date" => "2022-02-01"],
        ["name" => "Mathematics", "img" => "image/math2.jpeg", "author" => "Author C", "date" => "2022-03-01"],
        ["name" => "Science", "img" => "image/science2.jpeg", "author" => "Author D", "date" => "2022-04-01"],
        ["name" => "Sejarah", "img" => "image/sejarah2.jpeg", "author" => "Author E", "date" => "2022-05-01"]
    ],
    "Form 3" => [
        ["name" => "Bahasa Melayu", "img" => "image/BM3.jpeg", "author" => "Author A", "date" => "2022-01-01"],
        ["name" => "English", "img" => "image/BI3.jpeg", "author" => "Author B", "date" => "2022-02-01"],
        ["name" => "Mathematics", "img" => "image/math3.jpeg", "author" => "Author C", "date" => "2022-03-01"],
        ["name" => "Science", "img" => "image/science 3.jpeg", "author" => "Author D", "date" => "2022-04-01"],
        ["name" => "Sejarah", "img" => "image/sejarah3.jpeg", "author" => "Author E", "date" => "2022-05-01"]
    ],
    "Form 4" => [
        ["name" => "Bahasa Melayu", "img" => "image/BM4.jpeg", "author" => "Author A", "date" => "2022-01-01"],
        ["name" => "English", "img" => "image/BI4.jpeg", "author" => "Author B", "date" => "2022-02-01"],
        ["name" => "Mathematics", "img" => "image/math4.jpeg", "author" => "Author C", "date" => "2022-03-01"],
        ["name" => "Sejarah", "img" => "image/sejarah4.jpeg", "author" => "Author D", "date" => "2022-05-01"],
        ["name" => "Additional Mathematics", "img" => "image/addmath4.jpeg", "author" => "Author E", "date" => "2022-06-01"],
        ["name" => "Chemistry", "img" => "image/chemist4.jpeg", "author" => "Author F", "date" => "2022-07-01"],
        ["name" => "Physics", "img" => "image/physic4.jpeg", "author" => "Author G", "date" => "2022-08-01"]
    ],
    "Form 5" => [
        ["name" => "Bahasa Melayu", "img" => "image/BM5.jpeg", "author" => "Author A", "date" => "2022-01-01"],
        ["name" => "English", "img" => "image/BI5.jpeg", "author" => "Author B", "date" => "2022-02-01"],
        ["name" => "Mathematics", "img" => "image/math5.jpeg", "author" => "Author C", "date" => "2022-03-01"],
        ["name" => "Sejarah", "img" => "image/sejarah5.jpeg", "author" => "Author D", "date" => "2022-05-01"],
        ["name" => "Additional Mathematics", "img" => "image/addmath5.jpeg", "author" => "Author E", "date" => "2022-06-01"],
        ["name" => "Chemistry", "img" => "image/chemist5.jpeg", "author" => "Author F", "date" => "2022-07-01"],
        ["name" => "Physics", "img" => "image/physic5.jpeg", "author" => "Author G", "date" => "2022-08-01"]
    ]
    // Add other forms data...
];

$form = $_GET['form'] ?? '';
if (isset($notesData[$form])) {
    echo json_encode($notesData[$form]);
} else {
    echo json_encode([]);
}
?>

