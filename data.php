<?php

$data = [
    [
      'tgid' =>  '1', 
      'tgname' => 'Category of Menu',
      'tgnamekh' => 'ប្រភេទ មាតិកា',
      'tgordering' => '1',
      'tgawesome_icon' => 'fa fa-briefcase',
      'tglink' => null,
      'tgstatus' => '1',
      'tgcreated_at' => '2023-10-28',
      'tgcreated_by' => '1',
      'tgtrash' => '0',

    ],
    [
        'tgid' => '2',
        'tgname' => 'Articles',
        'tgnamekh' => 'អត្ថបទ',
        'tgordering' => '2',
        'tgawesome_icon' => 'fa fa-list-alt',
        'tglink' => null,
        'tgstatus' => '1',
        'tgcreated_at' => '2023-10-29',
        'tgcreated_by' => '1',
        'tgtrash' => '0',
    ],
    [
        'tgid' => '3',
        'tgname' => 'Other Contents',
        'tgnamekh' =>  'មាតិកាផ្សេងៗ',
        'tgordering' =>  '3',
        'tgawesome_icon' => 'fas fa-book',
        'tglink' => null,
        'tgstatus' =>  '1' ,
        'tgcreated_at' => '2023-10-29',
        'tgcreated_by' =>  '1',
        'tgtrash' => '0',
    ],
    [
        'tgid' => '4',
        'tgname' => 'System Config',
        'tgnamekh' => 'កំណត់ប្រតិបត្តិការ',
        'tgordering' =>  '4',
        'tgawesome_icon' => 'fa fa-cogs',
        'tglink' => null,
        'tgstatus' =>  '1',
        'tgcreated_at' => '2023-10-29',
        'tgcreated_by' => '1',
        'tgtrash' => '0',
    ],
    [

      'tgid' => '5',
      'tgname' => 'User Management' ,
      'tgnamekh' => 'គ្រប់គ្រងអ្នកប្រើប្រាស់' ,
      'tgordering' => '5',
      'tgawesome_icon' => 'fas fa-users' ,
      'tglink' => null,
      'tgstatus' => '1',
      'tgcreated_at' => '2023-11-02' ,
      'tgcreated_by' => '0',
      'tgtrash' => '0',
    ],
];

function ToObject($Array) {
     
    $object = new stdClass();
    foreach ($Array as $key => $value) {
        if (is_array($value)) {
            $value = ToObject($value);
        }
        $object->$key = $value;
    }
    return $object;
}

$convertedObj = ToObject($data);

?>
