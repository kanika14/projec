<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$shivam = array
( array
        (   
            'colgid' => '121067',
            'name' => 'Shivam',
            'password' => '123456',
            'email' => 'shivampatel2708@gmail.com',
            'phone' => '9971163695',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '21 oct 1994 ',
            'gender' => 'male',
            ),
array
        (   
        
            'colgid' => '131002',
            'name' => 'jony',
            'password' => '123458',
            'email' => 'jony8@gmail.com',
            'phone' => '9971163675',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '5 june 1994 ',
            'gender' => 'male',
              ),


             array
        (   
        

            'colgid' => '131003',
            'name' => 'messy',
            'password' => '129458',
            'email' => 'messy9@gmail.com',
            'phone' => '9078163675',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '23 june 1995 ',
            'gender' => 'male',
              ),

             array
        (   
        

            'colgid' => '131004',
            'name' => 'meenu',
            'password' => '123450',
            'email' => 'meenu67@gmail.com',
            'phone' => '9971163567',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '5 july 1995 ',
            'gender' => 'female',
              ),


            array
        (   
        

            'colgid' => '131005',
            'name' => 'pinki',
            'password' => '333458',
            'email' => 'pinki89@gmail.com',
            'phone' => '9987653245',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '25 june 1994 ',
            'gender' => 'female',
              ),


            array
        (   

            'colgid' => '890',
            'name' => 'brijesh roy',
            'password' => '523458',
            'email' => 'bri898@gmail.com',
            'phone' => '9975563675',
            'type' => 'admin',
            'dept' => 'cse',
            'dob' => '5 oct 1984 ',
            'gender' => 'male',
              ),

             array
        (   
        

             'colgid' => '131006',
            'name' => 'himu',
            'password' => '123789',
            'email' => 'himu67@gmail.com',
            'phone' => '9451163675',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '5 jan 1996 ',
            'gender' => 'female',
              ),


             array
        (   
        

            'colgid' => '131007',
            'name' => 'kritik',
            'password' => '103458',
            'email' => 'krit68@gmail.com',
            'phone' => '9567890987',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '5 sept 1995 ',
            'gender' => 'male',
              ),


            array
        (   
        

            'colgid' => '131008',
            'name' => 'anjali',
            'password' => '678987',
            'email' => 'sh78@gmail.com',
            'phone' => '9967344456',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '25 june 1994 ',
            'gender' => 'female',
              ),



            array
        (   
        

            'colgid' => '892',
            'name' => 'rosy',
            'password' => '177458',
            'email' => 'rosy@gmail.com',
            'phone' => '9098987654',
            'type' => 'admin',
            'dept' => 'cse',
            'dob' => '9 march 1986 ',
            'gender' => 'female',
              ),


             array
        (   
        

            'colgid' => '131009',
            'name' => 'sneh',
            'password' => '100458',
            'email' => 'sneh78@gmail.com',
            'phone' => '9971168875',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '7 feb 1995 ',
            'gender' => 'male',
              ),

             array
        (   
    

            'colgid' => '1310110',
            'name' => 'veenu',
            'password' => '17898',
            'email' => 'veenu89@gmail.com',
            'phone' => '9900163675',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '9 june 1994 ',
            'gender' => 'female',
             ),
          array
        (   

            'colgid' => '131011',
            'name' => 'mukti',
            'password' => '993458',
            'email' => 'mukti0@gmail.com',
            'phone' => '7890987654',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '23 sep 1995 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131012',
            'name' => 'joy',
            'password' => '99342',
            'email' => 'joy7@gmail.com',
            'phone' => '7890787659',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '23 nov 1995 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '131013',
            'name' => 'runi',
            'password' => '993450',
            'email' => 'runi89@gmail.com',
            'phone' => '7890987789',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '23 nov 1996 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131014',
            'name' => 'dinesh',
            'password' => '9934582',
            'email' => 'dinesh60@gmail.com',
            'phone' => '7877987654',
            'type' => 'studnt',
            'dept' => 'cse',
            'dob' => '23 feb 1995 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '131015',
            'name' => 'sonal',
            'password' => '9093458',
            'email' => 'son0090@gmail.com',
            'phone' => '7999876543',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '26 sep 1996 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131016',
            'name' => 'mukti roy',
            'password' => '9934509',
            'email' => 'mukti560@gmail.com',
            'phone' => '7890987567',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '23 feb 1995 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131017',
            'name' => 'yukti',
            'password' => '993498',
            'email' => 'yukti0@gmail.com',
            'phone' => '7898987654',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '5 dec 1995 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131018',
            'name' => 'prem',
            'password' => '9934558',
            'email' => 'mprem0@gmail.com',
            'phone' => '7877765432',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '5 sep 1995 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '131019',
            'name' => 'jyoti',
            'password' => '9934582',
            'email' => 'jyoti9@gmail.com',
            'phone' => '9999269245',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '4 aug 1995 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131020',
            'name' => 'kanika',
            'password' => '99994582',
            'email' => 'sh78@gmail.com',
            'phone' => '9716715962',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '14 aug 1996 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131021',
            'name' => 'kunik',
            'password' => '997582',
            'email' => 'kunik7@gmail.com',
            'phone' => '9716718962',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '14 oct 1996 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '131022',
            'name' => 'dev',
            'password' => '99994002',
            'email' => 'dev9@gmail.com',
            'phone' => '9716715909',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '4 nov 1995 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '131023',
            'name' => 'komal',
            'password' => '999945822',
            'email' => 'komi8@gmail.com',
            'phone' => '9716715567',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '4 aug 1996 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131024',
            'name' => 'ravi',
            'password' => '9999458',
            'email' => 'rvi79@gmail.com',
            'phone' => '9716716762',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '9 aug 1995 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '893',
            'name' => 'bhadur',
            'password' => '99994582345',
            'email' => 'smsr67@gmail.com',
            'phone' => '9765432098',
            'type' => 'admin',
            'dept' => 'cse',
            'dob' => '14 feb 1985 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '131025',
            'name' => 'aadi',
            'password' => '99000582',
            'email' => 'shrm87@gmail.com',
            'phone' => '9357890987',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '2 aug 1996 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '131026',
            'name' => 'jagesh',
            'password' => '990009882',
            'email' => 'jggu789@gmail.com',
            'phone' => '9716716782',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '17 july 1996 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '131027',
            'name' => 'rudra',
            'password' => '56784582',
            'email' => 'rudr59@gmail.com',
            'phone' => '9454532345',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '9 aug 1995 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '131028',
            'name' => 'veer',
            'password' => '99994502',
            'email' => 'veer4@gmail.com',
            'phone' => '9799999876',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '8 dec 1995 ',
            'gender' => 'male',
            ),


              array
        (   

            'colgid' => '131029',
            'name' => 'guddu',
            'password' => '9977762',
            'email' => 'guddu9@gmail.com',
            'phone' => '9718888889',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '2 feb 1995 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '022',
            'name' => 'ram',
            'password' => '99967678',
            'email' => 'rms7@gmail.com',
            'phone' => '9712222345',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '14 aug 1988 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '003',
            'name' => 'soni',
            'password' => '999945800',
            'email' => 'sni5@gmail.com',
            'phone' => '9716715955',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '1 aug 1988 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131030',
            'name' => 'anju',
            'password' => '999945822',
            'email' => 'shnju79@gmail.com',
            'phone' => '9716715000',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '30 dec 1995 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131031',
            'name' => 'mukesh',
            'password' => '99958009',
            'email' => 'muku6@gmail.com',
            'phone' => '9716715882',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '1 june 1995 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '131032',
            'name' => 'kanika roy',
            'password' => '99994582',
            'email' => 'roy6@gmail.com',
            'phone' => '9765434567',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '20 aug 1995 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131033',
            'name' => 'deenu',
            'password' => '99654582',
            'email' => 'dinu76@gmail.com',
            'phone' => '9765434765',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '20 feb 1995 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '004',
            'name' => 'soniya',
            'password' => '999945805',
            'email' => 'sniy.s5@gmail.com',
            'phone' => '9716715785',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '18 feb 1988 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '005',
            'name' => 'munni bai',
            'password' => '56945800',
            'email' => 'mnib5@gmail.com',
            'phone' => '9716715009',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '15 aug 1989 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '006',
            'name' => 'rajender',
            'password' => '9997620',
            'email' => 'raj8975@gmail.com',
            'phone' => '9716543234',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '9 march 1988 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '007',
            'name' => 'amit chawla',
            'password' => '99976203',
            'email' => 'mit6@gmail.com',
            'phone' => '9716543654',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '29 march 1989 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '008',
            'name' => 'rajender singh',
            'password' => '99977654',
            'email' => 'rjui75@gmail.com',
            'phone' => '9756565434',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '20 feb 1984 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '009',
            'name' => 'heena',
            'password' => '9997655',
            'email' => 'hinu70@gmail.com',
            'phone' => '9716503230',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '9 dec 1989 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '010',
            'name' => 'gorav',
            'password' => '7867620',
            'email' => 'gorus7@gmail.com',
            'phone' => '9716543234',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '2 oct 1988 ',
            'gender' => 'male'
            ),


              array
        (   

            'colgid' => '011',
            'name' => 'rajender shyam',
            'password' => '8897620',
            'email' => 'shymu34@gmail.com',
            'phone' => '9710043234',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '29 march 1987 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '012',
            'name' => 'miru roy',
            'password' => '8897870',
            'email' => 'miru70@gmail.com',
            'phone' => '9710043008',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '29 dec 1988 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '013',
            'name' => 'mitu singh',
            'password' => '8897097',
            'email' => 'smitu2@gmail.com',
            'phone' => '9719943234',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '30 july 1987 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '014',
            'name' => 'sumit',
            'password' => '8609620',
            'email' => 'sumit6@gmail.com',
            'phone' => '9710043787',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '9 march 1987 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '015',
            'name' => 'tinu singh',
            'password' => '88976234',
            'email' => 'tinu65@gmail.com',
            'phone' => '9710043323',
            'type' => 'teacher',
            'dept' => 'cse',
            'dob' => '29 dec 1987 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131034',
            'name' => 'deenu roy',
            'password' => '94564582',
            'email' => 'deeny656@gmail.com',
            'phone' => '9765434456',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '20 july 1995 ',
            'gender' => 'male',
            ),
              array
        (   

            'colgid' => '131035',
            'name' => 'nitu',
            'password' => '90984582',
            'email' => 'nitus56@gmail.com',
            'phone' => '9766734765',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '20 june 1995 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131036',
            'name' => 'suppi',
            'password' => '9045235',
            'email' => 'suppi4@gmail.com',
            'phone' => '9767678765',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '20 june 1996 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131037',
            'name' => 'nitu roy',
            'password' => '9098992',
            'email' => 'roynitu76@gmail.com',
            'phone' => '9766884765',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '20 dec 1995 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131038',
            'name' => 'pooji',
            'password' => '909845822',
            'email' => 'pooji8@gmail.com',
            'phone' => '9700734980',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '2 dec 1995 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '131036',
            'name' => 'mehil',
            'password' => '90984509',
            'email' => 'mehil6@gmail.com',
            'phone' => '7766734765',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '20 feb 1995 ',
            'gender' => 'male',
            ),

              array
        (   

            'colgid' => '131037',
            'name' => 'nitu singh roy ',
            'password' => '77984582',
            'email' => 'nitusr656@gmail.com',
            'phone' => '9766734760',
            'type' => 'student',
            'dept' => 'cse',
            'dob' => '2 june 1996 ',
            'gender' => 'female',
            ),

              array
        (   

            'colgid' => '900',
            'name' => 'dev singh', 
            'password' => '9999269268',
            'email' => 'devs07@gmail.com',
            'phone' => '9765432099',
            'type' => 'admin',
            'dept' => 'cse',
            'dob' => '14 dec 1986 ',
            'gender' => 'male',
        )
);

if(is_array($shivam)){

    $sql = "INSERT INTO myguests (colgid, name, password, email,phone,type,dept,dob,gender) values ";

    $valuesArr = array();
    foreach($shivam as $row){

        $colgid =  $row['colgid'] ;
        $phone = $row['phone'];
        $password =  $row['password'] ;
        $type =  $row['type'] ;
        $dept =  $row['dept'] ;
        $dob =  $row['dob'] ;
        $email =  $row['email'] ;
        $gender =  $row['gender'] ;
        $name = $row['name'] ;

        $valuesArr[] = "('$colgid','$name','$password','$email','$phone', '$type', '$dept', '$dob', '$gender')";
    }

    $sql .= implode(',', $valuesArr);

    mysqli_query($conn, $sql) or exit(mysqli_error($conn)); 
}
?>