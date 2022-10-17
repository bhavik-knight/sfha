<?php

$authors = array("Charles Dickens", "Leo Tolstoy", "Shakespeare", "Jane Austin");
$associativeAuthors = array(
    "poetic" => "Shakespeare",
    "brilliant" => "Jane Austin",
    "quarky" => "Charles Dickens"
);

# add item in array, preferred way over array_push()
$authors[] = "Dan Brown";
$authors[] = 10;

# sort the array
sort($authors);
print_r($authors);

asort($associativeAuthors);
print_r($associativeAuthors);
ksort($associativeAuthors);
print_r($associativeAuthors);

# check for keys, values in arrays
echo array_key_exists(2, $authors) . "\n";
echo in_array("10", $authors, true) . "\n";
echo in_array("10", $authors) . "\n";

# remove elements from the array
echo array_pop($authors) . "\n";
unset($authors[0], $authors[2]);
print_r($authors);
print_r($associativeAuthors);

foreach ($associativeAuthors as $k => $v) {
    print("{$k}: {$v}\n");
}

# nested arrays, or multi-dimentional arrays
$auth = [
    "male" => [
        "Charles Dickens" => ["A Christmas Carol", "Oliver Twist"],
        "Shakespeare" => ["Romeo & Juliet", "Richard III"],
        "Mark Twain" => ["Tom Sawyer", "Huck Finn"]
    ],

    "female" => [
        "L. M. Montogmery" => ["Anne of Green Gables", "Anne of Avonlea"],
        "Louisa May Alcott" => ["Little Women"]
    ]
];

echo count($auth) . "\n";
echo count($auth, COUNT_RECURSIVE) . "\n";
print_r($auth["male"]["Shakespeare"]);
