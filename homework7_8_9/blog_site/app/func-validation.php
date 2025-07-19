<?php
// Data sanitization
function sanitization($input)
{
    //trim whitespaces on the right and left sides
    $results = trim($input);

    //remove all html special chars
    $results = htmlspecialchars($results);

    //convert all multi whitespaces, tabs, and new lines into a single space.
    $results = preg_replace('/\s+/', ' ', $results);
    return $results;
}

// Data validation
function passwordValidation($pass1, $pass2){
    $results = [];
    if($pass1 !== $pass2) {
        $results[] = 'password is not matching!';
    }
    return $results;
}
enum inputType: string
{
    case name = 'name';
    case email = 'email';
    case phone = 'phone';
    case message = 'message';
    case password = 'password';

    case title = 'title';
    case publisher = 'publisher';
    case content = 'content';
    case image = 'image';
}
function validation($input, inputType $field): array
{
    //$results = array();

    // name validation
    if ($field == inputType::name) {
        //not empty
        //length >= 4
        //length <= 50

        if ($input == null) {
            $results[] = "username is required!";
        } elseif (strlen($input) < 4) {
            $results[] = "username length must be >= 4";
        } elseif (strlen($input) > 50) {
            $results[] = "username length must be <=50";
        }
    // email validation
    } elseif ($field == inputType::email) {
        //not empty
        //is email
        //length >= 8
        //length <= 50
        if ($input == null) {
            $results[] = "email is required!";
        } elseif (strlen($input) < 8) {
            $results[] = "email length must be >= 8";
        } elseif (strlen($input) > 50) {
            $results[] = "email length must be <=50";
        } elseif (filter_var(!$input, FILTER_VALIDATE_EMAIL)) {
            $results[] = "please enter a valid email!";
        }
    // phone validation
    } elseif ($field == inputType::phone) {
        //not empty
        //contains numbers only
        //length >= 10
        //length <= 15
        if ($input == null) {
            $results[] = "phone number is required!";
        } elseif (strlen($input) < 10) {
            $results[] = "phone number length must be >= 8";
        } elseif (strlen($input) > 50) {
            $results[] = "phone number length must be <=15";
        } elseif (!is_numeric($input)) {
            $results[] = "please enter a valid phone number!";
        }
    // message validation
    } elseif ($field == inputType::message) {
        //not empty
        //length >= 150
        //length <= 250
        if ($input == null) {
            $results[] = "message is required!";
        } elseif (strlen($input) < 150) {
            $results[] = "Message length must be >= 150";
        }
        if (strlen($input) > 250) {
            $results[] = "Message length must be <= 250";
        }
    // password validation
    } elseif ($field == inputType::password) {
        //not empty
        //length >= 8
        //length <= 15
        if ($input == null) {
            $results[] = "message is required!";
        } elseif (strlen($input) < 8) {
            $results[] = "Message length must be >= 8";
        }
        if (strlen($input) > 15) {
            $results[] = "Message length must be <= 15";
        }
    // Post title validation
    } elseif ($field == inputType::title) {
        //not empty
        //length >= 4
        //length <= 100
        if ($input == null) {
            $results[] = "Post title is required!";
        } elseif (strlen($input) < 4) {
            $results[] = "Post title length must be >= 4";
        }
        if (strlen($input) > 100) {
            $results[] = "Post title length must be <= 100";
        }
    // Post publisher validation
    } elseif ($field == inputType::publisher) {
        //not empty
        //length >= 4
        //length <= 50
        if ($input == null) {
            $results[] = "Publisher is required!";
        } elseif (strlen($input) < 4) {
            $results[] = "Publisher length must be >= 4";
        }
        if (strlen($input) > 50) {
            $results[] = "Publisher length must be <= 50";
        }
    // Post content validation
    } elseif ($field == inputType::content) {
        //not empty
        //length >= 250
        //length <= 1500
        if ($input == null) {
            $results[] = "Post content is required!";
        } elseif (strlen($input) < 250) {
            $results[] = "Post content length must be >= 250";
        }
        if (strlen($input) > 1500) {
            $results[] = "Post content length must be <= 1500";
        }
    // Post Image validation
    } elseif ($field == inputType::image) {

        // grabbing an instance of the image (array)
        $image = $input;
        //dumpDie($image['size'],1);
        // if image is uploaded
        if (($image['size'] > 0)) {
            //dumpDie($image['size'],1);
            //Type Validation
            $allowedTypes = ['image/png', 'image/jpg', 'image/jpeg', 'image/jif', 'image/svg', 'image/webp'];
            $rcvdType = $image['type'];
            if (! in_array($rcvdType, $allowedTypes)) {
                $results[] = 'This image type is not allowed!';
            }

            //Size Validation
            $allowedSize = 2 * 1024 * 1024;
            $rcvdSize = $image['size'];
            if ($rcvdSize > $allowedSize) {
                $results[] = 'This image is oversize, maximum allowed size is 2 MB!';
            }
        } else {
            //error no uploaded image
            $results[] = 'no image was uploaded!';
        }
    }

    return isset($results) ? $results : array();
}
