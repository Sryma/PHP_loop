<?php

//array('', '')


// 
//[]

// numeric array
$names = ['billla', 'Jason', 'korim'];

// associative array
$persons = [

	'billa' => 'billa Jason',
    'billa' => 'billa1 Jason1',
    'billa' => 'billa2 Jason2',
    'billa' => 'billa3 Jason3',
	
];

/*foreach($persons as $key => $element){

	// code
	echo $key;

}*/

$fields = [

        'first_name' => [
            'label' => 'Name',
            'type' => 'number',
            'classes' => [],
            'index' => true,
            'filter' => 'string',
            'options' => ['one', 'two', 'three'],

        ],

        'city' => [
            'label' => 'City\'r Naam',
            'type' => 'text',
            'classes' => [],
            'index' => true,
            'show' => 'img',
            'options' => ['four', 'five', 'six'],


        ],

        'post_id' => [
            'label' => 'Post',
            'type' => 'relation',
            'options' => ['post', 'title'],
            'index' => true,
        ]

    ];


// key ' ' type

/*foreach($fields as $key => $value){

	//
	echo $key;
	echo ' ';
	echo $value['type'];

}*/

/*foreach($fields as $key => $value){

	//
	echo $key;
	echo '<br>';

	$test = $value['options'];

	foreach($test as $element){
		echo $element;
		echo '<br>';
	}

}*/

// 1. which variable holds what value.

// it will take the key of the array, and will put its value
// in the variable after the arrow sign


$books = [

    'Comic' => [
        'Title'=>'Superman',
        'Author'=>'Jerry Siegel and Joe Shuster',
        'Publication Date' => '1938',
        'something' => [

            'one' => 'One',
            'two' => 'Two',
            'three' => 'Three'

        ]
    ],

    'Horror' => [
        'Title'=>'Carrie',
        'Author'=>'Stephen King',
        'Publication Date'=>'1974',
        'something' => [

            'four' => 'Four',
            'five' => 'Five'

        ]
    ]

];


foreach ($books as $key => $value) {

    // $key = 'Comic'
    // $value = [
    //     'Title'=>'Superman',
    //     'Author'=>'Jerry Siegel and Joe Shuster',
    //     'Publication Date' => '1938'
    // ]
    echo $key;
    echo '<br>';

    foreach ($value as $key2 => $value2) {
        
        // $key2 = 
        // $value2 = 
        if (is_array($value2)) {
           
            ///
            foreach ($value2 as $key3 => $value3) {

                echo $key3 . ' ' . $value3;
                echo '<br>';

            }


        } else {

            echo $key2 . ' ' . $value2;
            echo '<br>';

        }

        

    }


    
}

?>